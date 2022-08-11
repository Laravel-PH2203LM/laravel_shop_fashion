<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $table = 'products';
    protected $primaryKey = 'id';
    protected $guarded = [];

    public function brand() {
        return $this->belongsTo(Brand::class,'brand_id','id');
    }
    public function ProductCategory() {
        return $this->belongsTo(ProductCategory::class,'product_category_id','id');
    }
    public function ProductImage() {
        return $this->hasMany(ProductImage::class,'product_id','id');
    }
    public function ProductDetail() {
        return $this->hasMany(ProductDetail::class,'product_id','id');
    }
    public function ProductComment() {
        return $this->hasMany(ProductComment::class,'product_id','id');
    }
    public function orderDetail() {
        return $this->hasMany(OrderDetail::class,'product_id','id');
    }
}
