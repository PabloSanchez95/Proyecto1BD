<?php
	require("sqlErrorMessages.php");
  	function executeQuery($query){
  		set_time_limit(0);
        $_SESSION['error_sql'] = "";
        $_SESSION['sql_debug'] = $query;
	  	$link = mysql_connect("localhost", "root","123") or die (json_encode(array('success'=>'false','error_sql'=>mysql_error(),'messageText'=>'Error de conexi&oacute;n')));
	    mysql_select_db ("vacaciones");
	    mysql_query("SET NAMES 'utf8'");
	    $result = mysql_query($query,$link);
	    $operation = strtoupper(substr(trim($query), 0,6));
	    $resultArray = array('success'=>true);
	    switch($operation){
	        case "SELECT":
	            $pos = 0;
	            $resultArray['records'] =  mysql_num_rows($result);
	            while($row = mysql_fetch_assoc($result)){
	                $resultArray['root'][$pos] = $row;
	                $pos++;
	            };
	            if (!isset($resultArray['root'])) {
	                $resultArray['root'] = null;
	            }
	            break;
	        case "INSERT":
	            $id = mysql_insert_id();
	            if($id == true || $id!= 0){
	                $resultArray['id'] = $id;
	            }
	            break;
	        default:
	        	if(substr($operation,0,4) == "DESC"){
	        		$pos = 0;
		            $resultArray['records'] =  mysql_num_rows($result);
		            while($row = mysql_fetch_assoc($result)){
		                $resultArray['root'][$pos] = $row['Field'];
		                $pos++;
		            };
		            if (!isset($resultArray['root'])) {
		                $resultArray['root'] = null;
		            }
		        }
	            break;
	    }
	    if (mysql_errno($link) == 0)
            $error_msg = "";
        else
            $error_msg = mysqlErrorMessages(mysql_errno($link));
	    //To array
	    $_SESSION['erorNo_sql'] = mysql_errno($link);
        $_SESSION['error_sql'] = $error_msg;
        $_SESSION['error_sql_debug'] = $error_msg;

				$logFile = fopen(str_replace('functions', 'log', str_replace('generales.php', "log_".date("Y-m-d", strtotime("now")).".log", _FILE_)), "a");
				fwrite($logFile, date("H:i:s - ", strtotime("now")).$query."\r\n");
				//fwrite($logFile, date("H:i:s - ", strtotime("now")).$ps_sql."\r\n");
				fclose($logFile);

	    return ($resultArray);
	}
	function confirm($parametro) {
        if ($parametro == true) {
            executeQuery("commit");
        } else {
            executeQuery("rollback");
        }
    }
    function conCatConditional($whereStr, $conditional) {
	if ($conditional <> "") {
		if ($whereStr == "") {
			$whereStr = "WHERE ";
		} else {

			$whereStr = $whereStr." AND ";
		}

		$whereStr = $whereStr.$conditional;
	}
	return $whereStr;
}
?>
