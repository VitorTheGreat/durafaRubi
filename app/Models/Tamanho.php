<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tamanho extends Model
{
    protected $table = 'tamanho';
    protected $guarded = [];
    //My tables does not have this fields
    public $timestamps = false;
}
