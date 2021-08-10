<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Pemesanan extends Model
{
    use HasFactory;

    public function pemesan()
    {
        # code...
        return $this->belongsTo(User::class);

    }


}
