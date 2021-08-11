<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Materi;

class Submateri extends Model
{
    use HasFactory;
    public function materi()
    {
        # code...
        return $this->belongsTo(Materi::class);
    }
}
