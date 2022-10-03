<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shop extends Model
{
    use HasFactory;
    protected $fillable=[
        "shop_name"
    ];
    protected $table="Shop";
    public function Order(){
        return $this->hasMany(Order::class,'order_shop','shop_id');
    }
}
