<?php
/********************************
“My deepest fear is not that 
I'm inadequate. But it is that 
I'm soo powerful beyond the 
measure. It is the brightest 
light, not my darkness,
that most frightens me.
As I am liberated from 
my own fear, my presence 
automatically liberates others.”
|--------------------------------|
|                                |
|    *                           |
|    *            *        *     |
|                           *    |
|      *                         |
|                           *    |
|                          *     |
|                *               |
|              *                 |
|            *                   |
|                                |
|                       *        |
|                                |
|             *                  |
|--------------------------------|
J.R.M. Jeewandara
+94 77 363 2682 / +94 77 733 2829
jewandara@gmail.com
jewandara@hotmail.com
WWW.JEWANDARA.COM
---------------------------------
 _____      _  
|  __ \    | |
| |__) |   | |
|  _  /_   | |
| | \ \ |__| |
|_|  \_\____/ 
********************************/



//header("Content-Type:application/json");
require_once("config/config.php");

function view_vc_means_vision_carrier_last_update()
{
	global $_SQL;
	$ARRYDATA = [];
	$sql_query = "SELECT `ID`, `TXT_FILE`, `IMG_FILE`, `IOT_REQUEST_TIME`, `SERVER_REQUEST_TIME` 
	FROM `project_vc_means_vision_carrier` 
	ORDER BY `ID` 
	DESC LIMIT 1";
	$result = $_SQL->query($sql_query);
	if ($result->num_rows > 0) {
	    while($row = $result->fetch_assoc()) { array_push($ARRYDATA, $row); }
	} else{ return NULL; }
	return $ARRYDATA;
}


$RESULT = view_vc_means_vision_carrier_last_update();
$DATA_ARRY = explode(", ", $RESULT[0]["TXT_FILE"]);

$DATE = ltrim($DATA_ARRY[0], "b'");
$SIGNAL_DATE_TIME = $DATE.' '.$DATA_ARRY[1];

$LCF = (int)$DATA_ARRY[6];
$UCF = (int)$DATA_ARRY[8];
$F = (int)$DATA_ARRY[7];
$GAIN = (int)$DATA_ARRY[5];

$FVAL = $F*(-1);

if( $FVAL<=5 ){ $FWIDTH = 100; $FCOLOR = "#b8fc17"; }
elseif( ($FVAL>5) && ($FVAL<=35) ){ $FWIDTH = (100-$FVAL); $FCOLOR = "#3bde26"; }
elseif( ($FVAL>35) && ($FVAL<=50) ){ $FWIDTH = (100-$FVAL); $FCOLOR = "#1f8a1d"; }
elseif( ($FVAL>50) && ($FVAL<=60) ){ $FWIDTH = (100-$FVAL); $FCOLOR = "#0952e3"; }
elseif( ($FVAL>60) && ($FVAL<=65) ){ $FWIDTH = (100-$FVAL); $FCOLOR = "#8f0000"; }
elseif( ($FVAL>65) && ($FVAL<=95) ){ $FWIDTH = 10; $FCOLOR = "#7a7a7a"; }
elseif( $FVAL>95 ){ $FWIDTH = 5; $FCOLOR = "#292929"; }
else{ $FWIDTH = 100; $FCOLOR = "#000"; }

$mapObject = new stdClass();
$mapObject->time = $SIGNAL_DATE_TIME;
$mapObject->value = $F;
$mapObject->color = $FCOLOR;
$mapJson = json_encode($mapObject);
echo $mapJson;
//echo '{ "time":"'.$SIGNAL_DATE_TIME.'", "value":"'.$F.'", "color":"'.$FCOLOR.'", }';

?>