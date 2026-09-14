<?php

namespace App\Models;
use App\Models\Category;
use App\Models\User;
use App\Models\Order_Item;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    //
    function category()
{
    return $this->belongsTo(Category::class);
}
    function user()
{
    return $this->belongsTo(User::class);
}

 function orderItems()
    {
        return $this->hasMany(Order_Item::class);

    }
}
