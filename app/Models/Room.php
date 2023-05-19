<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Room extends Model
{  
    use HasFactory;
    protected $table = 'room';
    protected $primaryKey = 'id';
    protected $fillable = ['room_name','room_quantity'];

}
