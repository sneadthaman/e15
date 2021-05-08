<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model {
    protected $table = 'customers';
    public $timestamps = false;

    public static function findBySlug($slug)
    {
        return self::where('slug', '=', $slug)->first();
    }
}