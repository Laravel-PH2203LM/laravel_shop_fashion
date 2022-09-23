<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $table = 'orders';
    protected $primaryKey = 'id';
    protected $guarded = [];
    protected $fillable = ['user_id','full_name','address','email','phone'];

    public function orders()
    {
        return $this->hasMany(OrderDetail::class,'order_id','id');
    }

    public function Sizez()
    {
        return $this->belongsToMany(Attribute::class,'order_details','product_id','size_id')->distinct('size_id');
    }
}
