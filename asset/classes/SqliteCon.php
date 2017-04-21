<?php
class SqliteCon extends SQLite3 {
    function __construct() {
        $this->open($GLOBALS["ROOT"]."/asset/db/rt02.db");
    }
}
?>
