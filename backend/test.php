<?php

REQUIRE_ONCE("./sqlConnections.php");
$sql = "SELECT * FROM city";
$rst = executeQuery($sql);
echo json_encode($rst);





?>
