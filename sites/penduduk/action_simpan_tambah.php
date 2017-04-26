<?php
$oyot = $GLOBALS["SERVER"];
$p = new Penduduk();
$guid = new GUID();
$uuid = $guid->getGUID();

$dt = new DateTime();
$d_param = $_GET["tanggal_lahir"];
$tanggal_lahir = $dt->createFromFormat("d-m-Y", $d_param);
/*
if (!is_null($_GET["tanggal_lahir"])) {
    $d = new DateTime();
    $dt = $d->createFromFormat("d-m-Y", $_GET["tanggal_lahir"]);
    $tanggal_lahir = $dt->getTimestamp();
}
*/
$param = array();
$param["id_penduduk"] = $uuid;
$param["nama_lengkap"] = $_GET["nama_lengkap"];
$param["tempat_lahir"] = $_GET["tempat_lahir"];
$param["tanggal_lahir"] = $tanggal_lahir->getTimestamp();
$param["nik"] = $_GET["nik"];
$param["no_kk"] = $_GET["no_kk"];
$param["a_kk"] = $_GET["a_kk"];
$param["blok"] = $_GET["blok"];
$param["alamat_ktp"] = $_GET["alamat_ktp"];
$param["status_ktp"] = $_GET["status_ktp"];

/*print_r($param);*/

$p->simpanTambah($param);
?>
<span class="label label-success">Data telah disimpan!!!</span>
<meta http-equiv="refresh" content="2; URL=<?php echo $oyot; ?>/sites/penduduk">
