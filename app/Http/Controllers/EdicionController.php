<?php

namespace App\Http\Controllers;

use App\Models\sesion;
use App\Models\edicion;
use App\Models\programa;
use Illuminate\Http\Request;

class EdicionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function show($edicion)
    {
        $_edicion = edicion::find($edicion);
        $programa = programa::where('edicion', $edicion)->first();

        if (!$programa) {
            return redirect()->route('home.index');
        }
        if (!$_edicion) {
            return redirect()->route('home.index');
        }
        $_id_programa = 0;
        $_id_programa = $programa -> id_programa;
        $sesion = sesion::where('id_programa', $_id_programa)->get();


        $data =  array();
        $data['edicion'] =  $_edicion;
        $data['programa'] =  $programa;
        $data['sesion']  =  $sesion;
        return view('edicion.show', compact('data'));

        //return view('edicion.show', ['programa' => $programa,], ['edicion' => $edicion,]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\edicion  $edicion
     * @return \Illuminate\Http\Response
     */
    public function edit(edicion $edicion)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\edicion  $edicion
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, edicion $edicion)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\edicion  $edicion
     * @return \Illuminate\Http\Response
     */
    public function destroy(edicion $edicion)
    {
        //
    }
}
