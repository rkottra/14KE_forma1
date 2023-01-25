<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Eredmeny extends Model
{
    use HasFactory;
    public $table = "eredmenyek";
    
    function pilota() {
        return $this->belongsTo(Pilota::class, 'pilotaId');
    }
    function verseny() {
        return $this->belongsTo(Verseny::class, 'versenyId');
    }
}
