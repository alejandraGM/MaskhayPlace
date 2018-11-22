<?php
// inportar modelos 
spl_autoload_register(function($nombreClase)
{
    require_once '../model/' . $nombreClase . '.php';
});
$mHotel=new mHotel;
$mRestaurante=new mRestaurante;
$mFarmacia= new mFarmacia;
$mGeneral=new mGeneral;
$data;

$buscar=(isset($_GET['buscar']))?$_GET['buscar']:'';//lat long
$lugar=(isset($_GET['lugar']))?$_GET['lugar']:'';
$categoria=(isset($_GET['categoria']))?$_GET['categoria']:[''];
$distaciaRad=(isset($_GET['distaciaRad']))?$_GET['distaciaRad']:0;
$coordenada=(isset($_GET['coordenada']))?$_GET['coordenada']:[''];
$orden=(isset($_GET['orden']))?$_GET['orden']:'all';
$puntaje=(isset($_GET['puntaje']))?$_GET['puntaje']:[''];

//Buscar
$sitios=$mGeneral->Buscar($buscar,$categoria,$orden,$puntaje,$coordenada, $distaciaRad);

//Numero de Sitios Por Tipo
$numeroSitios=['farmacias'=>$mFarmacia->numFarmacias(),'restaurantes'=>$mRestaurante->numRestaurantes(),'hoteles'=>$mHotel->numHoteles()];
//Numero de Stios por Puntaje
$num02=$mGeneral->numeroSitiosPorPuntaje(0,1);
$num34=$mGeneral->numeroSitiosPorPuntaje(3,4);
$num5=$mGeneral->numeroSitiosPorPuntaje(5,5);
$sitiosPuntaje=['pts5'=>$num5, 'pts34'=>$num34, 'pts02'=>$num02];

// foreach ($sitios as $sitio) {
//     print_r($sitio);
//     echo '<br> <br>';
// }

$data=['numSitios'=>$numeroSitios,
        'sitiosPuntaje'=>$sitiosPuntaje,
        'sitios'=>$sitios
];
//print_r($_GET)
echo json_encode($data)


//echo json_encode($_GET);

?>