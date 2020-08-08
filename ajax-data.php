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


echo '
            <div class="row tm-row tm-mb-60">
                <div class="col-lg-6 tm-mb-60 tm-person-col">
                    <div class="media tm-person">
                      <hr class="tm-hr-primary tm-mb-55">
                        <div class="media-body">
                            <h2 class="tm-color-primary tm-post-title mb-2">Receiver Signal Levels</h2>
                            <h3 class="tm-h3 mb-3">Considering Signal time<br>* NOW TIME : '. date("Y-m-d h:i:s").'<br>* SIGNAL TIME: '.$SIGNAL_DATE_TIME.'</h3>

                              <div class="w3-container">

                                <h4>Current Signal Levels</h4>
                                <p>Strength of Frequency (175.25 Mz): '.$F.' dBm</p>

                                <div class="w3-light-grey" style="border: 1px groove">
                                  <div style="height:24px;width:'.$FWIDTH.'%; background-color: '.$FCOLOR.';"><p style="color:#fff; padding-left: 10px;">'.$F.' dBm</p></div>
                                </div>
                                <p style="margin-bottom:-5px;">Lower Cutoff Frequency (175.00 Mz) : '.$LCF.' dBm</p>
                                <p style="margin-bottom:-5px;">Upper Cutoff Frequency (175.50 Mz) : '.$UCF.' dBm</p>
                                <p style="margin-bottom:-5px;">Sampling Interval : 0.25 Mz</p>
                                <p style="margin-bottom:-5px;">Gain : '.$GAIN.'</p><br>
                                <h4>Signal Strength Colors Explained</h4>

                                <div class="w3-light-grey">
                                  <div style="height:24px;width:100%;border: 1px groove #000; border-bottom: none; background-color: #b8fc17"><p style="color:#fff; padding-left: 10px;">TOO STRONG : 10 dBm UPTO -05 dBm</p></div>
                                  <div style="height:24px;width:100%;border: 1px groove #000; border-bottom: none; background-color: #3bde26"><p style="color:#fff; padding-left: 10px;">STRONG : -05 dBm UPTO -35 dBm</p></div>
                                  <div style="height:24px;width:100%;border: 1px groove #000; border-bottom: none; background-color: #1f8a1d"><p style="color:#fff; padding-left: 10px;">GOOD : -35 dBm UPTO -50 dBm</p></div>
                                  <div style="height:24px;width:100%;border: 1px groove #000; border-bottom: none; background-color: #0952e3"><p style="color:#fff; padding-left: 10px;">MODERATE : -50 dBm UPTO -60 dBm</p></div>
                                  <div style="height:24px;width:100%;border: 1px groove #000; border-bottom: none; background-color: #8f0000"><p style="color:#fff; padding-left: 10px;">MARGINAL : -60 dBm UPTO -65 dBm</p></div>
                                  <div style="height:24px;width:100%;border: 1px groove #000; border-bottom: none; background-color: #7a7a7a"><p style="color:#fff; padding-left: 10px;">LOW : -65 dBm UPTO -95 dBm</p></div>
                                  <div style="height:24px;width:100%;border: 1px groove #000; background-color: #292929"><p style="color:#fff; padding-left: 10px;">NOISE : -95 dBm UPTO</p></div>
                                </div>
                              </div>
                        </div>
                    </div>                  
                </div>
                <div class="col-lg-6 tm-mb-60 tm-person-col">
                    <div class="media tm-person">
                      <hr class="tm-hr-primary tm-mb-55">
                        <div class="media-body">
                            <h2 class="tm-color-primary tm-post-title mb-2">Tv Screen Test Image</h2>
                            <h3 class="tm-h3 mb-3">Considering recent time <br>* IOT REQUEST TIME : '.$RESULT[0]["IOT_REQUEST_TIME"].'<br>* SERVER UPDATE TIME : '.$RESULT[0]["SERVER_REQUEST_TIME"].'</h3>
                            <img src="https://api.maxford.lk/rupavahini/vc_means_vision_carrier/image.php?id='.$RESULT[0]["ID"].'" alt="Girl in a jacket" width="100%">
                        </div>
                    </div> 
                </div>
            </div>
';




?>