<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Califica extends Model
{
  protected $table = 'cat_rel_alumno_materia';
  protected $primaryKey='iCali';
  public $timestamps=false;
  protected $fillable = [
      'iCodigoAlumno',
      'vchCodigoMateria',
      'fCalificacion',
      '	statuscali'
  ];
}
