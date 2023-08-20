<?php

namespace App\Models;

use App\Models\Lansia;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class R_gangguan extends Model
{
    use HasFactory;
    protected $guarded= [];
    public function lansia()
    {
        return $this->belongsTo(Lansia::class, 'lansia_id');
    }

}
