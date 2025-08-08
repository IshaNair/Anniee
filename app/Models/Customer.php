<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
  protected $fillable = ['name','email','phone','session_date',	'session_time','privacy_policy'];
}
