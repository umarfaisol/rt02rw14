<?php
class SqliteCon extends SQLite3 {
    function __construct() {
        $this->open($_SERVER["CONTEXT_DOCUMENT_ROOT"]."/asset/db/rt02.db");
    }
}
?>
