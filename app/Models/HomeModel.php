<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HomeModel extends Model
{
    protected $table = 'tb_contatos';
    protected $primaryKey = 'ID';
    use HasFactory;
}
