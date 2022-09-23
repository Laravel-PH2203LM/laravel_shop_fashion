<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderDetail extends Model
{
    use HasFactory;
    protected $table = 'order_details';
    protected $primaryKey = 'id';
    protected $guarded = [];
    protected $fillable = ['order_id','product_id','name','qty','color_id','size_id','amount','price_shipping','total','images','status'];

    public function product() {
        return $this->belongsTo(Product::class,'product_id','id');
    }
}
