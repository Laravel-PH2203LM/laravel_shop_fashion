<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductAttribute extends Model
{
    use HasFactory;
    protected $table = 'product_attribute';
    protected $primaryKey = 'id';
    protected $guarded = [];

    public function productAttr() {
        return $this->hasMany(ProductAttribute::class,'product_id','id');
    }
}
