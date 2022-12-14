<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PessoaTelefone extends Model
{
    use HasFactory;

    protected $fillable = ["pessoa_id", "telefone_id"];

    public function pessoas(){
        return $this->hasMany(Pessoa::class);
    }

    public function Telefones(){
        return $this->hasMany(Telefone::class);
    }
}
