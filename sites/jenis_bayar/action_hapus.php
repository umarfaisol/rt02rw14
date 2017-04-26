<?php
$oyot = $GLOBALS["SERVER"];
$jb = new JenisBayar();

$param = $_POST["id_jenis_bayar"];

/*print_r($param);*/

$jb->hapusJenisBayarById($param);
?>
<span class="label label-success">Data telah dihapus!!!</span>
<meta http-equiv="refresh" content="2; URL=<?php echo $oyot; ?>/sites/jenis_bayar">
