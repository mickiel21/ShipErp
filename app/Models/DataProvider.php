<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DataProvider extends Model
{
    protected $fillable = [
        'name',
        'url',
    ];
}
