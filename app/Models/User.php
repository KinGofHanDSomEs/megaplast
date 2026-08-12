<?php

namespace App\Models;

<<<<<<< HEAD
// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Database\Factories\UserFactory;
use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Attributes\Hidden;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

#[Fillable(['name', 'email', 'password'])]
#[Hidden(['password', 'remember_token'])]
class User extends Authenticatable
{
    /** @use HasFactory<UserFactory> */
    use HasFactory, Notifiable;
=======
use Database\Factories\UserFactory;
use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Attributes\Hidden;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;

#[Fillable(['email', 'password', 'email_verified_at', 'role', 'name', 'lastname', 'patronymic', 'phone', 'last_login_at'])]
#[Hidden(['password', 'remember_token'])]

/**
 * @mixin Builder
 */
class User extends Authenticatable
{
    /** @use HasFactory<UserFactory> */
    use HasFactory, SoftDeletes;
>>>>>>> 65a6a6386df3e72542fe014458e036af01f8b9f6

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
<<<<<<< HEAD
=======
            'last_login_at' => 'datetime',
>>>>>>> 65a6a6386df3e72542fe014458e036af01f8b9f6
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }
<<<<<<< HEAD
=======

    public function orders(): HasMany {
        return $this->hasMany(Order::class);
    }
>>>>>>> 65a6a6386df3e72542fe014458e036af01f8b9f6
}
