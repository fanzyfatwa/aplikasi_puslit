<script src="<?php echo base_url();?>assets/js/jquery.js"></script>
<script src="<?php echo base_url();?>assets/js/highcharts.js"></script>
<!-- end load library -->
 
<?php
    /* Mengambil query laporan*/
    foreach($laporan as $result){
        $nama_dosen[] = $result->nama_dosen; //ambil bulan
        $artikel[] = $result->artikel; //ambil nilai
    }
    /* end mengambil query*/
     
?>
 
<!-- Load chart dengan menggunakan ID -->
<div id="laporan"></div>
<!-- END load chart -->
 
<!-- Script untuk memanggil library Highcharts -->
<script type="text/javascript">
$(function () {
    $('#laporan').highcharts({
        chart: {
            type: 'column',
            margin: 75,
            options3d: {
                enabled: false,
                alpha: 10,
                beta: 25,
                depth: 70
            }
        },
        title: {
            text: 'Grafik',
            style: {
                    fontSize: '18px',
                    fontFamily: 'Verdana, sans-serif'
            }
        },
        subtitle: {
           text: 'Laporan Artikel',
           style: {
                    fontSize: '15px',
                    fontFamily: 'Verdana, sans-serif'
            }
        },
        plotOptions: {
            column: {
                depth: 25
            }
        },
        credits: {
            enabled: false
        },
        xAxis: {
            categories:  <?php echo json_encode($nama_dosen);?>
        },
        exporting: { 
            enabled: false 
        },
        yAxis: {
            title: {
                text: 'Progres Artikel'
            },
        },
        tooltip: {
             formatter: function() {
                 return 'The value for <b>' + this.x + '</b> is <b>' + Highcharts.numberFormat(this.y,0) + '</b>, in '+ this.series.name;
             }
          },
        series: [{
            name: 'Nama Dosen',
            data: <?php echo json_encode($artikel);?>,
            shadow : true,
            dataLabels: {
                enabled: true,
                color: '#045396',
                align: 'center',
                formatter: function() {
                     return Highcharts.numberFormat(this.y, 0);
                }, // one decimal
                y: 0, // 10 pixels down from the top
                style: {
                    fontSize: '13px',
                    fontFamily: 'Verdana, sans-serif'
                }
            }
        }]
    });
});
        </script>