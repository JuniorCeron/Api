<?php

namespace App\Controllers;

class Home extends BaseController
{    
   public function index(): string
    {
        return view("welcome_message");
    }

    public function verProducto()
    {
        $producto = array(
            'Id' => '001',
            'Nombre' => 'Producto Ejemplo',
            'Precio' => 19.99,
            'Descripcion' => 'Descripción del producto',
            'Categoria' => 'Electrónica',
            'Stock' => 50,
        );
    
        return $this->response->setJson($producto);
    }

    public function verUsuario()
{
    $usuario = array(
        'Id' => '1001',
        'Nombre' => 'Usuario Ejemplo',
        'Correo' => 'usuario@example.com',
        'Edad' => 25,
        'Rol' => 'Cliente',
        'Direccion' => 'Calle Principal 123',
    );

    return $this->response->setJson($usuario);
}

public function verLocal()
{
    $local = array(
        'Id' => 'L001',
        'Nombre' => 'Tienda de Ejemplo',
        'Ubicacion' => 'Centro Comercial XYZ',
        'Horario' => 'Lunes a Viernes: 9:00 AM - 7:00 PM',
        'Contacto' => array(
            'Email' => 'tienda@example.com',
            'Telefono' => '555-987-6543',
        ),
    );

    return $this->response->setJson($local);
}

    
}