<?php

namespace App\Http\Controllers;

use App\Noticias_Publicidad;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class NoticiasPublicidadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function index()
    {
        $noticias['noticias'] = Noticias_Publicidad::paginate(5);

        return view('Home.home', $noticias);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function create()
    {

        return view('Panel.Noticias.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Http\Response|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        //
        $datosNoticias = request()->except('_token');

        if($request->hasFile('Foto')){
            $datosNoticias['Foto']=$request->file('Foto')->store('uploads', 'public');
        }

        Noticias_Publicidad::insert($datosNoticias);

        return redirect('/');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Noticias_Publicidad  $noticias_Publicidad
     * @return \Illuminate\Http\Response
     */
    public function show(Noticias_Publicidad $noticias_Publicidad)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Noticias_Publicidad  $noticias_Publicidad
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $noticias = Noticias_Publicidad::findOrFail($id);

        return view('Panel.Noticias.edit', compact('noticias'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Noticias_Publicidad  $noticias_Publicidad
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $datosNoticias=request()->except(['_token', '_method']);

        if($request->hasFile('Foto')){

            $noticias = Noticias_Publicidad::findOrFail($id);

            Storage::delete('public/'.$noticias->Foto);
            
            $datosNoticias['Foto']=$request->file('Foto')->store('uploads', 'public');
        }

        Noticias_Publicidad::where('id', '=',$id)->update($datosNoticias);

        return redirect('noticias');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Noticias_Publicidad  $noticias_Publicidad
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $noticias = Noticias_Publicidad::findOrFail($id);

        if (Storage::delete('public/'.$noticias->Foto)){
        Noticias_Publicidad::destroy($id);
        }

        return redirect('noticias')->with('Mensaje', 'Empleado Eliminado');

    }
}
