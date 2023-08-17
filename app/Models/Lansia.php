<?php

namespace App\Models;

use App\Models\P3G;
use App\Models\Desa;
use App\Models\User;
use App\Models\P_LAB;
use App\Models\P_Fisik_Tindakan;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Lansia extends Model
{
    use HasFactory;
    protected $guarded= ['id'];

    public function user()
    {
        return $this->hasMany(User::class);
    }

    public function pemerisaan_fisik_tindakan()
    {
        return $this->hasOne(P_Fisik_Tindakan::class,'lansia_id');
    }
    public function pemerisaan_lab()
    {
        return $this->hasOne(P_LAB::class,'lansia_id');
    }
    public function p3g()
    {
        return $this->hasOne(P3G::class,'lansia_id');
    }
    public function desa()
    {
        return $this->hasMany(Desa::class);
    }



}
