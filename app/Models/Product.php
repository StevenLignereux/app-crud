<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    // autorise laravel à remplir le champs
    protected $fillable = [
        'name', 'detail'
    ];
}
