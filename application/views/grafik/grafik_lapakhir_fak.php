<head>
<title>Grafik Dosen yang Sudah Laporan Akhir per-Fakultas</title>
<link href="<?php echo base_url() ?>assets/images/uin.png" rel="shortcut icon">
    <?php
        foreach($data as $data){
            $namafakultas[] = $data->namafakultas;
            $jumlahdosen[] = (float) $data->jumlahdosen;
        }
    ?>
</head>
<body>
 
    <canvas id="canvas" width="900" height="280"></canvas>
    <script type="text/javascript" src="<?php echo base_url().'assets/chartjs/chart.min.js'?>"></script>
    <!--Load chart js-->
    <script>
    var ctx = document.getElementById("canvas");
    var myChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: <?php echo json_encode($namafakultas); ?>,
            datasets: [{
                label: '',
                data: <?php echo json_encode($jumlahdosen); ?>,
                backgroundColor: [
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(255, 206, 86, 0.2)',
                    'rgba(75, 192, 192, 0.2)',
                    'rgba(153, 102, 255, 0.2)',
                    'rgba(255, 159, 64, 0.2)',
                    'rgba(121, 142, 24, 0.2)',
                    'rgba(22, 12, 64, 0.2)'
                ],
                borderColor: [
                    'rgba(255,99,132,1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)',
                    'rgba(75, 192, 192, 1)',
                    'rgba(153, 102, 255, 1)',
                    'rgba(255, 159, 64, 1)',
                    'rgba(121, 142, 24, 1)',
                    'rgba(22, 12, 64, 1)'
                ],
                borderWidth: 1
            }]
        },
        options: {
            legend:{
                display: false
                },
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero:true
                    }
                }]
            }
        }
    });
</script>
</body>
</html>