<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Success extends Model
{
    use HasFactory;
    public $timestamps = false;

    protected $fillable = [

        'id',
        'offer_id',
        'ask_id',
        'title',
        'description',
        'date'
    ];
}
