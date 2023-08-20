<?php

namespace App\Models;

use App\Models\Lansia;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class P_Fisik_Tindakan extends Model
{
    use HasFactory;
    protected $guarded= ['id'];
    protected $dates= ['tanggal_p'];
    public function lansia()
    {
        return $this->belongsTo(Lansia::class, 'lansia_id');
    }

}
