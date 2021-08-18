@includeIf('admin.head', ['title' => 'Dashboard'])

@includeIf('admin.navbar')

<div class="flex justify-center w-full">
    <div class="flex flex-col" style="width: 900px;">
        <canvas id="myChart"></canvas>
    </div>
</div>
<script>
    var ctx = document.getElementById('myChart');
    var myChart = new Chart(ctx, {
        type: 'doughnut',
        data: {
            labels: ['Clientes', 'Productos', 'Pedidos'],
            datasets: [{
                label: 'Cantidad',
                data: [12, 19, 3],
                backgroundColor: [
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(255, 206, 86, 0.2)',
                ],
                borderColor: [
                    'rgba(255, 99, 132, 1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)',
                ],
                borderWidth: 1
            }]
        },
        options: {
            responsive: true,
            plugins: {
                legend: {
                    position: 'top',
                },
                title: {
                    display: true,
                    text: 'Dashboard'
                }
            }
        },
    });
</script>

@includeIf('admin.footer')
