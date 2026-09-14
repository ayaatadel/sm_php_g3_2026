<?php

namespace App\Models;
use App\Models\Order;
use App\Models\Product;
use Illuminate\Database\Eloquent\Model;

class Order_Item extends Model
{
    //

    function order()  {
        return $this->belongsTo(Order::class);

    }
    function product()  {
        return $this->belongsTo(Product::class);

    }
}
