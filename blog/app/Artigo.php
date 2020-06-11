<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Artigo extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nome', 'descricao'
    ];

    protected $table = 'artigos';
}
