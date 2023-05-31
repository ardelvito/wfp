<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;


    protected $guarded = ['id'];
    
    public function Category(){
        return $this->belongsTo(Category::class);
    }


    public function transaction()
    {
        $this->belongsToMany (Transaction::class, 'product_transaction', 'product_id', 'transaction_id' )->withPivot('quantity', 'price');

    }

    public function __toString()
    {
        // return $this->nama_product;
    }
}
