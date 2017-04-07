<?php
$path = $_SERVER["REQUEST_SCHEME"]."://".$_SERVER["SERVER_NAME"].":".$_SERVER["SERVER_PORT"];
$p = new Penduduk();
$id = $_GET["id_penduduk"];
$hasil = $p->hapusPendudukById($id);

if ($hasil) {
?>
    <span class="label label-success">Data telah dihapus!!!</span>
<?php
}
?>

<meta http-equiv="refresh" content="2; URL=<?php echo $oyot; ?>/sites/penduduk">
