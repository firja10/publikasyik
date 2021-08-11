<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Submateri;

class Materi extends Model
{
    use HasFactory;

    public function submateri()
    {
        # code...
        return $this->hasMany(Submateri::class);
    }
}
