<?php

namespace App\Controllers;

class ProductoController extends BaseController
{
    public function productoView(){
        return view('registroProducto');
    }
    public function registrarProducto(){

        // 1. Recibir los datos del formulario

        $producto    = $this->request->getPost("producto");
        $foto        = $this->request->getPost("fotografia");
        $precio      = $this->request->getPost("precio");
        $descripcion = $this->request->getPost("descripcion");
        $tipo        = $this->request->getPost("tipo");

        // 2. Construir arreglo asosiativo con los datos recibidos 

        $datos = array(
            "producto"    => $producto,
            "foto"        => $foto,
            "precio"      => $precio,
            "descripcion" => $descripcion,
            "tipo"        => $tipo
        );

        echo var_dump($datos);
    }
}