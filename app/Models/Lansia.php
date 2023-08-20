<?php

namespace App\Models;

use App\Models\P3G;
use App\Models\Desa;
use App\Models\User;
use App\Models\P_LAB;
use App\Models\R_gangguan;
use App\Models\P_Fisik_Tindakan;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Lansia extends Model
{
    use HasFactory;
    protected $guarded= ['id'];

    public function user() : HasMany
    {
        return $this->hasMany(User::class);
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
    public function desa(): HasMany
    {
        return $this->hasMany(Desa::class);
    }
    public function riwayat_gangguan(): HasMany
    {
        return $this->hasMany(R_gangguan::class);
    }



}
