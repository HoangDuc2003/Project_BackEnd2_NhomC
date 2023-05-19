<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Staffs extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;
    protected $table = 'staffs';
    protected $primaryKey = 'id';
    protected $fillable = [
        'staff_name',
        'staff_email',
        'staff_phone',
        'password'
    ];
    protected $hidden = [
        'password',
        'remember_token',
    ];
}
