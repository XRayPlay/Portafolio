<?php
include 'clases.php';
    $cedula=$_POST['cedula'];

    $c= new conectar();
    $conexion=$c->conexion();
    $query = $conexion -> query ("SELECT * FROM habitantes WHERE cedula='$cedula'");
    while ($row = mysqli_fetch_array($query)) {
        $com1=1;
        $com2=1;
        $com3=1;
        $com4=1;
        $com5=1;
        $com6=1;
        $com7=1;
        $com8=1;
        $com9=1;
        $com10=1;
        $com11=1;
        $com12=1;
        $idd=$row['idhabitantes'];

        $datos=array(
            $com1=1,
            $com2=1,
            $com3=2,
            $com4=1,
            $com5=1,
            $com6=1,
            $com7=1,
            $com8=1,
            $com9=1,
            $com10=2,
            $com11=5,
            $com12=5,
            $idd
        );
        $obj= new usuario();
        $obj->registrarVotante($datos);
    }
?>