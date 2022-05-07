<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class School extends Model
{
    use HasFactory;
    protected $fillable = ['name'];
    // protected $table = 'schools';
    // protected $hidden = [];
    // protected $casts = [
    //     'name' => 'string'
    // ];
}
