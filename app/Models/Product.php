<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = ['category_id', 'supplier_id', 'product_name', 'product_code', 'root', 'buying_price', 'selling_price', 'buying_date', 'image', 'product_quantity'];
}
