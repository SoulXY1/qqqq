<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Botella extends Model
{
    use HasFactory;
    protected $fillable = ['nombre', 'marca', 'tipo', 'capacidad', 'precio'];
    public $timestamps = false;

    public function tecnicas(){
        return $this->belongsToMany(Tecnica::class);
    }
}
