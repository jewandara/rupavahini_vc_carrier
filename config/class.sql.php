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





array_push($_CONSOLE, 'OPEN_CLASS_SQL_PHP:'.$_SERVER['PHP_SELF']);

class SqlServer {
	//private $db_host = NULL;			//Host Address
	//private $db_name = NULL; 			//Name of Database
	//private $db_user = NULL;    		//Name of DB User
	//private $db_pass = NULL;			//Password for DB User
	//private $db_prefix = NULL;
	function __construct($_HOST, $_DB, $_USER, $_PASS, $_PX) { 
		GLOBAL $_SQL, $_CONSOLE, $_PREFIX;
		$_PREFIX = $_PX;
		$_SQL = new mysqli($_HOST, $_USER, $_PASS, $_DB);
		if(mysqli_connect_errno()) { 
			array_push($_CONSOLE, "SQL_CONNECTION_ERROR:".mysqli_connect_errno()); 
			exit(); 
		}
		else{
			array_push($_CONSOLE, "SQL_CONNECTION_SUCCESS");
		}
	}
}


?>