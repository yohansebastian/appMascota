<?php

namespace App\Controllers;

class AnimalesController extends BaseController
{
    public function registrarAnimalView(){
        return view('registroAnimal');
    }
    public function registrar(){
         // 1. Recibir los datos del formulario

         $nombre      = $this->request->getPost("nombre");
         $edad        = $this->request->getPost("edad");
         $fotografia  = $this->request->getPost("fotografia");
         $descripcion = $this->request->getPost("descripcion");
         $tipo        = $this->request->getPost("tipo");
 
         // 2. Construir arreglo asosiativo con los datos recibidos 
 
         $datos = array(
             "nombre"      => $nombre,
             "edad"        => $edad,
             "fotografia"  => $fotografia,
             "descripcion" => $descripcion,
             "tipo"        => $tipo
         ); 

         print_r($datos);
    }
}