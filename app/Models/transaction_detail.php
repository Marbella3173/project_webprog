<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class transaction_detail extends Model
{
    use HasFactory;

    protected $fillable = [
        'transaction_header_id',
        'food_name',
        'food_price',
        'quantity'
    ];

    public function transactionHeader(){
        return $this->belongsTo(transaction_header::class);
    }
}
