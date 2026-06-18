<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Role;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class Usuariocontroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $roles = Role::all();
        return view('admin.Usuarios.Formulario', compact('roles'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'     => ['required', 'string', 'max:255'],
            'email'    => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'role_id'  => ['required', 'integer', 'exists:roles,id'],
            'password' => ['required', 'string', 'min:8'],
        ]);

        $usuario = new User();

        $usuario->role_id   = $request->post('role_id');
        $usuario->name      = $request->post('name');
        $usuario->email     = $request->post('email');
        $usuario->password  = Hash::make($request->post('password'));
        $usuario->telefono  = $request->post('telefono');
        $usuario->direccion = $request->post('direccion');
        $usuario->estado    = 'activo';

        // Si el administrador autenticado es quien crea el usuario
        $usuario->created_by = Auth::id();

        $usuario->save();

        return redirect()
            ->route('usuarios.create')
            ->with('success', '¡Registro exitoso!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
