<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Relations\HasMany;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $fillable = [
        'nama',
        'alamat',
        'no_hp',
        'email',
        'password',
        'role',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    public function periksasPasien(): HasMany
    {
        return $this->hasMany(Periksa::class, 'id_pasien');
    }

    public function periksasDokter(): HasMany
    {
        return $this->hasMany(Periksa::class, 'id_dokter');
    }
}
