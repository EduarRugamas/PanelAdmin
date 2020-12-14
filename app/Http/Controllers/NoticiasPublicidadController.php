<?php

namespace App\Http\Controllers;

use App\Noticias_Publicidad;
use Illuminate\Http\Request;

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
    public function edit(Noticias_Publicidad $noticias_Publicidad)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Noticias_Publicidad  $noticias_Publicidad
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Noticias_Publicidad $noticias_Publicidad)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Noticias_Publicidad  $noticias_Publicidad
     * @return \Illuminate\Http\Response
     */
    public function destroy(Noticias_Publicidad $noticias_Publicidad)
    {
        //
    }
}
