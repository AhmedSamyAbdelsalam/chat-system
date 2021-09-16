<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Conversation extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $dates = ['last_message_at'];

    public function getRouteKeyName()
    {
        return 'uuid';
    }

    public function users(): BelongsToMany
    {
        return $this->belongsToMany(User::class)
            ->withPivot('read_at')
            ->withTimestamps()
            ->latest();
    }

    public function others(): BelongsToMany
    {
        return $this->users()->where('user_id', '!=', auth()->id());
    }

    public function messages(): hasMany
    {
        return $this->hasMany(Message::class)
            ->latest();
    }



}
