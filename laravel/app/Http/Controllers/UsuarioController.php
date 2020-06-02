<?php

namespace App\Http\Controllers;

use App\Usuario;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    /**
     * Retorna la lista de los usuario
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
      $usuarios = Usuario::get();
      echo json_encode( $usuarios );

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()  {
        //
    }

    /**
     * Almacena los datos del usuario nuevo.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)  {
      $datos = $request;
      $usr = new Usuario();
      $usr->nombre = $datos->nombre;
      $usr->apellido = $datos->apellido;
      $usr->direccion = $datos->direccion;
      $usr->telefono = $datos->telefono;
      $usr->correo  = $datos->mail;
      $usr->save();
      echo json_encode($usr);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Usuario  $usuario
     * @return \Illuminate\Http\Response
     */
    public function show(Usuario $usuario)  {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Usuario  $usuario
     * @return \Illuminate\Http\Response
     */
    public function edit(Usuario $usuario){
        //
    }

    /**
     *Actualiza los datos del usuario.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Usuario  $usuario
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Usuario $usuario){
      $datos = $request;
      $usr =  Usuario::find($usuario->id);
      $usr->nombre = $datos->nombre;
      $usr->apellido = $datos->apellido;
      $usr->direccion = $datos->direccion;
      $usr->telefono = $datos->telefono;
      $usr->correo  = $datos->mail;
      $usr->save();
      echo json_encode($usr);
        echo json_encode( $datos );
    }

    /**
     * Elimina los datos del usuario
     *
     * @param  \App\Usuario  $usuario
     * @return \Illuminate\Http\Response
     */
    public function destroy(Usuario $usuario){
      $usr = Usuario::find( $usuario->id );
      $usr->delete();
      echo( "usuario eliminado." );
    }
}
