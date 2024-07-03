<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use HasFactory;

    protected $fillable = [
        'target_id',
        'headline',
        'description',
        'image',
        'video',
        'document',
        'created_by'
    ];
}
