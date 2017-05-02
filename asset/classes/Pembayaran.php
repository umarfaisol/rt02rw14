<?php
class Pembayaran {
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

    /* digunakan untuk melihat status bayar iuran wajib */
    public function getSudahBayarIuran($id_penduduk, $tahun, $bulan) {
        $con = new SqliteCon();
        $sql = "".
            "SELECT ".
                "pem.id_pembayaran ".
            "FROM ".
                "pembayaran pem ".
            "WHERE ".
                "(pem.id_penduduk=:id_penduduk) AND ".
                "(pem.tahun=:tahun) AND ".
                "(pem.bulan=:bulan) ";

        $retVal = false;
        $stmt = $con->prepare($sql);
        $stmt->bindValue(":id_penduduk", $id_penduduk);
        $stmt->bindValue(":tahun", $tahun);
        $stmt->bindValue(":bulan", $bulan);
        $rs = $stmt->execute();

        $retVal = array();
        while($data = $rs->fetchArray()) {
             $retVal[] = $data;
        }
        $stmt->close();
        $con->close();

        if (count($retVal) > 0) {
            return true;
        }
        else {
            return false;
        }
    }
}
?>
