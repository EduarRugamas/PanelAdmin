<?php

namespace App\Http\Controllers;

use App\Ads;
use App\Noticias_Publicidad;
use Illuminate\Http\Request;

class PublicidadController extends Controller
{
    public function index(){

        $publicidad['publicidad'] = Ads::paginate(5);
        return view('Home.home', $publicidad);
    }

    public function create(){

        return view('Panel.Publicidad.create');
    }

    public function store(){

    }

    public function show(){

    }
    public function edit(){

    }
    public function update(){

    }
    public function destroy(){

    }

}
