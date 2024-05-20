<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tecnica extends Model
{
    use HasFactory;
    protected $fillable = ['tecnica'];
    public $timestamps = false;

    public function albums(){
        return $this->belongsToMany(Botella::class);
    }
}
