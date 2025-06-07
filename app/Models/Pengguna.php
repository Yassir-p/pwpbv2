<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Pengguna extends Authenticatable
{
    use Notifiable;
    protected $table = "pengguna";
    protected $fillable = [
        'full_name',
        'username',
        'email',
        'password',
        'profile',
    ];
    protected $hidden = [
        'password',
        'remember_token',
    ];
}
