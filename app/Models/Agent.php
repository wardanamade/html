<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Agent extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'phone',
        'avatar',
        'nickname',
        'team_id',
        'level_id',
        'status',
        'created_by',
        'updated_by',
        'deleted_by',
    ];

    // team relationship
    public function team()
    {
        return $this->belongsTo(Team::class);
    }

    // level relationship
    public function level()
    {
        return $this->belongsTo(Level::class);
    }

    // created_by relationship
    public function created_by()
    {
        return $this->belongsTo(User::class);
    }

    // updated_by relationship
    public function updated_by()
    {
        return $this->belongsTo(User::class);
    }

    // deleted_by relationship
    public function deleted_by()
    {
        return $this->belongsTo(User::class);
    }
}
