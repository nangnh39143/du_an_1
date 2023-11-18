<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biểu đồ đường thống kê</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body>
    <canvas id="myChart" width="400" height="200"></canvas>

    <script>
        var jsonData = <?php echo $json_data; ?>;

        var thoi_gian = jsonData.map(function(entry) {
            return entry.time;
        });

        var du_lieu_thong_ke = jsonData.map(function(entry) {
            return entry.data;
        });

        var ctx = document.getElementById('myChart').getContext('2d');

        var myChart = new Chart(ctx, {
            type: 'line',
            data: {['Danh mục', 'Số lượng sản phẩm'],
                labels: thoi_gian,
                datasets: [{
                    <?php
            $tongdm = count($listthongke);
            $i = 1;
            foreach ($listthongke as $thongke) {
                extract($thongke);
                if ($i==$tongdm)
                    $dauphay = "";
                else
                    $dauphay = ",";
                echo "['".$thongke['tendm']."', ".$thongke['countsp']. "]" .$dauphay;
                $i+= 1;
            }
            ?>
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false
            }
        });
    </script>
</body>
</html>
