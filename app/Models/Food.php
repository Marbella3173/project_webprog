<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Food extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'brief_desc',
        'full_desc',
        'category',
        'price',
        'image'
    ];

    public function cart(){
        return $this->hasMany(Cart::class);
    }
}
