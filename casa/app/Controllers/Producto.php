<?php

namespace App\Controllers;//tecnica para facilitar el enrutamiento

class Producto extends BaseController
{
    public function index()//llamar las vistas
    {
        return view('registroProducto');
    }


// Recibir los datos del formulario
    public function registrar (){
        
   $producto=$this->request->getPost("producto");
   $foto=$this->request->getPost("foto");
   $precio=$this->request->getPost("precio");
   $descripcion=$this->request->getPost("descripcion");
   $tipo=$this->request->getPost("tipo");

// Paso2 construir un arreglo asociativo con los datos indexado

$datos=array(
"producto"=>$producto,
"foto"=>$foto,
"precio"=>$precio,
"descripcion"=>$descripcion,
"tipo"=>$tipo
);

print_r ($datos);
}
}