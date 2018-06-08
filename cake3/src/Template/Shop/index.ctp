<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.1.4/Chart.min.js"></script>

<div class="nav-content">
    <ul class="tabs tabs-transparent">
        <li class="tab">
            <a class="active" href="#page1">弁当別売上</a>
        </li>
        <li class="tab">
            <a href="#page2">売上推移</a>
        </li>
    </ul>
</div>

<form action="" method="post">
    <div class="row">
        <div class="input-field col s4">
            <select class="browser-default">
                <option value="" disabled selected>年度を指定してください。</option>
                <option value="1">全期間</option>
                <option value="1">2018</option>
                <option value="1">2017</option>
            </select>
        </div>
        <div class="input-field col s4">
            <select class="browser-default">
                <option value="" disabled selected>月を指定してください。</option>
                <option value="1">全期間</option>
                <option value="1">１月</option>
                <option value="1">２月</option>
            </select>
        </div>
        <div class="input-field col s4">
            <select class="browser-default">
                <option value="" disabled selected>日を指定してください。</option>
                <option value="1">全期間</option>
                <option value="1">１日</option>
                <option value="1">２日</option>
            </select>
        </div>
    </div>
    <div class="row">
        <button class="btn">
            表示
        </button>
    </div>
</form>

<div id="page1">
    <canvas id="myChart1"></canvas>
</div>

<div id="page2">
    <canvas id="myChart2"></canvas>
</div>


<script>
    new Chart(document.getElementById("myChart1"), {
        type: "doughnut",
        data: {
            labels: ["ハンバーグ弁当", "カツ丼", "牛丼"],
            datasets: [{
                data: [300,
                    50, 100
                ],
                backgroundColor: ["rgb(255, 99, 132)", "rgb(54, 162, 235)", "rgb(255, 205, 86)"]
            }]
        }
    });

<<<<<<< HEAD
    echo '<canvas id="myChart"></canvas>';
    echo '<script>';

        echo 'new Chart(document.getElementById("myChart"), {
            type: "doughnut",
            data: {
                labels:';
                    echo '[';
                    foreach($result as $obj):
                    echo '"'.$obj['product_name'],'",';
                    endforeach;
                    echo '],
                datasets: [{
                    data:';
                    echo '[';
                    foreach($result as $obj):
                    echo '"'.$obj['price'] * $obj['number'],'",';
                    endforeach;
                    echo '],
                    backgroundColor: ["rgb(255, 99, 132)", "rgb(54, 162, 235)", "rgb(255, 205, 86)"]
                }]
            }
        });
    </script>';
    }

} else {

    echo '<form action="shop" method="post">';
        echo '<input type="number" value='.$year.' name="year">年';
        echo '<input type="number" value='.$month.' max=12 min=1 name="month">月';
        echo '<input type="number" value='.$day.' max=31 min=1 name="day">日';
        echo '<button type="submit" class="btn-primary">確認</button>';
    echo '</form>';
=======
    new Chart(document.getElementById("myChart2"), {
        type: "line",
        data: {
            labels: ["ハンバーグ弁当", "カツ丼", "牛丼"],
            datasets: [{
                data: [300,
                    50, 100
                ],
                backgroundColor: ["rgb(255, 99, 132)", "rgb(54, 162, 235)", "rgb(255, 205, 86)"]
            }]
        }
    });

</script>


<style>
    .tab a {
        color: rgba(238, 110, 115, 1) !important;
    }
>>>>>>> 17fb17aada2ca580ae1096baceae0329aecf20c9

    .tab a:hover {
        color: rgba(238, 110, 115, 0.6) !important;
    }

</style>

<<<<<<< HEAD
        echo 'new Chart(document.getElementById("myChart"), {
            type: "doughnut",
            data: {
                labels:';
                    echo '[';
                    foreach($order as $obj):
                    echo '"'.$obj->product->product_name,'",';
                    endforeach;
                    echo '],
                datasets: [{
                    data:';
                    echo '[';
                    foreach($order as $obj):
                    echo '"'.$obj->product->price * $obj->number,'",';
                    endforeach;
                    echo '],
                    backgroundColor: ["rgb(255, 99, 132)", "rgb(54, 162, 235)", "rgb(255, 205, 86)"]
                }]
            }
        });
    </script>';
}
?>

<!--<canvas id="myChart"></canvas>
<script>

        new Chart(document.getElementById("myChart"), {
            type: "doughnut",
            data: {
                labels: <?php
                    echo '[';
                    foreach($order as $obj):
                    echo '"'.$obj->product->product_name,'",';
                    endforeach;
                    echo ']'?>,
                datasets: [{
                    data: <?php
                    echo '[';
                    foreach($order as $obj):
                    echo '"'.$obj->product->price * $obj->number,'",';
                    endforeach;
                    echo ']'?>,
                    backgroundColor: ["rgb(255, 99, 132)", "rgb(54, 162, 235)", "rgb(255, 205, 86)"]
                }]
            }
        });
}
</script>-->
=======
>>>>>>> 17fb17aada2ca580ae1096baceae0329aecf20c9
