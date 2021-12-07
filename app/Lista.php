<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lista extends Model
{
    protected $table ='lista';

    protected $fillable = [
        'name', 
        'idade', 
        'cpf', 
        'email',
        'cargo',
        'setor',
        'salario' ];
}
