<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    use HasFactory;

    protected $table = 'products';
    public $timestamps = false;

    public $fillable = [
        'name',
        'Category',
        'Detail',
        'Price',
        'Photo'
    ];
}
