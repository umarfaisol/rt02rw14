<?php
$oyot = $_SERVER["REQUEST_SCHEME"]."://".$_SERVER["SERVER_NAME"].":".$_SERVER["SERVER_PORT"];
?>

<!-- menu -->
<!-- sidebar menu: : style can be found in sidebar.less -->
<ul class="sidebar-menu">
    <li class="header">MENU UTAMA</li>
    <li><a href="<?php echo $oyot; ?>/sites/penduduk"><i class="glyphicon glyphicon-leaf"></i> Data Penduduk</a></li>
    <li><a href="<?php echo $oyot; ?>/sites/pembayaran"><i class="glyphicon glyphicon-leaf"></i> Pembayaran</a></li>
    <li><a href="<?php echo $oyot; ?>/sites/jenis_bayar"><i class="glyphicon glyphicon-leaf"></i> Jenis Pembayaran</a></li>
    <!--
    <li class="treeview">
        <a href="#">
            <i class="glyphicon glyphicon-asterisk"></i> <span>Menu</span> <i class="glyphicon glyphicon-menu-right"></i>
        </a>
        <ul class="treeview-menu">
            <li><a href="/sites/penduduk"><i class="glyphicon glyphicon-leaf"></i> Data Penduduk</a></li>
            <li><a href="/sites/jenis_bayar"><i class="glyphicon glyphicon-leaf"></i> Jenis Pembayaran</a></li>
            <li><a href="/sites/pembayaran"><i class="glyphicon glyphicon-leaf"></i> Pembayaran</a></li>
        </ul>
    </li>
    -->

    <li class="header">PENGATURAN</li>
    <li><a href="#"><i class="glyphicon glyphicon-leaf"></i> Keluar</a></li>
</ul>
<!-- akhir menu -->
