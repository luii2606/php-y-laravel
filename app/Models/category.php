<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class category extends Model
{
    use HasFactory;
   protected $fillable = [
        'name',
        'created_at',
        'update_at',
    ];
}
