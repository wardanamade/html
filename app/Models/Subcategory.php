<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subcategory extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'slug',
        'category_id',
        'status',
        'created_by',
        'updated_by',
        'deleted_by',
    ];

    // category relationship
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    // isEmpty relationship
    public function isEmpty()
    {
        return $this->hasMany(Article::class)->count() == 0;
    }

    // articles relationship
    public function articles()
    {
        return $this->hasMany(Article::class);
    }
}
