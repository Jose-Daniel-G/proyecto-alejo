<?php

namespace App\Http\Controllers;

use App\Models\UsuarioRol;
use Illuminate\Http\Request;

class UsuarioRolController extends Controller
{
    public function index()
    {
        $usuarioRoles = UsuarioRol::all();
        return view('usuario_rol.index', compact('usuarioRoles'));
    }

    public function create()
    {
        return view('usuario_rol.create');
    }

    public function store(Request $request)
    {
        $usuarioRol = new UsuarioRol();
        $usuarioRol->usuario_id = $request->usuario_id;
        $usuarioRol->rol_id = $request->rol_id;
        $usuarioRol->save();

        return redirect()->route('usuario-rol.index');
    }

    public function edit($id)
    {
        $usuarioRol = UsuarioRol::find($id);
        return view('usuario_rol.edit', compact('usuarioRol'));
    }

    public function update(Request $request, $id)
    {
        $usuarioRol = UsuarioRol::find($id);
        $usuarioRol->usuario_id = $request->usuario_id;
        $usuarioRol->rol_id = $request->rol_id;
        $usuarioRol->save();

        return redirect()->route('usuario-rol.index');
    }

    public function destroy($id)
    {
        $usuarioRol = UsuarioRol::find($id);
        $usuarioRol->delete();

        return redirect()->route('usuario-rol.index');
    }
}
