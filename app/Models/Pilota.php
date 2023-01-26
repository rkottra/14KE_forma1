<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Eredmeny;

class Pilota extends Model
{
    use HasFactory;
    public $table = "pilotak";

    protected $fillable = ['nev', 'rovidnev'];

    public function eredmenyek()
    {
        return $this->hasMany(Eredmeny::class, 'pilotaId');
    }
}