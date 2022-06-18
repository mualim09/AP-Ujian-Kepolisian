<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Soal;

class Ukom extends Model
{
    use HasFactory;
    protected $table = "ukom";
    protected $guarded = [];
    protected $primaryKey = "id";

    public function soal()
    {
        return $this->hasMany(Soal::class);
    }
}
