<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Haken extends Model
{
    use HasFactory;
    use SoftDeletes;
    
    protected $guarded = [
        'id'
    ];
    
    public function user()
    {
        return $this->belongsTo('User::class');
    }
    
    Protected $dates = [
        'firstday',
        'startday',
        'endday'
        ];
}
