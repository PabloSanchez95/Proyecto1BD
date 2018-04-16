<?php

REQUIRE_ONCE("./sqlConnections.php");

$action = $_GET['action'];
switch ($action) {
  case 'address':
    getaddress();
    break;
  case 'bill':
    getbill();
    break;
  case 'city':
    getcity();
    break;
  case 'country':
    getcountry();
    break;
  case 'customer':
    getcustomer();
    break;
  case 'discount':
    getdiscount();
    break;
  case 'expedition':
    getexpedition();
    break;
  case 'flight':
    getflight();
    break;
  case 'flight_route':
    getflight_route();
    break;
  case 'fligt_type':
    getfligt_type();
    break;
  case 'hotel':
    gethotel();
    break;
  case 'inserthotel':
    insertHotel();
    break;
  case 'hotel_room':
    gethotel_room();
    break;
  case 'location':
    getlocation();
    break;
  case 'pack_flight':
    getpack_flight();
    break;
  case 'pack_hotel':
    getpack_hotel();
    break;
  case 'pack_location':
    getpack_location();
    break;
  case 'pack_plan':
    getpack_plan();
    break;
  case 'package':
    getpackage();
    break;
  case 'plan':
    getplan();
    break;
  case 'plan_exp':
    getplan_exp();
    break;
  case 'room_type':
    getroom_type();
    break;
  default:
    break;
}


function getaddress(){
  $sql = "SELECT * FROM address";
  if(!empty($_GET['address_id'])){
    $sql .= " WHERE address_id = ".$_GET['address_id'];
  }
  $rst = executeQueryRead($sql);
  echo json_encode($rst);
}

function getbill(){
  $sql = "SELECT * FROM bill";
  if(!empty($_GET['bill_id'])){
    $sql .= " WHERE bill_id = ".$_GET['bill_id'];
  }
  $rst = executeQueryRead($sql);
  echo json_encode($rst);
}

function getcity(){
  $sql = "SELECT * FROM city";
  if(!empty($_GET['city_id'])){
    $sql .= " WHERE city_id = ".$_GET['city_id'];
  }
  $rst = executeQueryRead($sql);
  echo json_encode($rst);
}

function getcountry(){
  $sql = "SELECT * FROM country";
  if(!empty($_GET['country_id'])){
    $sql .= " WHERE country_id = ".$_GET['country_id'];
  }
  $rst = executeQueryRead($sql);
  echo json_encode($rst);
}

function getcustomer(){
  $sql = "SELECT * FROM customer";
  if(!empty($_GET['customer_id'])){
    $sql .= " WHERE customer_id = ".$_GET['customer_id'];
  }
  $rst = executeQueryRead($sql);
  echo json_encode($rst);
}

function getdiscount(){
  $sql = "SELECT * FROM discount";
  if(!empty($_GET['discount_id'])){
    $sql .= " WHERE discount_id = ".$_GET['discount_id'];
  }
  $rst = executeQueryRead($sql);
  echo json_encode($rst);
}

function getexpedition(){
  $sql = "SELECT * FROM expedition";
  if(!empty($_GET['expedition_id'])){
    $sql .= " WHERE expedition_id = ".$_GET['expedition_id'];
  }
  $rst = executeQueryRead($sql);
  echo json_encode($rst);
}

function getflight(){
  $sql = "SELECT * FROM flight";
  if(!empty($_GET['flight_id'])){
    $sql .= " WHERE flight_id = ".$_GET['flight_id'];
  }
  $rst = executeQueryRead($sql);
  echo json_encode($rst);
}

function getflight_route(){
  $sql = "SELECT * FROM flight_route";
  if(!empty($_GET['flight_route_id'])){
    $sql .= " WHERE flight_route_id = ".$_GET['flight_route_id'];
  }
  $rst = executeQueryRead($sql);
  echo json_encode($rst);
}

function getfligt_type(){
  $sql = "SELECT * FROM fligt_type";
  if(!empty($_GET['fligt_type_id'])){
    $sql .= " WHERE fligt_type_id = ".$_GET['fligt_type_id'];
  }
  $rst = executeQueryRead($sql);
  echo json_encode($rst);
}

function gethotel(){
  $sql = "SELECT * FROM hotel";
  if(!empty($_GET['hotel_id'])){
    $sql .= " WHERE hotel_id = ".$_GET['hotel_id'];
  }
  $rst = executeQueryRead($sql);
  echo json_encode($rst);
}

function gethotel_room(){
  $sql = "SELECT * FROM hotel_room";
  if(!empty($_GET['hotel_room_id'])){
    $sql .= " WHERE hotel_room_id = ".$_GET['hotel_room_id'];
  }
  $rst = executeQueryRead($sql);
  echo json_encode($rst);
}

function getlocation(){
  $sql = "SELECT * FROM location";
  if(!empty($_GET['location_id'])){
    $sql .= " WHERE location_id = ".$_GET['location_id'];
  }
  $rst = executeQueryRead($sql);
  echo json_encode($rst);
}

function getpack_flight(){
  $sql = "SELECT * FROM pack_flight";
  if(!empty($_GET['pack_flight_id'])){
    $sql .= " WHERE pack_flight_id = ".$_GET['pack_flight_id'];
  }
  $rst = executeQueryRead($sql);
  echo json_encode($rst);
}

function getpack_hotel(){
  $sql = "SELECT * FROM pack_hotel";
  if(!empty($_GET['pack_hotel_id'])){
    $sql .= " WHERE pack_hotel_id = ".$_GET['pack_hotel_id'];
  }
  $rst = executeQueryRead($sql);
  echo json_encode($rst);
}

function getpack_location(){
  $sql = "SELECT * FROM pack_location";
  if(!empty($_GET['pack_location_id'])){
    $sql .= " WHERE pack_location_id = ".$_GET['pack_location_id'];
  }
  $rst = executeQueryRead($sql);
  echo json_encode($rst);
}

function getpack_plan(){
  $sql = "SELECT * FROM pack_plan";
  if(!empty($_GET['pack_plan_id'])){
    $sql .= " WHERE pack_plan_id = ".$_GET['pack_plan_id'];
  }
  $rst = executeQueryRead($sql);
  echo json_encode($rst);
}

function getpackage(){
  $sql = "SELECT * FROM package";
  if(!empty($_GET['package_id'])){
    $sql .= " WHERE package_id = ".$_GET['package_id'];
  }
  $rst = executeQueryRead($sql);
  echo json_encode($rst);
}

function getplan(){
  $sql = "SELECT * FROM plan";
  if(!empty($_GET['plan_id'])){
    $sql .= " WHERE plan_id = ".$_GET['plan_id'];
  }
  $rst = executeQueryRead($sql);
  echo json_encode($rst);
}

function getplan_exp(){
  $sql = "SELECT * FROM plan_exp";
  if(!empty($_GET['plan_exp_id'])){
    $sql .= " WHERE plan_exp_id = ".$_GET['plan_exp_id'];
  }
  $rst = executeQueryRead($sql);
  echo json_encode($rst);
}

function getroom_type(){
  $sql = "SELECT * FROM room_type";
  if(!empty($_GET['room_type_id'])){
    $sql .= " WHERE room_type_id = ".$_GET['room_type_id'];
  }
  $rst = executeQueryRead($sql);
  echo json_encode($rst);
}


function insertHotel(){
  $params = json_decode($_GET['params'],true);
  $sql = "INSERT INTO hotel(hotel,rating,address_id) VALUES ('".$params['hotel']."','".$params['rating']."','".$params['address_id']."')";
  $rst = executeQueryMaster($sql);
  echo json_encode($rst);
}





 ?>
