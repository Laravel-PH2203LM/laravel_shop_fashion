<?php

namespace App\Http\Controllers;

use App\Helper\ShoppingCart;
use App\Models\Attribute;
use App\Models\Order;
use App\Models\OrderDetail;
use App\Models\Payments;
use App\Models\Product;
use App\Models\ProductAttribute;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Mail;

class CartController extends Controller
{
    public function add(Product $pro, ShoppingCart $cart)
    {
        $quantity = request('quantity',1);
        $sizeId = request('size');
        $colorId = request('color');
        $size = Attribute::find($sizeId);
        $color = Attribute::find($colorId);
        $cart->add($pro,$size,$color,$quantity);

        return redirect()->route('view');
    }

    public function clear(ShoppingCart $cart)
    {
        $cart->clear();
        return redirect()->route('shop');
    }

    public function delete($id, ShoppingCart $cart)
    {
        $sizeId = request('size');
        $colorId = request('color');
        $size = Attribute::find($sizeId);
        $color = Attribute::find($colorId);
            $cart->delete($id,$size,$color);
        return redirect()->route('view');
    }

    public function update($id, ShoppingCart $cart)
    {
        $sizeId = request('size');
        $colorId = request('color');
        $size = Attribute::find($sizeId);
        $color = Attribute::find($colorId);
        $quantity = request('quantity', 1);
        $quantity = $quantity > 0 ? floor($quantity) : 1;
        $cart->update($id,$quantity,$color,$size);
        return redirect()->route('view');
    }

    public function view(ShoppingCart $cart)
    {
        return view('cart',compact('cart'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function checkout(ShoppingCart $cart)
    {
        $payments = Payments::all();
        return view('checkout',compact('cart','payments'));
    }

    // Xử lí đơn đặt hàng
    public function order(Request $request, ShoppingCart $cart)
    {
        // Nếu trong giỏ hàng chưa có sản phẩm nào sẽ quay về shop để đặt
        if($cart->items != '') {
            return redirect()->route('shop');
        } else {
            $data = $request->only('user_id','full_name','address','phone','email','payment_id','status','price_shipping');
            $order = Order::create([
                'user_id' => $data['user_id'],
                'full_name' => $data['full_name'],
                'address' => $data['address'],
                'phone' => $data['phone'],
                'email' => $data['email'],
                'payment_id' => $data['payment_id'],
                'status' => 0,
                'price_shipping' => $cart->shipping
            ]);
        }
        // Nếu tồn tại giỏ hàng, thì mới tiếp tục lưu đơn hàng vào database
        if($cart->items != '') {
            return redirect()->back();
        }
        foreach($cart->items as $item) {
            OrderDetail::create([
                'order_id' => $order->id,
                'product_id' => $item->id,
                'name' => $item->name,
                'quantity' => $item->quantity,
                'color_id' => $item->color->id,
                'size_id' => $item->size->id,
                'amount' => $item->quantity * $item->price
            ]);
            }

        // Xóa giỏ hàng sau khi thanh toán thành công
            session(['cart' => []]);
            return redirect()->route('shop');
        }
}
