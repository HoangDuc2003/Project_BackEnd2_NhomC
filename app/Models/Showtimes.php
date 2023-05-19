<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Showtimes extends Model
{  
    protected $table = 'showtimes';
    protected $primaryKey = 'id';
    protected $fillable = ['showtime_room','showtime_film','showtime_time'];
    use HasFactory;
}
