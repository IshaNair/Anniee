<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
                            'title',
                            'description',
                            'image',
                            'price',
                            'compare_price',
                            'sku',
                            'barcode',
                            'qty',
                            'category_id',
                            'sub_category_id',
                            'brand_id',
                            'is_featured',
                            'status'
                         ];

}

