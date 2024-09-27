<?php

header('Content-Type: application/json');
require_once '../../modelo/operador.php';
require_once '../../modelo/satelite.php';
require_once 'respuesta/consultarRespuesta.php';

$resp = new consultarRespuesta();

$op = new Operador();
$op->Nombre = "ARSAT";
$op->TipoEmpresa = "Pública";
$op->FormaLegal = "Sociedad anónima";

$sat = new Satelite();
$sat->Id = $_GET['id'];
$sat->Nombre = "Arsat-1";
$sat->Operador = $op;
$sat->TipoMision = "comunicaciones";
$sat->DuracionEnAnios = "15";

$resp->Satelite = $sat;

echo json_encode($resp);