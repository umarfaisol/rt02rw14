<?php
/*String db = request.getServletContext().getRealPath("/asset/db/rt02.accdb");*/
/*error_reporting(E_ERROR | E_WARNING | E_PARSE | E_NOTICE);*/
error_reporting(E_ERROR);
$sqlitedb = "/asset/db/rt02.db";
include($_SERVER["CONTEXT_DOCUMENT_ROOT"]."/asset/classes/SqliteCon.php");
include($_SERVER["CONTEXT_DOCUMENT_ROOT"]."/asset/classes/Penduduk.php");
include($_SERVER["CONTEXT_DOCUMENT_ROOT"]."/asset/classes/GUID.php");
include($_SERVER["CONTEXT_DOCUMENT_ROOT"]."/asset/classes/JenisBayar.php");
?>
