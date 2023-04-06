<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function Product(){
        return $this->hasMany(Product::class);
    }

    public function __toString()
    {
        return $this->nama_kategori;
    }
}
