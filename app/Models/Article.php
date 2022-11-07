<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'slug',
        'body',
        'subcategory_id',
        'status',
        'created_by',
        'updated_by',
        'deleted_by',
    ];

    // subcategory relationship
    public function subcategory()
    {
        return $this->belongsTo(Subcategory::class);
    }

    // user relationship
    public function user()
    {
        return $this->belongsTo(User::class, 'created_by');
    }
}
