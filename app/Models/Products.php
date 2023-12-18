<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    use HasFactory;
    protected $table = 'products';
    protected $primary_key = 'products_id';
    protected $fillable = [
        'nama',
        'brand',
        'stock',
        'status',
        'buy_price',
        'sale_price',
        'comment'
    ];
}
