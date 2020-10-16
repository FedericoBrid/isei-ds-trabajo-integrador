<?php
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');

require_once 'modelo/CuentaCorriente.php';
require_once 'modelo/Proveedor.php';

$p1 = new Proveedor();
$p1->RazonSocial= "Proveedor 1";
$p1->CUIT= "20-30698698-9";
$p1->Email= "proveedor1@gmail.com";

$p2 = new Proveedor();
$p2->RazonSocial= "Proveedor 2";
$p2->CUIT= "20-28665888-9";
$p2->Email= "proveedor2@gmail.com";

$p3 = new Proveedor();
$p3->RazonSocial= "Proveedor 3";
$p3->CUIT= "20-33504333-9";
$p3->Email= "proveedor3@gmail.com";

$p4 = new Proveedor();
$p4->RazonSocial= "Proveedor 4";
$p4->CUIT= "20-37500112-9";
$p4->Email= "proveedor4@gmail.com";

$cc1 = new CuentaCorriente();
$cc1->NroCuentaCorriente= 123132132132;
$cc1->Saldo= "$455.545";
$cc1->Proveedor= $p1;

$cc2 = new CuentaCorriente();
$cc2->NroCuentaCorriente= 787878855;
$cc2->Saldo= "$123.456";
$cc2->Proveedor= $p2;

$cc3 = new CuentaCorriente();
$cc3->NroCuentaCorriente= 5558488555;
$cc3->Saldo= "$320.002";
$cc3->Proveedor= $p3;

$cc4 = new CuentaCorriente();
$cc4->NroCuentaCorriente= 54654654655;
$cc4->Saldo= "$88.885";
$cc4->Proveedor= $p4;


$array = array();
$array[]=$cc1;
$array[]=$cc2;
$array[]=$cc3;
$array[]=$cc4;

echo json_encode($array);