<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Verseny extends Model
{
    use HasFactory;
    public $table = "versenyek";

    public function eredmenyek()
    {
        return $this->hasMany(Eredmeny::class, 'versenyId');
    }
}
