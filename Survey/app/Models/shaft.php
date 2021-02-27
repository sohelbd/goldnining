<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class shaft extends Model
{
    use HasFactory;

    protected $table = 'shafts';
    public $timestamps = true;

   
    protected $fillable = [
        'shaft_no',
       'shaft_name',
        'created_at'
    ];
}
