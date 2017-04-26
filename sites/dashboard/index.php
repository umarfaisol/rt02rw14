<div class="row">
    <div class="col-md-6">

        <!-- AREA CHART -->
              <div class="box box-primary">
                <div class="box-header">
                  <h3 class="box-title">Area Chart</h3>
                </div>
                <div class="box-body chart-responsive">
                  <div class="chart" id="revenue-chart" style="height: 250px;">
                  <?php
                  $timezone = date_default_timezone_get();
                  echo "The current server timezone is: " . $timezone . "<br/>";
                  $now = new DateTime();
                  $timestring = $now->format('Y-m-d H:i:s');
                  echo $timestring;
                  echo "<br/>";
                  echo $now->getTimestamp();
                  echo "<br/>";

                  $d = new DateTime();
                  $a = $d->createFromFormat("d-m-Y", "24-07-1981");
                  echo $a->getTimestamp();

                  echo "<br/>";
                  $uuid = new GUID();
                  echo $uuid->getGUID();
                  ?>

                  </div>
                </div><!-- /.box-body -->
              </div><!-- /.box -->

              <!-- DONUT CHART -->
              <div class="box box-danger">
                <div class="box-header">
                  <h3 class="box-title">Donut Chart</h3>
                </div>
                <div class="box-body chart-responsive">
                  <div class="chart" id="sales-chart" style="height: 250px; position: relative;"></div>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
    </div>

    <div class="col-md-6">
        <!-- AREA CHART -->
        <div class="box box-primary">
            <div class="box-header">
                <h3 class="box-title">Domisili</h3>
            </div>
            <div class="box-body chart-responsive">
                <cewolf:chart id="pie3d" title="Domisili" type="pie3D" showlegend="false">
                    <cewolf:data>
                        <cewolf:producer id="pieDataDomisili" />
                    </cewolf:data>
                </cewolf:chart>
                <cewolf:img chartid="pie3d" renderer="/cewolf" width="350" height="250"   >
                    <cewolf:map tooltipgeneratorid="pieToolTipGenerator"/>
                </cewolf:img>
                <cewolf:legend id="pie3d" renderer="/cewolf" width="450" height="40" />
            </div><!-- /.box-body -->
        </div><!-- /.box -->

    </div>
</div>
