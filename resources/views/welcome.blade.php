<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.4.0/chart.min.js"></script>
        <title>Laravel</title>

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    </head>
    <body>
    @extends('layouts.app')
    @section('content')
    <div class="container">
        <div class="flex-center position-ref full-height">
            <div class="content">
<div class="container mb-4">
  <div class="row">
    <div class="col-sm">
    </div>
    <div class="col-sm">
    </div>
    <div class="col-sm">
        <select class = "form-select" aria-label = "Default select example" id = "select_box">
            <option value="2021">2021</option>
            <option value="2020">2020</option>
            <option value="2019">2019</option>
            <option value="2018">2018</option>
            <option value="2017">2017</option>
            <option value="2016">2016</option>
        </select>
    </div>
    <div class="col-sm">
    </div>
    <div class="col-sm">
    </div>
  </div>
</div>
<div class="container">
  <div class="row">
    <div class="col-sm">
        <p class="text-center h1">勝ち点推移</p>
        <canvas id="myChart" width="100" height="100"></canvas>
    </div>
    <div class="col-sm">
        <p class="text-center h1">平均勝ち点推移</p>
        <canvas id="avePointsChart" width="100" height="100"></canvas>
    </div>
  </div>
</div>
<script>
window.onload = function () {
var select = document.getElementById('select_box');
console.log(select.value);
var ctx = document.getElementById('myChart').getContext('2d');
var myChart = new Chart(ctx, {
    type: 'line',
    data: {
        labels: ['1', '2', '3', '4', '5', '6','7', '8', '9', '10', '11', '12'],
        label: '消化試合数',
        datasets: [{
            label: '名古屋グランパス',
            data: [3, 6, 9, 12, 15, 18, 19,20,23,26,26,29],
            fill: false,
            borderColor: 'rgb(218, 54, 27)',
            tension: 0.1
        },
        {
            label: '川崎フロンターレ',
            data: [3, 6, 9, 12, 15, 16, 19,23,26,29,32,33],
            fill: false,
            borderColor: 'rgb(53, 160, 237)',
            tension: 0.1,
        },
        {
            label: 'ガンバ大阪',
            data: [0, 1, 2, 2, 5, 5, 5,6,6,6,6,6],
            fill: false,
            borderColor: 'rgb(9, 63, 166)',
            tension: 0.1,
        },
        ],
    },
    options: {
        scales: {
            xAxes: [                           // Ｘ軸設定
                    {
                        scaleLabel: {                 // 軸ラベル
                            display: true,                // 表示設定
                            labelString: '消化試合数',    // ラベル
                        },
                    }
                ],
                yAxes: [                           // Ｙ軸設定
                    {
                        scaleLabel: {                  // 軸ラベル
                            display: true,                 // 表示の有無
                            labelString: '勝ち点',     // ラベル
                        },
                    }
                ]
        },
        legend: {
            display: true,
            position: 'bottom',
            labels: {
                boxWidth: 15,
                boxHeight: 35,
                color: 'red',
            }
        }
    }
});
var ctx = document.getElementById('avePointsChart').getContext('2d');
var avePointsChart = new Chart(ctx, {
    type: 'line',
    data: {
        labels: ['1節', '2節', '3節', '4節', '5節', '6節','7節', '8節', '9節', '10節', '11節', '12節'],
        datasets: [
        {
            label: '名古屋グランパス',
            data: [3, 3, 3, 3, 3, 3, 2.714,2.500,2.555,2.600,2.364,2.417],
            fill: false,
            borderColor: 'rgb(218, 54, 27)',
            tension: 0.1,
            borderDash: [5, 5], // ダッシュ線のスタイル。[5, 3]など。
        }
        ],
    },
    options: {
        scales: {
            yAxes: [                           // Ｙ軸設定
                    {
                        gridLines: {                   // 補助線
                            zeroLineColor: "black"         // y=0（Ｘ軸の色）
                        },
                        ticks: {                             // 目盛り
                            min: 0,                          // 最小値
                            max: 3,                          // 最大値
                            stepSize: 0.5,                   // 軸間隔
                        }
                    }
                ]
        },
        legend: {
            display: true,
            position: 'bottom',
            labels: {
                boxWidth: 15,
                boxHeight: 35,
                color: 'red',
            }
        }
    }
});
}
</script>
<div class="container">
  <div class="row">
    <div class="col-sm">
    </div>
    <div class="col-sm">
        <select class="form-select" aria-label="Default select example">
            <option value="1">名古屋グランパス</option>
            <option value="2">川崎フロンターレ</option>
            <option value="3">ガンバ大阪</option>
        </select>
    </div>
    <div class="col-sm">
    </div>
  </div>
</div>
<div class="container mt-4">
  <div class="row">
    <div class="col-sm">
      One of three columns
    </div>
  </div>
</div>
                <div>
                    <a href="{{ url('/index') }}"> 次へ </a>
                </div>
            </div>
        </div>
    </div>
    @endsection
    </body>
</html>
