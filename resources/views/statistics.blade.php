@extends('admin.adminlayout')

@section('content')
    <div class="container">
        <br>
        <br>
    <h1 style="font-size: 32px; color: #333; text-align: center; margin-bottom: 20px; font-weight: bold; text-transform: uppercase;">Statistics</h1>


        <div class="row">
            <div class="col-md-6">
                <canvas id="commandsChart"></canvas>
            </div>
            <div class="col-md-6">
                <canvas id="usersChart"></canvas>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        // Retrieve the commands data passed from the controller
        const commandsData = @json($commandsData);

        // Retrieve the users data passed from the controller
        const usersData = @json($usersData);

        // Prepare the data for commands chart
        const commandsLabels = Object.keys(commandsData);
        const commandsCounts = Object.values(commandsData);

        // Prepare the data for users chart
        const usersLabels = Object.keys(usersData);
        const usersCounts = Object.values(usersData);

        // Create the commands chart
        const commandsChartCanvas = document.getElementById('commandsChart').getContext('2d');
        new Chart(commandsChartCanvas, {
            type: 'line',
            data: {
                labels: commandsLabels,
                datasets: [{
                    label: 'Commands',
                    data: commandsCounts,
                    backgroundColor: 'rgba(54, 162, 235, 0.2)',
                    borderColor: 'rgba(54, 162, 235, 1)',
                    borderWidth: 1
                }]
            },
            options: {
                responsive: true,
                scales: {
                    x: {
                        display: true,
                        title: {
                            display: true,
                            text: 'Date'
                        }
                    },
                    y: {
                        display: true,
                        title: {
                            display: true,
                            text: 'Number of Commands'
                        }
                    }
                }
            }
        });

        // Create the users chart
        const usersChartCanvas = document.getElementById('usersChart').getContext('2d');
        new Chart(usersChartCanvas, {
            type: 'bar',
            data: {
                labels: usersLabels,
                datasets: [{
                    label: 'Users',
                    data: usersCounts,
                    backgroundColor: 'rgba(255, 99, 132, 0.2)',
                    borderColor: 'rgba(255, 99, 132, 1)',
                    borderWidth: 1
                }]
            },
            options: {
                responsive: true,
                scales: {
                    x: {
                        display: true,
                        title: {
                            display: true,
                            text: 'Date'
                        }
                    },
                    y: {
                        display: true,
                        title: {
                            display: true,
                            text: 'Number of Users'
                        }
                    }
                }
            }
        });
    </script>
@endsection
