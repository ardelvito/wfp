<?php

namespace App\Models;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Transaction extends Model
{
    use HasFactory;

    public function products(){
        return $this->belongsToMany (Product::class, 'product_transaction', 'product_id', 'transaction_id' )->withPivot('quantity', 'price');

    }

    public function user(){
        return $this->belongsTo(User::class, 'user_id');
    }

    public function buyer(){
        return $this->belongsTo(Buyer::class, 'buyer_id');
    }

    
}
