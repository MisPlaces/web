<?php
//************************* DECLARACION DE GLOBALES *******************************//
$CONN_DEFAULT = 0;
//************************* DECLARACION DE CONECCION ******************************//
$con_server[0]	=  "192.168.19.86";
$con_userid[0] =   "misplaces";
$con_password[0] = "rismi";
$con_dbase[0]    = "misplaces";
////*********************************************************************************//
//******************************** INCLUDES ***************************************//
include_once("DB_MySQL.php");
include_once("class.mysql.php");
//include_once("class.error.php");
include_once("class.table.php");
//*********************************************************************************//
$conn=new TConnection();
$conn->Connect($con_server[$CONN_DEFAULT], $con_userid[$CONN_DEFAULT], $con_password[$CONN_DEFAULT], $con_dbase[$CONN_DEFAULT]);

$db = new MySQL($con_server[0],$con_dbase[0],$con_userid[0],$con_password[0]);
//$error = new Error();
$SQL_EXP = "SHOW TABLES";
$RES_EXP = $conn->execute($SQL_EXP);
?>
