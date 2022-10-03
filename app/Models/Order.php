<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $fillable=[
        'order_shop','customer_id','total_price','ship_change',
        'tax','order_date','shipment_date','cancel_date','order_status','note_customer','error_code_api'
    ];
    protected $table='oder';
    public function Customer()
    {
        return $this->belongsTo(Customer::class,'customer_id','customer_id');
    }
    public function Shop()
    {
        return $this->belongsTo(Shop::class,'order_shop','shop_id');
    }
}
