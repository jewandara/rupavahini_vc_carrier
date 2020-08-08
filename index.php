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





header("Content-Type:application/json");
require_once("config/config.php");

switch ($_WEB['URL'][3]) {
    case "update":
        require_once("func/update.php");
        break;
    case "read":
        require_once("func/read.php");
        break;
    case "graph":
        require_once("func/graph.php");
        break;
    case "status":
        require_once("func/status.php");
        break;
    default:
        require_once("func/update.php");
        break;
}


if( (!empty($_WEB["GET"]["dev_mode"])) && ($_WEB["GET"]["dev_mode"]=="1") ){
	$_CONSOLE_ARRY = new stdClass();
	$_CONSOLE_ARRY->date = $_DATE;
	$_CONSOLE_ARRY->process = $_CONSOLE;
	$_RESULT->console = $_CONSOLE_ARRY;
}

$_RESULT_ARRY = new stdClass();
$_RESULT_ARRY->result = $_RESULT;
$_JSON = json_encode($_RESULT_ARRY);
echo $_JSON;

?>