<?php

namespace App\Models;

use App\Models\Lansia;
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

}
