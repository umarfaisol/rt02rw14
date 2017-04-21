<?php
class JenisBayar {
    /* ambil semua data */
    public function selectAll($filter) {
        $con = new SqliteCon();
        $sql = "SELECT * FROM jenis_bayar WHERE (1=1) ";
        if ($filter != "") {
            $sql = $sql . " AND ". $filter;
        }
        $rs = $con->query($sql);

        $retVal = array();
        while($data = $rs->fetchArray()) {
             $retVal[] = $data;
        }
        $con->close();

        return $retVal;
    }

    /* haspus penduduk by id */
    public function hapusJenisBayarById($id) {
        $con = new SqliteCon();
        $sql = "DELETE FROM jenis_bayar WHERE (id_jenis_bayar=:id);";
        $stmt = $con->prepare($sql);
        $stmt->bindValue(":id", $id);
        $retVal = $stmt->execute();

        /* tutup koneksi */
        $con->close();

        return $retVal;
    }

    /* simpan */
    public function simpanTambah($param) {
        $con = new SqliteCon();
        $sql = "INSERT INTO jenis_bayar (".
                   "id_jenis_bayar, ".
                   "nama_jenis ".
               ") VALUES ( ".
                   ":id_jenis_bayar, ".
                   ":nama_jenis);";

        $stmt = $con->prepare($sql);
        $stmt->bindParam(":id_jenis_bayar", $param["id_jenis_bayar"]);
        $stmt->bindParam(":nama_jenis", $param["nama_jenis"]);
        $stmt->execute();

        $stmt->close();
        $con->close();
    }
}
?>
