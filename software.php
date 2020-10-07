<?php
require_once("include/datas.inc.php");
const DATA_LOCATION='datas/';
echo "----------------------Gestion des Licences logicielles--------------------------\n";



$employees=loadAndDump(DATA_LOCATION."employees.json");
$services=loadAndDump(DATA_LOCATION."services.json");
$softs=loadAndDump(DATA_LOCATION."softs.json");
$licenses=loadAndDump(DATA_LOCATION."licenses.json");


arrayDump(getEmployeesByService($employees,'compta'),'Liste des employés de la compta');


Echo "\n \n Teste de la function Avec Where\n" ;

//test Where employees

arrayDump(where($employees, "service","dsi"),'Liste DSI');
arrayDump(where($employees, "service","compta"),'Liste compta');
arrayDump(where($employees, "service","geo"),'Liste geo');
arrayDump(where($employees, "service","direction"),'Liste direction');

//test Where soft


?>