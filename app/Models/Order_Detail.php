<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order_Detail extends Model
{
    use HasFactory;
    protected $fillable=[
        'order_id','product_id','price_buy','quanity','shop_id','receiver_id'
    ];
    protected $table='oder_detail';
}
