<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductCategory extends Model
{
    protected $guarded =[];

    public function pccategory()
    {
        return $this->belongsTo(Category::class, 'category_id', 'id');
    }
}
