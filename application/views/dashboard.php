<div class="breadcrumbs">
    <div class="col-sm-4">
        <div class="page-header float-left">
            <div class="page-title">
                <h1>Dashboard</h1>
            </div>
        </div>
    </div>
    <div class="col-sm-8">
        <div class="page-header float-right">
            <div class="page-title">
                <ol class="breadcrumb text-right">
                    <li><a href="#">Dashboard</a></li>
                    <li><a href="#">Data Korban</a></li>
                    <!---  <li class="active">Data table</li>-->
                </ol>
            </div>
        </div>
    </div>
</div>

<div class="content mt-3">
    <div class="animated fadeIn">
        <div class="row">

            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <strong class="card-title">Data Korban Lantai 4</strong>
                    </div>
                    <div class="card-body">
                        <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>Nama</th>
                                    <th>Divisi</th>
                                    <th>Posisi x</th>
                                    <th>Posisi y</th>
                                    <th>Lantai</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $jumlah=0;
                                foreach ($data_korban->result_array() as $key) {
                                    ?>
                                <tr>
                                    <td><?= $key['nama'];?></td>
                                    <td><?= $key['Divisi'];?></td>
                                    <td><?= $key['xt'];?></td>
                                    <td><?= $key['yt'];?></td>
                                    <td><?= $key['lantai'];?></td>
                                </tr>
                                <?php
                                $jumlah+=1;
                                        }
                                        ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>


        </div>
        <p>Jumlah korban: <b><?= $jumlah; ?></b></p>
    </div><!-- .animated -->
</div><!-- .content -->

<div class="content mt-3">
    <div class="animated fadeIn">
        <div class="row">

            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <strong class="card-title">Mapping</strong>
                    </div>
                    <div class="card-body">
                        <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
                        <script type="text/javascript">
                        google.charts.load('current', {
                            'packages': ['corechart']
                        });

                        google.charts.setOnLoadCallback(drawSeriesChart);

                        function drawSeriesChart() {

                            $.ajax({
                                url: "<?= base_url() ?>/data_korban?lantai=lt4",
                                dataType: "json",
                            }).done(function(jsonData) {
                                var data = new google.visualization.DataTable();
                                data.addColumn('string', 'nama');
                                data.addColumn('number', 'xt');
                                data.addColumn('number', 'yt');
                                data.addColumn('string', 'pekerja');

                                jsonData.forEach(function(row) {
                                    data.addRow([
                                        row.nama + ' (' + row.status + ')',
                                        parseFloat(row.xt),
                                        parseFloat(row.yt),
                                        row.pekerja
                                    ]);
                                });

                                var options = {
                                    title: 'Correlation between life expectancy, fertility rate ' +
                                        'and population of some world countries (2010)',
                                    hAxis: {
                                        title: 'Life Expectancy'
                                    },
                                    vAxis: {
                                        title: 'Fertility Rate'
                                    },
                                    bubble: {
                                        textStyle: {
                                            fontSize: 11
                                        }
                                    }
                                };

                                var chart = new google.visualization.BubbleChart(document.getElementById(
                                    'series_chart_div'));
                                chart.draw(data, options);




                            }).fail(function(jq, text, err) {
                                console.log(text + ' - ' + err);
                            })

                        }
                        </script>

                        <div id="series_chart_div" style="width: 900px; height: 500px;"></div>
                        <button type="button" class="btn btn-outline-primary">Show Map</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>




</div><!-- /#right-panel -->

<!-- Right Panel -->