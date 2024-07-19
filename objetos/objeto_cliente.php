<?php
    //incluir el archivo Cliente.php para poder utilizar
    //el código que contienen
    include_once('../clases/Cliente.php');
    //crear un objeto de tipo Cliente = instanciar la clase
    $cliente = new Cliente();
    
    //atributo de la clase Cliente
    $cliente->nit=$_GET['txtNit'];

    //atributo que hereda de la clase persona
    $cliente->telefono=$_GET['txtTelefono'];
    $cliente->apellido=$_GET['txtApellido'];
    $cliente->asignarNombre($_GET['txtNombre']);
    $cliente->direccion=$_GET['txtDireccion'];
    
    echo $cliente->verDatos();
    //echo "<br>". $cliente->nombreCompleto();
?>