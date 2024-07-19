<?php
    include_once('../clases/Ventas.php');
    $ventas = new Ventas();

    $ventas->tipoContratacion=$_GET['txtTipoContratacion'];
    $ventas->comisionVenta=$_GET['txtComisionVentas'];
    
    //atributos que hereda de la clase empleado y persona 
    $ventas->codigo=$_GET['txtCodigo'];
    $ventas->nivelAcademico=$_GET['txtNivelAcademico'];
    $ventas->sueldoBase=$_GET['txtSueldoBase'];
    //persona
    $ventas->asignarNombre($_GET['txtNombre']);
    $ventas->apellido=$_GET['txtApellido'];
    $ventas->telefono=$_GET['txtTelefono'];
    $ventas->direccion=$_GET['txtDireccion'];

    echo "Sueldo liquido: ". $ventas->calcularSueldoLiquido();
    echo $ventas->verDatos();
?>