<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RegisteredUser extends Model
{
    use HasFactory;

    protected $fillable = [
        'username',
        'email',
        'phoneNumber',
        'role',
        'password',
        // Add other fields that should be mass assignable
    ];
}
