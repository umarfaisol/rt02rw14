<?php
$oyot = $_SERVER["REQUEST_SCHEME"]."://".$_SERVER["SERVER_NAME"].":".$_SERVER["SERVER_PORT"];
$p = new Penduduk();
$guid = new GUID();
$uuid = $guid->getGUID();

$param = array();
$param["id_penduduk"] = $uuid;
$param["nama_lengkap"] = $_GET["nama_lengkap"];
$param["tempat_lahir"] = $_GET["tempat_lahir"];
$param["tanggal_lahir"] = $_GET["tanggal_lahir"];
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
