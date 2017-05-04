<?php
$cari = $_POST["textCari"];
$pend = new Penduduk();
$filter = "(LOWER(nama_lengkap) LIKE '%".strtolower($cari)."%' OR nik LIKE '%".strtolower($cari)."%')";
$hasilCari = $pend->selectAll($filter);
?>
<h1 style="text-align:center;font-size:18px;">Hasil Cari</h1>
<hr/>

<div class="box-body">
    <table class="table table-bordered table-stripped table-condensed">
        <thead style="background-color: #B5B8B4;">
            <th style="width: 5%;">NO</th>
            <th>NAMA</th>
            <th style="width: 8%;">BLOK</th>
            <th style="width: 10%;">Opsi</th>
        </thead>
        <!-- data hasil cari -->
        <?php
        $i = 0;
        foreach ($hasilCari as $row) {
            $i = $i + 1;
            ?>
            <tr>
                <td><?php echo ($i); ?></td>
                <td><?php echo $row["nama_lengkap"]; ?></td>
                <td><?php echo $row["blok"]; ?></td>
                <td>
                    <?php
                    $pilih = $path."/sites/pembayaran/";
                    ?>
                    <form method="post" action="<?php echo $pilih; ?>">
                        <input type="hidden" name="action" value="tambah" />
                        <input type="hidden" name="step" value="input_bayar" />
                        <input type="hidden" name="id_penduduk" value="<?php echo $row['id_penduduk'] ?>" />
                        <button class="btn btn-primary" title="pilih warga ini!!!" type="submit">
                            <!--<span class="glyphicon glyphicon-remove"></span>-->
                            <img src="<?php echo $path; ?>/asset/dist/img/ok.png" />Pilih
                        </button>
                    </form>
                </td>
            </tr>
        <?php
        }
        ?>
    </table>
<?php
/** batal **/
$redirect = $path."/sites/pembayaran/";
?>

<div>
    <form method="post" action="<?php echo $pilih; ?>">
        <input type="hidden" name="action" value="tambah" />
        <input type="hidden" name="step" value="cari_warga" />
        <button class="btn btn-success" title="Kembali!!!" type="submit">
            <!--<span class="glyphicon glyphicon-remove"></span>-->
            <img src="<?php echo $path; ?>/asset/dist/img/ok.png" />Kembali
        </button>
    </form>
</div>
