<?php

namespace App\Models;

use App\Models\Lansia;
use App\Models\P_Fisik_Tindakan;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Desa extends Model
{
    use HasFactory;
    protected $guarded= ['id'];
    public function lansia() :HasMany
    {
        return $this->hasMany(Lansia::class);
    }
    public function pemerisaan_fisik_tindakan() :HasMany
    {
        return $this->hasMany(P_Fisik_Tindakan::class);
    }

}
