<?php
class Penduduk {
    public function selectAll() {
        $con = new SqliteCon();
        $sql = "SELECT * FROM penduduk;";
        $rs = $con->query($sql);

        $retVal = array();
        while($data = $rs->fetchArray()) {
             $retVal[] = $data;
        }
        $con->close();

        return $retVal;
    }
}
?>
