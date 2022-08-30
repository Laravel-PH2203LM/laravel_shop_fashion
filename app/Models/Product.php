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
    protected $hidden = ['created_at','updated_at'];

    public function brand() {
        return $this->belongsTo(Brand::class,'brand_id','id');
    }
    public function Detail() {
        return $this->belongsTo(ProductDetail::class,'brand_id','id');
    }
    public function ProductCategory() {
        return $this->belongsTo(ProductCategory::class,'product_category_id','id');
    }
    public function ProductImage() {
        return $this->hasMany(ProductImage::class,'product_id','id');
    }
    public function Image() {
        return $this->hasOne(ProductImage::class,'product_id','id');
    }
    public function ProductDetail() {
        return $this->hasMany(ProductDetail::class,'product_id','id');
    }
    public function ProductComment() {
        return $this->hasMany(ProductComment::class,'product_id','id');
    }
    public function OrderDetail() {
        return $this->hasMany(OrderDetail::class,'product_id','id');
    }
    public function Attribute() {
        return $this->hasMany(ProductAttribute::class,'product_id','id');
    }
    public function scopeSearch($query) {
        if(request('sort_by')) {
            $sort_by = request('sort_by');
            $arr = explode('-', $sort_by);
            $query = $query->orderBy($arr[0],$arr[1]);
        }
        if(request('show')) {
            $show = request('show');
            $query = $query->limit($show);
        }
        if(request('search')) {
            $search = request('search');
            $query = $query->where('name','like','%'.$search.'%')->get();
        }
    }
}
