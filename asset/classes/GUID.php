<?php
class GUID {
    public function getGUID() {
        /*mt_srand((double)microtime()*10000);//optional for php 4.2.0 and up.*/
        /*$charid = strtoupper(md5(uniqid(rand(), true)));*/
        $now = new DateTime();
        $timestring = $now->format("Y-m-d H:i:s");
        /*$charid = md5(uniqid(rand(), true));*/
        $charid = md5($timestring);
        $hyphen = chr(45);// "-"
        $uuid = //chr(123)// "{"
            substr($charid, 0, 8).$hyphen
            .substr($charid, 8, 4).$hyphen
            .substr($charid,12, 4).$hyphen
            .substr($charid,16, 4).$hyphen
            .substr($charid,20,12);
            //.chr(125);// "}"

        return $uuid;
    }
}
?>
