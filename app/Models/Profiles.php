<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profiles extends Model
{
    use HasFactory;

    protected $fillables = [
        'name',
        'email',
        'birthday',
        'home_address',
        'contact_number'
    ];
}
