<?php

    if (isset($_POST['enviarhotel'])) 
    {

        //recibimos el nombre 
$nombre = $_POST['nombre'];

//recibimos la direccion 
$direccion = $_POST['direccion'];

//recibimos la descripcion
$descripcion = $_POST['descripcion'];



//consulta para tabla lugar * falta logo, mapa, etc
echo "insert into lugar (nombre_lugar,direccion,descripcion) values ($nombre,$direccion,$descripcion)";
    $tipo = $_POST['tipohotel'];

    if (isset($_POST['parqueo']) && $_POST['parqueo'] = '1')      
    $parqueo = 1;
    else
    $parqueo = 0;

    if (isset($_POST['piscina']) && $_POST['piscina'] = '1')      
    $piscina = 1;
    else
    $piscina = 0;

    if (isset($_POST['area']) && $_POST['area'] = '1')      
    $area = 1;
    else
    $area = 0;

    if (isset($_POST['bar']) && $_POST['bar'] = '1')      
    $bar = 1;
    else
    $bar = 0;

    if (isset($_POST['cable']) && $_POST['cable'] = '1')      
    $cable = 1;
    else
    $cable = 0;

    if (isset($_POST['internet']) && $_POST['internet'] = '1')      
    $internet = 1;
    else
    $internet = 0;

    if (isset($_POST['aire']) && $_POST['aire'] = '1')      
    $aire = 1;
    else
    $aire = 0;

    if (isset($_POST['desayuno']) && $_POST['desayuno'] = '1')      
    $desayuno = 1;
    else
    $desayuno = 0;

    if (isset($_POST['gym']) && $_POST['gym'] = '1')      
    $gym = 1;
    else
    $gym = 0;

    if (isset($_POST['mascotas']) && $_POST['mascotas'] = '1')      
    $mascotas = 1;
    else
    $mascotas = 0;

    if (isset($_POST['spa']) && $_POST['spa'] = '1')      
    $spa = 1;
    else
    $spa = 0;

    if (isset($_POST['comedor']) && $_POST['comedor'] = '1')      
    $comedor = 1;
    else
    $comedor = 0;

    if (isset($_POST['servicio']) && $_POST['servicio'] = '1')      
    $servicio = 1;
    else
    $servicio = 0;
echo "insert into hotel (categoria,parqueo,piscina,area_recreativa,bar,cable,internet,aire_acondicionado,desayuno,gimnasio,mascotas,spa,comedor,servicio_habitacion) values ($tipo,$parqueo,$piscina,$area,$bar,$cable,$internet,$aire,$desayuno,$gym,$mascotas,$spa,$comedor,$servicio)";








    } 
    //falta registro comun los demas.
?>