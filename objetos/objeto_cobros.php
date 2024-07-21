<?php
    include_once('../clases/Cobros.php');

     $cobro = new Cobros();
        //atributos heredados de Persona
     $cobro->asignarNombre($_POST['txtNombre']);
     $cobro->apellido=$_POST['txtApellido'];
     $cobro->direccion=$_POST['txtDireccion'];
     $cobro->telefono=$_POST['txtTelefono'];
        //atributos heredados de Empleado
     $cobro->codigo=$_POST['txtCodigo'];
     $cobro->sueldoBase=$_POST['txtSueldoBase'];
     $cobro->nivelAcademico=$_POST['txtNivelAcademico'];
        //atributos de la clase
    
    $cobro->setBonificacion=($_POST['txtBonificacion']);
    $cobro->setComisionCobro=($_POST['txtComisionCobro']);
    
    echo "<br>Sueldo liquido:".$cobro->calcularSueldoLiquido();
    echo $cobro->verDatos();

    
    ?>
