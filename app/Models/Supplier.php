<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    use HasFactory;
    protected $fillable = [
        'reg_number',
        'nic',
        'first_name',
        'last_name',
        'email',
        'phone'
    ];
}
