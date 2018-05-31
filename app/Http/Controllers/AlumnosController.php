<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Alumnos;
use DB;

class AlumnosController extends Controller
{

    public function index(Request $request){
    //	$alumno = Alumnos::all();
    //	return view('alumnos.index')->with(compact('alumno'));

      if ($request)
        {
            $query=trim($request->get('searchText'));
            $alumno=DB::table('cat_alumno')->where('vchNombres','LIKE','%'.$query.'%')
            ->paginate(5);
            return view('alumnos.index',["alumno"=>$alumno,"searchText"=>$query]);
        }
    }
    /**
    * Show the form for creating a new resource.
    *
    * @return \Illuminate\Http\Response
    */
   public function create()
   {
       return view('alumnos.create');
   }

   /**
    * Store a newly created resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @return \Illuminate\Http\Response
    */
   public function store(Request $request)
   {
      $alumno=new Alumnos;
      $alumno->vchNombres=$request->get('vchNombres');
      $alumno->vchApellidos=$request->get('vchApellidos');
      $alumno->dtFechaNac=$request->get('dtFechaNac');
      $alumno->statusAlumno= 1;
      $alumno->save();
      return Redirect::to('alumno');
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
       return view('alumnos.edit',["iCodigoAlumno"=>Alumnos::findOrFail($id)]);
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
       $alumno=Alumnos::findOrFail($id);
       $alumno->vchNombres=$request->get('vchNombres');
       $alumno->vchApellidos=$request->get('vchApellidos');
       $alumno->dtFechaNac=$request->get('dtFechaNac');
       $alumno->statusAlumno=$request->get('statusAlumno');;
       $alumno->save();
       return Redirect::to('alumno');
   }

   /**
    * Remove the specified resource from storage.
    *
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
   public function destroy($id)
   {
     $alumno=Alumnos::findOrFail($id);
     $alumno->delete();
     return Redirect::to('alumno');
   }
}
