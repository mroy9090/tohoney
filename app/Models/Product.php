<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use SoftDeletes;
    use HasFactory;
    protected $fillable = ['product_name', 'category_id', 'product_price', 'product_quantity', 'product_short_description', 'product_long_description', 'alert_product_quantity' ];
}
