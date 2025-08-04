<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = ['name','slug','status'];

    public function subcategory()
    {
        return $this->hasOne(Subcategory::class, 'category_id');
    }
}
