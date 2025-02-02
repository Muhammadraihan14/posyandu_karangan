<?php

namespace App\Models;

use App\Models\User;
use App\Models\Lansia;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class P3G extends Model
{
    use HasFactory;
    protected $table = "pemeriksaan_p3gs";
    protected $guarded= ['id'];
    protected $dates= ['tanggal_p_p3g'];

    public function lansia()
    {
        return $this->belongsTo(Lansia::class,'lansia_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

}
