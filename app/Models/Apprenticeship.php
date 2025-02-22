<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Apprenticeship extends Model
{
    use HasFactory;

    protected $fillable = ['apprenticeship_name', 'years'];
}
