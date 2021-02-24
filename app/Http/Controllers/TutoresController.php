<?php

namespace App\Http\Controllers;

use App\Models\Tutor;
use Illuminate\Http\Request;

class TutoresController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contacts = Tutor::all();

        return view('tutores.index', compact('tutores'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tutores.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'empresa'=>'required',
            'nombre'=>'required',
            'apellido1'=>'required',
            'apellido2'=>'required',
            'tipo_documento'=>'required',
            'doc_identidad'=>'required',
            'estado'=>'required',
            'telefono'=>'required',
            'email'=>'required'
        ]);

        $tutor = new Tutor([
            'empresa' => $request->get('empresa'),
            'nombre' => $request->get('nombre'),
            'apellido1' => $request->get('apellido1'),
            'apellido2' => $request->get('apellido2'),
            'tipo_documento' => $request->get('tipo_documento'),
            'doc_identidad' => $request->get('doc_identidad'),
            'pais' => $request->get('pais'),
            'provincia' => $request->get('provincia'),
            'municipio' => $request->get('municipio'),
            'estado' => $request->get('estado'),
            'telefono' => $request->get('telefono'),
            'email' => $request->get('email')
        ]);
        $tutor->save();
        return redirect('formulario')->with('success', 'Contact saved!');
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
