<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Alumnos extends Model
{
		protected $table = 'cat_alumno';
		protected $primaryKey='iCodigoAlumno';
  	public $timestamps=false;
    protected $fillable = [
        'vchNombres',
        'vchApellidos',
        '	dtFechaNac',
				'statusAlumno'
    ];




}
