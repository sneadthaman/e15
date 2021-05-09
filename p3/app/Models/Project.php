<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    // protected $table = 'projects';
    use HasFactory;

    public static function findByCustNum($custNum)
    {
        return self::where('cust_number', '=', $custNum)->all();
    }

    public function customer()
    {
        return $this->belongsTo('App\Models\Customer');
    }
}