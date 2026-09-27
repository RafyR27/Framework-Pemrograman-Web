<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['category_id', 'code', 'name', 'unit', 'price', 'stock'];
 
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
 
    public function transactionDetails()
    {
        return $this->hasMany(TransactionDetail::class);
    }

    protected function priceRupiah(): Attribute
    {
        return Attribute::make(
            get: fn ($value, $attributes) =>
                'Rp ' . number_format($attributes['price'], 0, ',', '.')
        );
    }
}
