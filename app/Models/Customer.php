<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;
    protected $fillable=[
        "customer_name","email","tel_num","address","is_active"
    ];
    protected $table="customer";
    public function Order()
    {
        return $this->hasMany(Order::class,'customer_id','customer_id');
    }
}
