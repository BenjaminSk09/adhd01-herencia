<?php
    include_once('../clases/Empleado.php');
    $emple = new Empleado();
    //atributos que hereda de la clase Persona
    $emple->asignarNombre($_GET['txtNombre']);
    $emple->apellido=$_GET['txtApellido'];
    $emple->telefono=$_GET['txtTelefono'];
    $emple->direccion=$_GET['txtDireccion'];

    //atributos de la clase Empleado    
    $emple->codigo=$_GET['txtCodigo'];
    $emple->nivelAcademico=$_GET['txtNivelAcademico'];
    $emple->sueldoBase=$_GET['txtSueldoBase'];

    echo $emple->verDatos();
    
?>