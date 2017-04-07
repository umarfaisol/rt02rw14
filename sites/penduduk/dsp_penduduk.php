<?php
$path = $_SERVER["REQUEST_SCHEME"]."://".$_SERVER["SERVER_NAME"].":".$_SERVER["SERVER_PORT"];
?>

<script type="text/javascript">
var pindah = function() {
    var ktp = document.getElementById("status_ktp");
    var status_ktp = ktp.options[ktp.selectedIndex].value;

    window.location = "<?php echo $path; ?>/sites/penduduk/?status_ktp=" + status_ktp;
};

var konfirmHapus = function(url) {
    Ext.Msg.show({
        title: "Konfirmasi?",
        msg: "Penghapusan data penduduk otomatis menghapus semua. Anda yakin ingin menghapus?",
        buttons: Ext.Msg.YESNO,
        fn: function(buttonId) {
            if (buttonId == "yes") {
                window.location = url;
            }
        },
        animEl: 'elId',
        icon: Ext.MessageBox.QUESTION
    });
};
</script>
<?php
$pend = new Penduduk();
$status_ktp = $_GET["status_ktp"];
if ($status_ktp == "") {
    $status_ktp = "2";
}
?>

<!-- Default box -->
<div class="box">
    <div class="box-header with-border">
        <div class="box-tools pull-right">
            <button class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="glyphicon glyphicon-minus"></i></button>
        </div>
    </div>

    <?php
    $tambah = $path."/sites/penduduk/?action=tambah";
    ?>
    <!-- menu -->
    <div style="float: left; padding-left: 12px;">
        <a href="<?php echo $tambah; ?>" class="btn btn-success" title="Tambah"><span class="glyphicon glyphicon-plus"></span></a>
    </div>

    <div style="float: right; padding-right: 12px;">
        <select class="form-control" id="status_ktp" name="status_ktp" style="width:130px;" onchange="pindah();">
            <option value="0"<?php echo($status_ktp == "0" ? " selected=\"selected\"":""); ?>>Domisili</option>
            <option value="1"<?php echo($status_ktp == "1" ? " selected=\"selected\"":""); ?>>KTP GPR</option>
            <option value="2"<?php echo($status_ktp == "2" ? " selected=\"selected\"":""); ?>>Semua</option>
        </select>
    </div>

    <div class="box-body">
        <table class="table table-bordered table-stripped table-condensed">
            <thead style="background-color: #B5B8B4;">
                <th style="width: 5%;">NO</th>
                <th>NIK</th>
                <th style="width: 35%;">Nama Lengkap</th>
                <th style="width: 15%;">Blok</th>
                <th style="width: 10%;">KTP</th>
                <th style="width: 10%;">Opsi</th>
            </thead>
            <!-- data penduduk -->
            <tbody>
                <?php
                $rs = $pend->selectAll();
                $i = 0;
                foreach($rs as $row) {
                    $i++;
                    if ($row["status_ktp"] == "0") {
                        $displayStatusKtp = "<span class='label label-warning'><span class='glyphicon glyphicon-remove'></span> Domisili</span>";
                    }
                    else {
                        $displayStatusKtp = "<span class='label label-success'><span class='glyphicon glyphicon-ok'></span> KTP GPR</span>";
                    }

                    ?>
                    <tr>
                        <?php
                        echo "<td>". $i . "</td>";
                        echo "<td>". $row["nik"] . "</td>";
                        echo "<td>". $row["nama_lengkap"] . "</td>";
                        echo "<td>". $row["blok"] . "</td>";
                        echo "<td>". $displayStatusKtp . "</td>";
                        echo "<td>";

                        $act = $path."/sites/penduduk/?action=detail&id_penduduk=".$row["id_penduduk"];
                        $remove = $path."/sites/penduduk/?action=hapus&id_penduduk=".$row["id_penduduk"];
                        ?>

                        <a class="btn btn-primary" href="<?php echo $act; ?>" title="Lihat detail"><span class="glyphicon glyphicon-tasks"></span></a>
                        <a class="btn btn-danger" href="#" onclick="konfirmHapus('<?php echo $remove ?>')" title="hapus data penduduk!!!"><span class="glyphicon glyphicon-remove"></span></a>

                        <?php
                        echo "</td>";
                        ?>
                    </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
    </div><!-- /.box-body -->
</div><!-- /.box -->
