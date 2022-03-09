<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContatoModel extends Model
{
    protected $table = 'tb_contatos';
    protected $primaryKey = 'ID';
    protected $fillable = ['ID', 'Nome', 'Email', 'Telefone', 'cep', 'estado', 'cidade', 'bairro', 'complemento', 'rua', 'numero'];
    use HasFactory;}

