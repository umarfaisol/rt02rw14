<?php
$pend = new Penduduk();
$jb = new JenisBayar();
$id_penduduk = $_POST["id_penduduk"];
$hasilCari = $pend->getPendudukById($id_penduduk);
/*print_r($hasilCari);*/
$obj = $hasilCari[0];
$bln = array("Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember");
?>
<form role="form" method="post" action="<?php echo $path; ?>/sites/pembayaran/">
    <input type="hidden" name="action" value="tambah" />
    <input type="hidden" name="step" value="simpan" />
    <input type="hidden" name="id_penduduk" value="<?php echo $id_penduduk; ?>" />

    <div class="box-body">
        <label>Input Data Pembayaran</label><br/>
        <div class="form-group">
            <label for="nama_lengkap">Nama</label>
            <input type="text" class="form-control" readonly="readonly" name="nama_lengkap" placeholder="Nama" style="width: 300px;" value="<?php echo $obj['nama_lengkap']; ?>" />
        </div>
        <div class="form-group">
            <label for="tahun">Tahun</label>
            <input type="text" class="form-control" name="tahun" readonly="readonly" placeholder="Tahun" style="width: 80px;" value="2017" />
        </div>
        <div class="form-group">
            <label for="bulan">Bulan</label>
            <select class="form-control" id="bulan" name="bulan" style="width: 180px;">
                <!--
                <option value="0"<%= (status_ktp.equals("0")?" selected=\"selected\"":"") %>>Domisili</option>
                -->
                <?php
                for ($i = 0; $i < count($bln); $i++) {
                ?>
                    <option value="<?php echo $i; ?>"><?php echo $bln[$i]; ?></option>
                <?php
                }
                ?>
            </select>
        </div>
        <div class="form-group">
            <label for="nominal">Nominal</label>
            <input type="text" class="form-control" name="nominal" placeholder="Nominal" style="width: 120px;"/>
        </div>
        <div class="form-group">
            <label for="id_jenis_bayar">Jenis Pembayaran</label>
            <?php
            $dataBayar = $jb->selectAll("");
            ?>

            <select class="form-control" id="id_jenis_bayar" name="id_jenis_bayar" style="width: 220px;">
            <?php
            for ($i = 0; $i < count($dataBayar); $i++) {
                $o = $dataBayar[$i];
                ?>
                <option value="<?php echo $o['id_jenis_bayar']; ?>"><?php echo $o['nama_jenis']; ?></option>
            <?php
            }
            ?>
            </select>
        </div>
        <?php
        /** batal **/
        $redirect = $path."/sites/pembayaran/";
        ?>

        <a href="<?php echo $redirect; ?>" class="btn btn-warning">Batal</a>
        <input type="submit" class="btn btn-primary" value="Simpan" />
    </div><!-- /.box-body -->
</form>
<script type="text/javascript">
$(".datepicker").datepicker({
    format: "dd/mm/yyyy"
});
</script>
