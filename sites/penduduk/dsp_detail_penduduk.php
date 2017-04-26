<?php
$path = $GLOBALS["SERVER"];
$p = new Penduduk();
$id = $_GET["id_penduduk"];
$data = $p->getPendudukById($id);
$pend = $data[0];
/*print_r($data);*/
?>
<div class="box">
    <div class="box-header with-border">
        <div class="box-tools pull-right">
            <button class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="glyphicon glyphicon-minus"></i></button>
        </div>
    </div>

    <h5><a href="<?php echo $path; ?>/sites/penduduk/" class="label label-primary" title="Kembali ke daftar penduduk">Kembali</a></h5>
    <div class="ibox-tools">
        <a class="collapse-link"><i class="glyphicon glyphicon-option-vertica"></i></a>
    </div>
    <table style="text-align: left;" class="table table-hover table-bordered table-condensed">
        <tbody style="border-bottom: 1px solid #e7eaec;">
           <img
                alt="image"
                class="img-responsive"
                style=" float:left; max-height: 100px; min-width: 25px; margin: 10px auto;"
                src="<?php echo $path; ?>/asset/dist/img/unknown3.jpg"/>
            <tr>
                 <td style="width: 12%;">Nama</td>
                 <td style="width: 5px;">:</td>
                 <td><?php echo $pend["nama_lengkap"]; ?></td>
            </tr>
            <tr>
                 <td style="width: 12%;">Tempat Lahir</td>
                 <td style="width: 5px;">:</td>
                 <td><?php echo $pend["tempat_lahir"]; ?></td>
            </tr>
            <tr>
                 <td style="width: 12%;">Tanggal Lahir</td>
                 <td style="width: 5px;">:</td>
                 <td><?php echo date("Y-m-d", $pend["tanggal_lahir"]); ?></td>
            </tr>
            <tr>
                 <td style="width: 15%;">Blok</td>
                 <td style="width: 5px;">:</td>
                 <td><?php echo $pend["blok"]; ?></td>
            </tr>
        </tbody>
    </table>
</div>
