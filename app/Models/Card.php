<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Card extends Model
{
    use HasFactory;

    protected $fillable = [
        "project_id",
        "category_id",
        "name",
        "description",
        "team",
        "foreacast",
        "list",
        "ordem",
    ];
}
