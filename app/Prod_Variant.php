<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Prod_Variant extends Model
{
    protected $table = 'prod__variants';

    protected $fillable = [
        'name',
        'sap_product_code',
        'web_product_code',
    ];
}
