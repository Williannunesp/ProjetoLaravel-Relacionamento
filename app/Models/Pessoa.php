<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pessoa extends Model
{
    use HasFactory;

    protected $fillable = ["nome", "sexo_id"];

    public function Sexo(){
        return $this->hasOne(Sexo::class);
    }
}
