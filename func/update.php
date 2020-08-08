<?php


function add_vc_means_vision_carrier($TEXT, $IMGE, $TIME){
	global $_SQL;
	$sql_query =  'INSERT INTO project_vc_means_vision_carrier
					( TXT_FILE, IMG_FILE, IOT_REQUEST_TIME ) 
					VALUES 
					( "'.$TEXT.'", "'.$IMGE.'", "'.$TIME.'")';
	if ($_SQL->query($sql_query) === TRUE) { return [ 1, $_SQL->insert_id, "NEW DATA ADDED SUCCESSFULLY"]; } 
	else { return [ 0, 0, "NEW DATA ADDED SQL ERROR FOUND"]; }
}




if(!empty($_WEB["JSON"]["PROJECT"])){ 
	if($_WEB["JSON"]["PROJECT"] == $_SYS){ 

		$_TEXT_FILE_PROCESS = new stdClass();
		$_TEXT_FILE_PROCESS->text_file = "reading";
		if(!empty($_WEB["JSON"]["TEXT_FILE"])) { $_TEXT_FILE_PROCESS->validate = "true"; } else { $_TEXT_FILE_PROCESS->validate = "false"; }

		$_IMGE_FILE_PROCESS = new stdClass();
		$_IMGE_FILE_PROCESS->image_file = "reading";
		if(!empty($_WEB["JSON"]["IMAGE_FILE"])) { $_IMGE_FILE_PROCESS->validate = "true"; } else { $_IMGE_FILE_PROCESS->validate = "false"; }

		$_DEVICE_TIME_PROCESS = new stdClass();
		$_DEVICE_TIME_PROCESS->device_time = "reading";
		if(!empty($_WEB["JSON"]["DATE_TIME"])) { $_DEVICE_TIME_PROCESS->validate = "true"; } else { $_DEVICE_TIME_PROCESS->validate = "false"; }

		$_RE = add_vc_means_vision_carrier(strval($_WEB["JSON"]["TEXT_FILE"]), strval($_WEB["JSON"]["IMAGE_FILE"]), $_WEB["JSON"]["DATE_TIME"]);
		if($_RE[0]) { $_RESULT->error = "false"; } else { $_RESULT->error = "true"; }
		$_RESULT->message = $_RE[2];
		$_RESULT->result = $_RE[1];
		$_RESULT->process = [ $_TEXT_FILE_PROCESS, $_IMGE_FILE_PROCESS, $_DEVICE_TIME_PROCESS ];
		#$_RESULT->request = $_WEB;
	}
	else{
	    $_RESULT->error = "true";
	    $_RESULT->message = "INCORRECT_PROJECT_NAME";
	    $_RESULT->result = $_WEB;
	}
}
else{
    $_RESULT->error = "true";
    $_RESULT->message = "EMPTY_PROJECT_NAME";
    $_RESULT->result = $_WEB;
}

?>