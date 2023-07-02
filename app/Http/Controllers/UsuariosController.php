<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUsuariosControllerRequest;
use App\Http\Requests\UpdateUsuariosControllerRequest;
use App\Models\Usuario;
use Illuminate\Support\Facades\Validator;
use App\Http\Resources\UsuariosResource;
use auth;

class UsuariosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return UsuariosResource::collection(Usuario::all());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreUsuariosControllerRequest $request)
    {
        //
        $usuario = Usuario::create([
            'name' => $request->name,
        ]);

        return new UsuariosResource($usuario);
       
    }

    /**
     * Display the specified resource.
     */
    public function show(Usuario $usuario)
    {
        //
        return new  UsuariosResource($usuario); 
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Usuarios $usuarios)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateUsuariosRequest $request, Usuarios $usuarios)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Usuarios $usuarios)
    {
        //
    }
}
