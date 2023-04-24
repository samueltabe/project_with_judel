<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';

    protected $fillable = [
      'name',
      'slug',
      'variant_id',
    ];


    public function pcategory()
    {
        return $this->hasMany(ProductCategory::class);
    }

    public function variant()
    {
        return $this->belongsTo(Prod_Variant::class, 'variant_id', 'id');
    }
}
