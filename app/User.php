<?php

namespace App;

use App\Entities\Todo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    protected $fillable = [
        'name',
        'email',
        'password',
    ];
    protected $hidden   = [
        'password',
        'remember_token',
    ];
    protected $casts    = [
        'email_verified_at' => 'datetime',
    ];

    public function todos(): HasMany
    {
        return $this->hasMany(Todo::class);
    }
}
