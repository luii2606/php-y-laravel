<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class category extends Model
{
   protected $fillable = [
        'name',
        'created_at',
        'update_at',
    ];
}
