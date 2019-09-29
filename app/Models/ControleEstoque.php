<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ControleEstoque extends Model
{
    protected $table = 'controle_estoque';
    protected $guarded = [];
    //My tables does not have this fields
    public $timestamps = false;
}
