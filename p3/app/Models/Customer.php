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

    public static function findByCustNum($cust_number)
    {
        return self::where('cust_number', '=', $cust_number)->first();
    }

    public function projects()
    {
        return $this->hasMany('App\Models\Project');
    }
}