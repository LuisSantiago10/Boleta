<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Materia extends Model
{
  protected $table = 'cat_materia';
  protected $primaryKey='vchCodigoMateria';
  public $timestamps=false;
  protected $fillable = [
      'vchMateria',
      'statusMateria'
  ];
}
