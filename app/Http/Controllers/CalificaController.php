<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Alumnos;
use App\Califica;
use App\Materia;
use DB;

class CalificaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
      if ($request)
        {
            $query=trim($request->get('searchText'));
            $califica=DB::table('cat_rel_alumno_materia')
             ->join('cat_alumno', 'cat_rel_alumno_materia.iCodigoAlumno', '=', 'cat_alumno.iCodigoAlumno')
             ->join('cat_materia', 'cat_rel_alumno_materia.vchCodigoMateria', '=', 'cat_materia.vchCodigoMateria')
            ->where('cat_alumno.iCodigoAlumno','=',$query)
            ->paginate(5);
            return view('calificacion.index',["califica"=>$califica,"searchText"=>$query]);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $alumno = Alumnos::all();
        $materia = Materia::all();
        return view('calificacion.create',["alumno"=>$alumno,"materia"=>$materia]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $cali=new Califica;
      $cali->iCodigoAlumno=$request->get('iCodigoAlumno');
      $cali->vchCodigoMateria	=$request->get('vchCodigoMateria');
      $cali->fCalificacion=0;
      $cali->statuscali= 1;
      $cali->save();
      return Redirect::to('califica');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      if ($id)
        {
            $iCali=DB::table('cat_rel_alumno_materia')
             ->join('cat_alumno', 'cat_rel_alumno_materia.iCodigoAlumno', '=', 'cat_alumno.iCodigoAlumno')
             ->join('cat_materia', 'cat_rel_alumno_materia.vchCodigoMateria', '=', 'cat_materia.vchCodigoMateria')
            ->where('cat_rel_alumno_materia.iCali','=',$id)->first();
            return view('calificacion.edit')->with(compact('iCali'));
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
      $cali=Califica::findOrFail($id);
      $cali->fCalificacion=$request->get('fCalificacion');
      $cali->save();
      return Redirect::to('califica');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $cali=Califica::findOrFail($id);
      $cali->delete();
      return Redirect::to('califica');
    }
}
