<?php
namespace App\Helper;
use phpDocumentor\Reflection\Types\Object_;

class ShoppingCart {
    public $items = [];
    public $totalAmount = 0;
    public $totalQuantity = 0;
    public $shipping = 0;

    public function __construct()
    {
        $this->items = session('cart') ? session('cart') : [];
        $this->totalAmount = $this->getTotalAmount();
        $this->totalQuantity = $this->getTotalQtt();
        $this->shipping = 30000;
    }

    // Thêm sản phẩm vào giỏ hàng
    public function add($product, $quantity = 1)
    {
        if(isset($this->items[$product->id])) {
            $this->items[$product->id]->quantity += $quantity;
        } else {
        $item = (object) [
          'id' => $product->id,
          'name' => $product->name,
          'quantity' => $quantity,
          'price' => $product->discount ? $product->discount : $product->price,
          'image' => $product->ProductImage[0]->path,
          'size'=> $product->ProductSize,
        ];
            $this->items[$product->id] = $item;
        }
        session(['cart'=>$this->items]);
    }

    public function clear()
    {
        session(['cart' => []]);
    }

    // Cập nhật sản phẩm trong giỏ hàng
    public function update($id, $quantity = 1)
    {
        if(isset($this->items[$id])) {
            $this->items[$id]->quantity = $quantity;
            session(['cart'=>$this->items]);
        }
    }

    // Xóa sản phẩm khỏi giỏ hàng
    public function delete($id)
    {
        if(isset($this->items[$id])) {
            unset($this->items[$id]);
            session(['cart'=>$this->items]);
        }
    }

    private function getTotalQtt()
    {
        $totalQtt = 0;
        foreach ($this->items as $item) {
            $totalQtt += $item->quantity;
        }
        return $totalQtt;
    }

    private function getTotalAmount()
    {
        $totalAmount = 0;
        foreach ($this->items as $item) {
            $totalAmount += $item->quantity * $item->price;
        }
        return $totalAmount;
    }
}
?>
