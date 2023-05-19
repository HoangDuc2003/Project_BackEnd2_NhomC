<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Films extends Model
{  
    use HasFactory;
    protected $table = 'films';
    protected $primaryKey = 'id';
    protected $fillable = ['film_name','film_image', 'film_author', 'film_type', 'film_description', 'film_date'];
}
