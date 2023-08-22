<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;

use App\Models\P3G;
use App\Models\Blog;
use App\Models\Admin;
use App\Models\Lansia;
use App\Models\Petugas;
use App\Models\P_LAB;
use App\Models\R_gangguan;
use App\Models\P_Fisik_Tindakan;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    // protected $fillable = [
    //     'name',
    //     'email',
    //     'password',
    // ];
    protected $guarded= ['id'];

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
    ];

    public function admin()
    {
        return $this->hasOne(Admin::class,'user_id');
    }
    public function petugas()
    {
        return $this->hasOne(Petugas::class,'user_id');
    }
    public function blog()
    {
        return $this->hasMany(Blog::class);
    }
    public function lansia()
    {
        return $this->hasMany(Lansia::class);
    }

 
    public function pemerisaan_fisik_tindakan(): HasMany
    {
        return $this->hasMany(P_Fisik_Tindakan::class,'lansia_id');
    }
    public function pemerisaan_lab(): HasMany
    {
        return $this->hasMany(P_LAB::class);
    }
    public function p3g(): HasMany
    {
        return $this->hasMany(P3G::class);
    }
    public function riwayat_gangguan(): HasMany
    {
        return $this->hasMany(R_gangguan::class);
    }
}
