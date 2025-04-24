<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory;
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
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
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    // =============== RELATIONSHIPS ===============
    /**
     * Get all of the recipes for the User.
     */
    public function recipes(): HasMany
    {
        return $this->hasMany(Recipe::class);
    }

    // =============== SCOPES ===============
    public function scopeList(Builder $query)
    {
        return $query; // Fix: return the query builder instead of true
    }

    // =============== FUNCTIONS ===============

    /**
     * Undocumented function.
     *
     * @return void
     */
    public function getLink()
    {
        return route('chefs.show', ['id' => $this->id]);
    }

    /**
     * Undocumented function.
     *
     * @return void
     */
    public function getImage()
    {
        return asset('storage/'.$this->profile);
    }
}
