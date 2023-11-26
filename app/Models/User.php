<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Filament\Models\Contracts\FilamentUser;
use Filament\Models\Contracts\HasAvatar;
use Filament\Models\Contracts\HasName;
use Filament\Panel;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
    implements FilamentUser,
    HasAvatar,
    HasName
{
    use HasApiTokens,
        HasFactory,
        Notifiable,
        HasRoles;

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    protected $appends = [
        'full_name',
    ];

    public function getFullNameAttribute()
    {
        return $this->name . ' ' . $this->family;
    }

    public function canAccessPanel(Panel $panel): bool
    {
//        todo
        return true;
    }

    public function getFilamentAvatarUrl(): ?string
    {

        if ($cafe = auth()->user()->cafeRestaurant) {
            if ($logoPath = $cafe->logo_path) {
                return '/storage/' . $logoPath;
            }
        }
//        todo show menuma logo
        return null;
    }

    public function getFilamentName(): string
    {
        return $this->full_name;
    }

    public function cafeRestaurant(): BelongsTo
    {
        return $this->belongsTo(CafeRestaurant::class);
    }
}
