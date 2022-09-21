<?php

namespace App\Http\Controllers;

use App\Helper\ShoppingCart;
use App\Models\Product;
use App\Models\ProductAttribute;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function add(Product $pro, ProductAttribute $attribute, ShoppingCart $cart)
    {
        $cart->add($pro);
        return redirect()->route('view');
    }

    public function clear(ShoppingCart $cart)
    {
        $cart->clear();
        return redirect()->route('shop');
    }

    public function delete($id, ShoppingCart $cart)
    {
        $cart->delete($id);
        return redirect()->route('view');
    }

    public function update($id, ShoppingCart $cart)
    {
        $quantity = request('quantity',1);
        $quantity = $quantity > 0 ? floor($quantity) : 1;
        $cart->update($id, $quantity);
        return redirect()->route('view');
    }

    public function view(ShoppingCart $cart)
    {
        return view('cart',compact('cart'));
    }
}
