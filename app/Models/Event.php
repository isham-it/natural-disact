<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class event extends Model
{
    use HasFactory;

    public $timestamps = true;

    protected $fillable = [

        'title',
        'description',
        'poster',
        'date' => 'datetime:dd/mm/YYYY',
    ];

}
