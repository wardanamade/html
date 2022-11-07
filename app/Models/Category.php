<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'slug',
        'status',
        'created_by',
        'updated_by',
        'deleted_by',
    ];

    // subcategory relationship
    public function subcategory()
    {
        return $this->hasMany(Subcategory::class);
    }

    // subcategories relationship
    public function subcategories()
    {
        return $this->hasMany(Subcategory::class);
    }
}
