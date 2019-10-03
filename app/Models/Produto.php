<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    protected $table = 'produto';
    protected $guarded = [];
    protected $primaryKey = 'idproduto';
    //My tables does not have this fields
    public $timestamps = false;
}
