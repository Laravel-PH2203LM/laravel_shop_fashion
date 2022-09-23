<?php

namespace App\Http\Controllers;

use App\Helper\ShoppingCart;
use App\Models\Attribute;
use App\Models\Product;
use App\Models\ProductAttribute;
use Illuminate\Http\Request;

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
}
