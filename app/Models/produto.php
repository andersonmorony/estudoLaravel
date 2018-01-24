<?php

namespace estoque\Models;

use Illuminate\Database\Eloquent\Model;

class produto extends Model
{
  protected $fillable = [
      'nome', 'preco', 'descricao', 'quantidade'
  ];
}
