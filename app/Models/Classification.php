<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Classification extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'created_by',
        'updated_by',
        'deleted_by',
    ];

    // ticket relationship
    public function ticket()
    {
        return $this->hasMany(Ticket::class);
    }
}
