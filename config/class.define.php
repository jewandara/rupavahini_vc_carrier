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





GLOBAL $_CONSOLE; $_CONSOLE = []; //WEB PAGE PROCESS CONSOLE DATA ARRY
array_push($_CONSOLE, 'OPEN_CLASS_DIFINE_PHP:'.$_SERVER['PHP_SELF']);

		GLOBAL $_SQL; 		//SQL CONNECTION
		GLOBAL $_PREFIX;	//SQL TABLE PREFIX

		GLOBAL $_ERROR; $_ERROR = []; //ARRY MESSAGES 
		GLOBAL $_SUCES; $_SUCES = []; //ARRY MESSAGES  

		GLOBAL $_LOG; //ARRY
		GLOBAL $_WEB; //ARRY
		GLOBAL $_USR; //ARRY

		GLOBAL $_DATE;
		$_DATE = []; //ARRY 

		GLOBAL $_RESULT;
		$_RESULT = new stdClass();
?>