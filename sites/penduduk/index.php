<!--
    Document   : home
    Created on : Apr 30, 2016, 10:55:37 PM
    Author     : java
-->
<?php
include("../../asset/conf/import.php");
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Perumahan Graha Permata Residence (GPR) | Data Penduduk</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>

    <!-- include css -->
    <?php
    include($GLOBALS["ROOT"]."/asset/conf/css.php");
    ?>

    <!-- include some js -->
    <?php
    include($GLOBALS["ROOT"]."/asset/conf/js.php");
    ?>
  </head>
  <body class="skin-blue">
    <!-- Site wrapper -->
    <div class="wrapper">

      <header class="main-header">
          <a href="/" class="logo"><b>RT 002 / RW 014</b></a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation">
          <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="glyphicon glyphicon-leaf"></span>
            <!--
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            -->
          </a>


          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
                <a class="logo" style="width: 100%;">Perumahan Graha Permata Residence (GPR) - Pakisjajar</a>
            </ul>
          </div>
        </nav>
      </header>

      <!-- =============================================== -->

      <!-- Left side column. contains the sidebar -->
      <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">

          <!-- menu -->
          <?php
          include($GLOBALS["ROOT"]."/asset/conf/menu.php");
          ?>
        </section>
        <!-- /.sidebar -->
      </aside>

      <!-- =============================================== -->
      <!--
      Untuk membuat konten di sini
      -->
      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1> Data Penduduk </h1>

          <!-- navigasi -->
          <ol class="breadcrumb">
            <li><a href="/"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Penduduk</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
        <?php
        $action = (is_null($_GET["action"]) ? "view" : $_GET["action"] );
        ?>
        <!-- generate isi di sini -->

        <?php
        if ($action == "view") {
            include($GLOBALS["ROOT"]."/sites/penduduk/dsp_penduduk.php");
        }
        else if ($action == "tambah") {
            include($GLOBALS["ROOT"]."/sites/penduduk/dsp_tambah.php");
        }
        else if ($action == "simpan") {
            include($GLOBALS["ROOT"]."/sites/penduduk/action_simpan_tambah.php");
        }
        else if ($action == "detail") {
            include($GLOBALS["ROOT"]."/sites/penduduk/dsp_detail_penduduk.php");
        }
        else if ($action == "hapus") {
            include($GLOBALS["ROOT"]."/sites/penduduk/action_hapus.php");
        }
        ?>

        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->

      <!-- footer -->
      <?php
      include($GLOBALS["ROOT"]."/asset/conf/footer.php");
      ?>
    </div><!-- ./wrapper -->
  </body>
</html>
