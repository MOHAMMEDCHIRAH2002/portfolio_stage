<?php

namespace App\Models;

use App\Models\Category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Project extends Model
{
    public function category()
{
    return $this->belongsTo(Category::class);
}
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'url',
        'image',
    ];
}

