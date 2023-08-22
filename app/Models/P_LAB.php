<?php

namespace App\Models;

use App\Models\User;
use App\Models\Lansia;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class P_LAB extends Model
{
    use HasFactory;
    protected $guarded= ['id'];
    protected $dates= ['tanggal_p_lab'];

    public function lansia()
    {
        return $this->belongsTo(Lansia::class, 'lansia_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

}
