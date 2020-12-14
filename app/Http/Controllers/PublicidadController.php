<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PublicidadController extends Controller
{
    public function index(){

        return view('Panel.Publicidad.index');
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
