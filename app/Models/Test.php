<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\AsArrayObject;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Test extends Model
{
    use HasFactory;
    protected $casts = [
        'meta_data'=> 'json',
        // 'meta_data'=> AsArrayObject::class,
    ];

    protected $guarded = [];
}
