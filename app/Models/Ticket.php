<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    use HasFactory;

    protected $fillable = [
        'uuid',
        'code',
        'title',
        'description',
        'category_id',
        'subcategory_id',
        'classification_id',
        'status_id',
        'priority_id',
        'type_id',
        'user_id',
    ];

    // category relationship
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    // subcategory relationship
    public function subcategory()
    {
        return $this->belongsTo(Subcategory::class);
    }

    // classification relationship
    public function classification()
    {
        return $this->belongsTo(Classification::class);
    }

    // status relationship
    public function status()
    {
        return $this->belongsTo(Status::class);
    }

    // priority relationship
    public function priority()
    {
        return $this->belongsTo(Priority::class);
    }

    // user relationship
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function scopeOpen($query)
    {
        return $query->where('status', 'open');
    }

    public function scopeClosed($query)
    {
        return $query->where('status', 'closed');
    }

    public function scopeMine($query)
    {
        return $query->where('user_id', auth()->id());
    }

    public function scopeAssigned($query)
    {
        return $query->where('assigned_to', auth()->id());
    }

    public function scopeUnassigned($query)
    {
        return $query->whereNull('assigned_to');
    }

    public function assignTo($user)
    {
        $this->update([
            'assigned_to' => $user->id,
        ]);
    }

    public function close()
    {
        $this->update([
            'status' => 'closed',
        ]);
    }

    public static function open()
    {
        return static::where('status', 'open');
    }

    public function isAssigned()
    {
        return ! is_null($this->assigned_to);
    }

    public function isClosed()
    {
        return $this->status === 'closed';
    }

    public function isOpen()
    {
        return $this->status === 'open';
    }

    public function isMine()
    {
        return $this->user_id === auth()->id();
    }

    public function isAssignedToMe()
    {
        return $this->assigned_to === auth()->id();
    }

    public function isUnassigned()
    {
        return is_null($this->assigned_to);
    }

    public function isNotMine()
    {
        return ! $this->isMine();
    }

    public function isNotAssignedToMe()
    {
        return ! $this->isAssignedToMe();
    }

    public function isNotClosed()
    {
        return ! $this->isClosed();
    }

    public function isNotOpen()
    {
        return ! $this->isOpen();
    }

    public function isNotUnassigned()
    {
        return ! $this->isUnassigned();
    }

    public function isNotAssigned()
    {
        return ! $this->isAssigned();
    }

    public function isNotAssignedTo($user)
    {
        return $this->assigned_to !== $user->id;
    }

    public function isAssignedTo($user)
    {
        return $this->assigned_to === $user->id;
    }

    public function isNotOwnedBy($user)
    {
        return $this->user_id !== $user->id;
    }

    public function isOwnedBy($user)
    {
        return $this->user_id === $user->id;
    }
}
