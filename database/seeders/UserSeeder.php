<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Chef extends Authenticatable
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'password',
        'bio',
        'profile_image',
        'instagram',
        'twitter',
        'facebook',
        'speciality',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    public function recipes()
    {
        return $this->hasMany(Recipe::class);
    }

    public function getProfileImageUrlAttribute()
    {
        if ($this->profile_image) {
            return asset('storage/profile_images/' . $this->profile_image);
        }
        return asset('images/default-profile.jpg');
    }
}