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





require_once("class.define.php");
array_push($_CONSOLE, 'OPEN_CONFIG_PHP:'.$_SERVER['PHP_SELF']);
require_once("class.time.php");
require_once("class.url.php");
require_once("class.aes.php");
require_once("class.sql.php");


/******************************************************************/
/******************  |  --  IMPORTANT ! -- |  *********************/
/***  CREATE A SQL TABLE FOR USER LOG IN EVERY DATABASE BELLOW  ***/
/******************************************************************/
$_SYS = "project_rupavahini";
$esdb = new SqlServer("localhost", "project_rupavahini", "project", "Project270$*2020", "project_");
array_push($_CONSOLE, 'DONE_LOADING_SYSTEM_CONFIGURATION:'.$_SYS);

?>