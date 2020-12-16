<?php

namespace App\Http\Controllers;

use App\Ads;
use App\Noticias_Publicidad;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AdsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function index()
    {
        $publicidad = Ads::paginate(5);
        


        return view('Home.home', compact('publicidad'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Panel.Publicidad.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $datosPublicidad = request()->except('_token');

        if($request->hasFile('Foto')){
            $datosPublicidad['Foto']=$request->file('Foto')->store('uploads', 'public');
        }

        Ads::insert($datosPublicidad);

        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Ads  $ads
     * @return \Illuminate\Http\Response
     */
    public function show(Ads $ads)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Ads  $ads
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $publicidad = Ads::findOrFail($id);

        return view('Panel.publicidad.edit', compact('publicidad'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Ads  $ads
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $datospublicidad=request()->except(['_token', '_method']);

        if($request->hasFile('Foto')){

            $publicidad = Ads::findOrFail($id);

            Storage::delete('public/'.$publicidad->Foto);
            
            $datospublicidad['Foto']=$request->file('Foto')->store('uploads', 'public');
        }

        Ads::where('id', '=',$id)->update($datospublicidad);

        return redirect('publicidad');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Ads  $ads
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $publicidad = Ads::findOrFail($id);

        if (Storage::delete('public/'.$publicidad->Foto)){
        Ads::destroy($id);
        }

        return redirect('publicidad');
    }
}
