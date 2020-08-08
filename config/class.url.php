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





array_push($_CONSOLE, 'OPEN_CLASS_URL_PHP:'.$_SERVER['PHP_SELF']);
$CURRENT_URL_ARRY = $_SERVER['REQUEST_URI'];
$CURRENT_URL_ARRY_DATA = explode("/", $CURRENT_URL_ARRY );


$_BODY = json_decode(file_get_contents('php://input'), true);
if(isset($_POST) && !empty($_POST)){ $POST_DATA = $_POST; } else { $POST_DATA = array("0"=>"0"); }
if(isset($_GET) && !empty($_GET)){ $GET_DATA = $_GET; } else { $GET_DATA = array("0"=>"0"); }
if(isset($_BODY) && !empty($_BODY)){ $JSON_DATA = $_BODY; } else { $JSON_DATA = array("0"=>"0"); }
$_WEB = array("URL"=>$CURRENT_URL_ARRY_DATA, "POST"=>$POST_DATA, "GET"=>$GET_DATA, "JSON"=>$JSON_DATA);

?>