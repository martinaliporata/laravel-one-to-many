<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class Project extends Model
{
    use HasFactory;

    // ecco le fillable
    protected $fillable=[
        'title',
        'author',
        'date',
        'preview'
    ];
}
