<script type="text/javascript">
var pindah = function() {
    var ktp = document.getElementById("status_ktp");
    var status_ktp = ktp.options[ktp.selectedIndex].value;

    window.location = "<?php echo $_SERVER["CONTEXT_DOCUMENT_ROOT"]; ?>/sites/penduduk/?status_ktp=" + status_ktp;
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
    $tambah = $_SERVER["CONTEXT_DOCUMENT_ROOT"]."/sites/penduduk/?action=tambah";
    ?>
    <!-- menu -->
    <div style="float: left; padding-left: 12px;">
        <a href="<?php echo tambah; ?>" class="btn btn-success" title="Tambah"><span class="glyphicon glyphicon-plus"></span></a>
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
                    ?>
                    <tr>
                        <?php
                        echo "<td>". $i . "</td>";
                        echo "<td>". $row["nik"] . "</td>";
                        echo "<td>". $row["nama_lengkap"] . "</td>";
                        echo "<td>". $row["blok"] . "</td>";
                        echo "<td>". $row["ktp"] . "</td>";
                        echo "<td>"."</td>";
                        ?>
                    </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
    </div><!-- /.box-body -->
</div><!-- /.box -->
