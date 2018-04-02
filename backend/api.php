<?php

REQUIRE_ONCE("./sqlConnections.php");

$action = $_GET['action'];
switch ($action) {
  case 'getCity':
    getCity();
    break;

  default:
    # code...
    break;
}


function getCity(){
  $sql = "SELECT * FROM city WHERE city_id = ".$_GET['idCity'];
  $rst = executeQuery($sql);
  echo json_encode($rst);
}


 ?>
