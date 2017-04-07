<?php
class Penduduk {
    /* ambil semua data */
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

    /* ambil data by id */
    public function getPendudukById($id) {
        $con = new SqliteCon();
        $sql = "SELECT * FROM penduduk WHERE (id_penduduk=:id);";
        $stmt = $con->prepare($sql);
        $stmt->bindValue(":id", $id);
        $rs = $stmt->execute();

        $retVal = array();
        while($data = $rs->fetchArray()) {
             $retVal[] = $data;
        }
        $con->close();

        return $retVal;
    }

    /* haspus penduduk by id */
    public function hapusPendudukById($id) {
        $con = new SqliteCon();
        $sql = "DELETE FROM pembayaran WHERE (id_penduduk=:id);";
        $stmt = $con->prepare($sql);
        $stmt->bindValue(":id", $id);
        $retVal = $stmt->execute();

        $sql = "DELETE FROM penduduk WHERE (id_penduduk=:id);";
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
        $sql = "INSERT INTO penduduk (".
                   "id_penduduk, ".
                   "nama_lengkap, ".
                   "tempat_lahir, ".
                   "tanggal_lahir, ".
                   "nik, ".
                   "no_kk, ".
                   "a_kk, ".
                   "blok, ".
                   "alamat_ktp, ".
                   "status_ktp ".
               ") VALUES ( ".
                   ":id_penduduk, ".
                   ":nama_lengkap, ".
                   ":tempat_lahir, ".
                   ":tanggal_lahir, ".
                   ":nik, ".
                   ":no_kk, ".
                   ":a_kk, ".
                   ":blok, ".
                   ":alamat_ktp, ".
                   ":status_ktp);";

        $stmt = $con->prepare($sql);
        $stmt->bindParam(":id_penduduk", $param["id_penduduk"]);
        $stmt->bindParam(":nama_lengkap", $param["nama_lengkap"]);
        $stmt->bindParam(":tempat_lahir", $param["tempat_lahir"]);
        $stmt->bindParam(":tanggal_lahir", $param["tanggal_lahir"]);
        $stmt->bindParam(":nik", $param["nik"]);
        $stmt->bindParam(":no_kk", $param["no_kk"]);
        $stmt->bindParam(":a_kk", $param["a_kk"]);
        $stmt->bindParam(":blok", $param["blok"]);
        $stmt->bindParam(":alamat_ktp", $param["alamat_ktp"]);
        $stmt->bindParam(":status_ktp", $param["status_ktp"]);
        $stmt->execute();

        $stmt->close();
        $con->close();
    }
}
?>
