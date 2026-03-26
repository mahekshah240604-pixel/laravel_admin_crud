<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    protected $primaryKey = 'product_id';

    protected $fillable = [
        'product_name',
        'product_details',
        'product_price',
        'category_id',
        'product_account',
        'product_photopath',
    ];
}
