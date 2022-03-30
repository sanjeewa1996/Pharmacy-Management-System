<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        'register_no',
        'item_code',
        'product_name',
        'company_name',
        'company_address',
        'no_of_items'
    ];
}
