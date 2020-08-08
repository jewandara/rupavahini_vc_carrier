<?php

function view_vc_means_vision_carrier($ID)
{
	global $_SQL;
	$ARRYDATA = [];
	$sql_query = "SELECT `ID`, `TXT_FILE`, `IMG_FILE`, `IOT_REQUEST_TIME`, `SERVER_REQUEST_TIME` 
	FROM `project_vc_means_vision_carrier` WHERE `ID` = ".$ID;
	$result = $_SQL->query($sql_query);
	if ($result->num_rows > 0) {
	    while($row = $result->fetch_assoc()) { array_push($ARRYDATA, $row); }
	} else{ return NULL; }
	return $ARRYDATA;
}



if(!empty($_WEB["GET"]["id"])){
	$RESULT = view_vc_means_vision_carrier($_WEB["GET"]["id"]);
	$_RESULT->error = "false";
	$_RESULT->message = "READING DATA SUCCESSFULLY";
	$_RESULT->result = $RESULT;
}
else{
	$_RESULT->error = "true";
	$_RESULT->message = "EMPTY READIND ID";
	$_RESULT->result = [];
}
//dilhan kanumale



?>