<?php
/*String db = request.getServletContext().getRealPath("/asset/db/rt02.accdb");*/
/*error_reporting(E_ERROR | E_WARNING | E_PARSE | E_NOTICE);*/
error_reporting(E_ERROR);
$GLOBALS["ROOT"] = "/home/u837302425/public_html";
$GLOBALS["SERVER"] = "http://rt02rw14.pe.hu";

$www = array();
$www["ROOT"] = $GLOBALS["ROOT"];
$www["SERVER"] = $GLOBALS["SERVER"];

$sqlitedb = "/asset/db/rt02.db";
include($www["ROOT"]."/asset/classes/SqliteCon.php");
include($www["ROOT"]."/asset/classes/Penduduk.php");
include($www["ROOT"]."/asset/classes/GUID.php");
include($www["ROOT"]."/asset/classes/JenisBayar.php");
?>
