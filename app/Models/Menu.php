<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    protected $fillable = ['title','slug','page_link','status'];
    protected $table = 'menus';
}
