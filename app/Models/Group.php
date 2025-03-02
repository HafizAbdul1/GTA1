<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    use HasFactory;

    protected $fillable = [
        'apprenticeship_id',
        'group_name',
        'milestone',
        'year',
        'individual_weighting',
        'progressive_weighting',
    ];

    public function apprenticeship()
    {
        return $this->belongsTo(ViewApprenticeship::class, 'apprenticeship_id');
    }
}

