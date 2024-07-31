<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Account extends Authenticatable
{
    use HasFactory;

    public $timestamps = false;

    public $table = 'account';

    public $fillable = [
        'username',
        'name',
        'password',
        'role'
    ];
}
