<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Category;
use App\Models\Order_Item;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    use HasFactory;
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
