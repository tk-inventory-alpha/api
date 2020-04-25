<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use UsesUuid;

    protected $fillable = ['name', 'stocked', 'user_id'];

    protected $casts = [
        'stocked' => 'boolean'
    ];
}
