<%--
    Document   : home
    Created on : Apr 30, 2016, 10:55:37 PM
    Author     : java
--%>
<%@include file="/asset/conf/import.jsp" %>

<%@page contentType="text/html" pageEncoding="UTF-8"%>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title> | Data Jenis Bayar | Perumahan Graha Permata Residence (GPR)</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>

    <%-- include css --%>
    <%@include file="/asset/conf/css.jsp" %>

    <%-- include some js --%>
    <%@include file="/asset/conf/js.jsp" %>
  </head>
  <body class="skin-blue">
    <!-- Site wrapper -->
    <div class="wrapper">

      <header class="main-header">
          <a href="<%= path %>/" class="logo"><b>RT 002 / RW 014</b></a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation">
          <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
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

          <%-- menu --%>
          <%@include file="/asset/conf/menu.jsp" %>
        </section>
        <!-- /.sidebar -->
      </aside>

      <!-- =============================================== -->
      <%--
      Untuk membuat konten di sini
      --%>
      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1> Data Jenis Bayar </h1>

          <%-- navigasi --%>
          <ol class="breadcrumb">
            <li><a href="<%= request.getContextPath() %>/"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Jenis Bayar</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
        <%
        String action = (request.getParameter("action") == null ? "view" : request.getParameter("action"));
        String jenis = (request.getParameter("jenis") == null ? "" : request.getParameter("jenis"));
        %>
        <%-- generate isi di sini --%>

        <%
        if (action.equals("view")) {
        %>
            <%@include file="/sites/jenis_bayar/dsp_jenis_bayar.jsp" %>
        <%
        }
        else if (action.equals("tambah")) {
        %>
            <%@include file="/sites/jenis_bayar/dsp_tambah.jsp" %>
        <%
        }
        else if (action.equals("simpan")) {
            if (jenis.equals("tambah")) {
            %>
                <%@include file="/sites/jenis_bayar/action_simpan_tambah.jsp" %>
            <%
            }
        }
        else if (action.equals("hapus")) {
        %>
            <%@include file="/sites/jenis_bayar/action_hapus.jsp" %>
        <%
        }
        %>

        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->

      <%-- footer --%>
      <%@include file="/asset/conf/footer.jsp" %>
    </div><!-- ./wrapper -->
  </body>
</html>
