<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class flights extends Model
{
    use HasFactory;
    
    protected $fillable = ['flight_name', 'takeoff_location', 'landing_location', 'operates_on_days'];
}
