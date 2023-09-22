<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <title>Document</title>
</head>

<body>
    <canvas id="myChart"></canvas>

    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4="
        crossorigin="anonymous"></script>


    <script>
        $(document).ready(function() {
            const ctx = document.getElementById('myChart');

            const chart = new Chart(ctx, {
                type: 'line',
                data: {
                    labels: ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli'],
                    datasets: [{
                        label: 'Data Penjualan',
                        data: [],
                        borderWidth: 1
                    }]
                },
                options: {
                    scales: {
                        y: {
                            beginAtZero: true
                        }
                    }
                }
            });

            $.ajax({
                type: "get",
                url: "{{ url('api/penjualan') }}",
                dataType: "JSON",
                success: function(response) {
                    console.log(response);
                    const dataPenjualan = response.data;

                    const totalPenghasilanPerBulan = dataPenjualan.map(item => item.total_penghasilan);

                    chart.data.datasets[0].data = totalPenghasilanPerBulan;

                    chart.update();
                }
            });
        });
    </script>
</body>

</html>
