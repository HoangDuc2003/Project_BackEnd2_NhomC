<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cinemas extends Model
{  
    protected $table = 'cinemas';
    protected $primaryKey = 'id';
    protected $fillable = ['cinema_name',"cinema_image","cinema_address"];
    use HasFactory;
}
