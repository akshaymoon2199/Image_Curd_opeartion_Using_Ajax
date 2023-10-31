<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;
    protected $table='employees';
     protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'phone',
        'post',
        'avatar'
    ];

    static function getallrecords()
    {
        $result = self::select('employees.*')
                    ->orderBy('id', 'ASC')
                    ->get();
        return $result;
    }
}
