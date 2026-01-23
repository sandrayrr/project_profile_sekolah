<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Carbon\Carbon;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'role',
        'last_activity',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'last_activity'     => 'datetime',
        'password'          => 'hashed',
    ];

    /* ===============================
     |  STATUS ONLINE / OFFLINE
     | =============================== */
public function isOnline(): bool
{
    return $this->last_activity &&
           $this->last_activity->diffInSeconds(now()) <= 5;
}

public function lastSeen(): string
{
    if (!$this->last_activity) {
        return 'Belum pernah online';
    }

    return $this->last_activity->diffForHumans();

}

}
