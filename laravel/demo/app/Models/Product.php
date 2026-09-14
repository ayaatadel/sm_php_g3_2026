<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Category;
use App\Models\Order_Item;
class Product extends Model
{
    //

    function category()
    {
        return $this->belongsTo(Category::class);
    }
    function orderItems()
    {
        return $this->hasMany(Order_Item::class);

    }
}
