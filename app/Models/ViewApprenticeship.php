<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ViewApprenticeship extends Model
{
    use HasFactory;

    protected $table = 'apprenticeships'; // Explicitly setting the table name
    protected $fillable = ['apprenticeship_name', 'years'];

    public function groups()
    {
        return $this->hasMany(Group::class, 'apprenticeship_id');
    }
}
