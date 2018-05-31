<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Materia;
use DB;

class MateriaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
        if ($request)
          {
              $query=trim($request->get('searchText'));
              $materia=DB::table('cat_materia')->where('vchMateria','LIKE','%'.$query.'%')
              ->paginate(5);
              return view('materias.index',["materia"=>$materia,"searchText"=>$query]);
          }

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('materias.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $materia=new Materia;
      $materia->vchMateria=$request->get('vchMateria');
      $materia->statusMateria= 1;
      $materia->save();
      return Redirect::to('materia');
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
        return view('materias.edit',["vchCodigoMateria"=>Materia::findOrFail($id)]);
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
      $materia=Materia::findOrFail($id);
      $materia->vchMateria=$request->get('vchMateria');
      $materia->statusMateria=$request->get('statusMateria');;
      $materia->save();
      return Redirect::to('materia');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $materia=Materia::findOrFail($id);
      $materia->delete();
      return Redirect::to('materia');
    }
}
