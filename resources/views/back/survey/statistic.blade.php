@extends('layouts.back')

@section('title')
Page sondage
@endsection

<div class="container-fluid">
    <div class="row" id="backSurvey">
        <div class="background shadow-sm p-3 mb-5 rounded  col-sm-4 d-flex justify-content-center align-items-center flex-column">
            @include('partials.menu')
        </div>
        <div class="col-sm-8 shadow-sm p-5 mb-5 bg-white rounded padding-2em">
            <canvas id="myChart" width="400" height="400"></canvas>
        </div>
    </div>
</div>


@section('scripts')
<script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.3/dist/Chart.min.js"></script>
<script>
    chartIt();

    function chartIt(){
        var dataexemple =  {!! json_encode($chart->dataset)!!};
        console.log(dataexemple);
        
        var ctx = document.getElementById('myChart').getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'pie',
            data: {
            labels: {!!json_encode($chart->labels)!!},
            datasets: [{
                label: '# of Votes',
                data: {!! json_encode($chart->dataset)!!},
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(255, 206, 86, 0.2)',
                        'rgba(75, 192, 192, 0.2)',
                        'rgba(153, 102, 255, 0.2)',
                        'rgba(255, 159, 64, 0.2)'
                    ],
                    borderColor: [
                        'rgba(255, 99, 132, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(75, 192, 192, 1)',
                        'rgba(153, 102, 255, 1)',
                        'rgba(255, 159, 64, 1)'
                    ],
                borderWidth: 1
             }]
            },
            options: {
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero: true
                        }
                    }]
                }
            }
        });
  }
</script>
@show
<style>

</style>