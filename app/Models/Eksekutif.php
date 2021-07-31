<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Eksekutif extends Model
{
    use HasFactory;

    public function pesertaeksekutif()
    {
        # code...
        return $this->belongsTo(User::class);
    }



}
