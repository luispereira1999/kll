<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

/**
 * Esta classe representa o modelo para a tabela de utilizadores na base de dados.
 */
class User extends Authenticatable
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        'id',
        'name',
        'password',
        'email',
        'first_name',
        'last_name',
        'city',
        'country'
    ];
}
