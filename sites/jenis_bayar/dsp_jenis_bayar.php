<?php
$path = $www["SERVER"];
?>

<?php
$jb = new JenisBayar();
$filter = "";
?>

<!-- Default box -->
<div class="box">
    <div class="box-header with-border">
        <div class="box-tools pull-right">
            <button class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="glyphicon glyphicon-minus"></i></button>
        </div>
    </div>

    <?php
    $tambah = $path."/sites/jenis_bayar/?action=tambah";
    ?>
    <!-- menu -->
    <div style="float: left; padding-left: 12px;">
        <form method="post" action="<?php echo $tambah; ?>">
            <input type="hidden" name="action" value="tambah"/>
            <button type="submit" class="btn btn-success" value="Tambah" title="Tambah">
                <span class="glyphicon glyphicon-plus"></span>
            </button>
        </form>
    </div>

    <div class="box-body">
        <table class="table table-bordered table-stripped table-condensed">
            <thead style="background-color: #B5B8B4;">
                <th style="width: 5%;">NO</th>
                <th>Nama Jenis</th>
                <th style="width: 10%;">Opsi</th>
            </thead>
            <!-- data penduduk -->
            <tbody>
                <?php
                $rs = $jb->selectAll($filter);
                $i = 0;
                foreach($rs as $row) {
                    $i++;
                    ?>
                    <tr>
                        <?php
                        echo "<td>". $i . "</td>";
                        echo "<td>". $row["nama_jenis"] . "</td>";
                        echo "<td>";

                        $remove = $path."/sites/jenis_bayar/";
                        ?>
                        <form method="POST" action="<?php echo $remove; ?>">
                            <input type="hidden" name="action" value="hapus" />
                            <input type="hidden" name="id_jenis_bayar" value="<?php echo $row['id_jenis_bayar']; ?>" />
                            <button type="submit" class="btn btn-danger" title="Hapus!!!">
                                <span class="glyphicon glyphicon-remove"></span>
                            </button>
                        </form>
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
