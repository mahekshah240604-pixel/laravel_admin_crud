<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class signup extends Model
{
    protected $primaryKey = 'signup_id';

    protected $fillable = [
        'name',
        'mobileno',
        'email',
        'password',
        'gender',
    ];
}
