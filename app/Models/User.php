<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{

    public function isAdmin(): bool // Добавлено указание типа возвращаемого значения и улучшена читаемость.
    {
        return (bool)$this->is_admin; // Явное приведение к булеву типу для безопасности
    }


    public function cart()
    {
        return $this->hasOne(Cart::class);
    }
    public function orders()
    {
        return $this->hasMany(Order::class);
    }

    /** @use HasFactory */
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
        'avatar', // Добавлено поле avatar
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
        'password' => 'hashed',
    ];
}
