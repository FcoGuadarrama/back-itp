<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aspirante extends Model
{
    use HasFactory;

    protected $table = "aspirantes";

    protected $fillable = ['name', 'email', 'age', 'interestedCareer', 'originSchool', 'option', 'area_id', 'results'];

}
