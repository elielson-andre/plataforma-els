<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Classe extends Model
{
    protected $fillable = [
        'title',
        'slug',
        'link',
        'type',
        'description'
    ];

    use HasFactory;
}
