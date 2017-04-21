<?php
$oyot = $GLOBALS["SERVER"];
$jb = new JenisBayar();
$guid = new GUID();
$uuid = $guid->getGUID();

$param = array();
$param["id_jenis_bayar"] = $uuid;
$param["nama_jenis"] = $_POST["nama_jenis"];

/*print_r($param);*/

$jb->simpanTambah($param);
?>
<span class="label label-success">Data telah disimpan!!!</span>
<meta http-equiv="refresh" content="2; URL=<?php echo $oyot; ?>/sites/jenis_bayar">
