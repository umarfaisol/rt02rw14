<?php
$path = $www["SERVER"];
?>

<?php
$p = new Penduduk();
$pem = new Pembayaran();
$bln= array("Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember");
$tahun = 2017;
?>

<!-- Default box -->
<div class="box">
    <div class="box-header with-border">
        <div class="box-tools pull-right">
            <button class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="glyphicon glyphicon-minus"></i></button>
        </div>
    </div>

    <?php
    $tambah = $path."/sites/pembayaran/?action=tambah&step=cari_warga&jenis=iuran";
    $tambahLain = $path."/sites/pembayaran/?action=tambah&step=cari_warga&jenis=iuranLain";
    ?>
    <!-- menu -->
    <div style="float: left; padding-left: 12px;">
        <form method="post" action="<?php echo $tambah; ?>">
            <input type="hidden" name="action" value="tambah"/>
            <button type="submit" class="btn btn-success" value="Tambah" title="Proses pembayaran pada bulan tertentu!">
                <span class="glyphicon glyphicon-plus"></span>
            </button>
        </form>
    </div>

    <div class="box-body">
        <table class="table table-bordered table-stripped table-condensed">
            <tr style="background-color: #B5B8B4;font-weight:bold;">
                <td rowspan="2" style="width: 5%; text-align: center;">NO</td>
                <td rowspan="2">NAMA</td>
                <td rowspan="2" style="width: 12%;">BLOK</td>
                <td colspan="12" style="text-align:center;">BULAN</td>
            </tr>
            <tr style="background-color: #B5B8B4;font-weight:bold;">
                <?php
                for ($i = 0; $i < count($bln); $i++) {
                ?>
                    <td style="text-align:center;"><?php echo substr($bln[$i], 0, 3); ?></td>
                <?php
                }
                ?>
            </tr>
            <!-- data pembayaran -->
            <?php
            $dataPenduduk = $p->selectAll("");
            $i = 0;
            foreach($dataPenduduk as $row) {
                $i++;
                ?>
                <tr>
                    <td><?php echo ($i + 1); ?></td>
                    <td><?php echo $row["nama_lengkap"] ?></td>
                    <td><?php echo $row["blok"] ?></td>
                    <?php
                    for ($j = 0; $j < count($bln); $j++) {
                        $stsBayar = $pem->getSudahBayarIuran($row["id_penduduk"], $tahun, $j);
                        $keterangan = "Sudah bayar iuran rutin bulan ".$bln[$j];
                        ?>
                        <td style="text-align:center;">
                            <?php
                            if ($stsBayar == true) {
                            ?>
                                <img style="cursor:pointer;" src="<?php echo $path; ?>/asset/dist/img/ok.png" title="<?php echo $keterangan; ?>"/>
                            <?php
                            }
                            else {
                            ?>
                                <!--<img src="<%= path %>/asset/dist/img/del.png"/>-->
                                -
                            <?php
                            }
                            ?>
                        </td>
                    <?php
                    }
                    ?>

                </tr>
                <?php
            }
            ?>

        </table>
    </div><!-- /.box-body -->
</div><!-- /.box -->
