<!--<h1 class="h1 text-center">売上確認</h1>-->


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






<?php
$day = $date->format('j');
$month = $date->format('n');
$year = $date->format('Y');

if ($_POST) {

    echo '<form action="shop" method="post">';
        echo '<div class="row">';
            echo '<div class="input-field col s4">';
                echo '<select class="browser-default" name="year">';
                    echo '<option value='.$_POST['year'].' selected>'.$_POST['year'].'</option>';
                echo '</select>';
                echo '</div>';
            echo '<div class="input-field col s4">';
                echo '<select class="browser-default" name="month">';
                    echo '<option value='.$_POST['month'].' selected>'.$_POST['month'].'</option>';
                    for ($month = 1; $month <= 12; $month++){
                        echo '<option value='.$month.'>'.$month.'</option>';
                    }
                echo '</select>';
            echo '</div>';
            echo '<div class="input-field col s4">';
                echo '<select class="browser-default" name="day">';
                    echo '<option value='.$_POST['day'].' selected>'.$_POST['day'].'</option>';
                    for ($day = 1; $day <= 31; $day++){
                        echo '<option value='.$day.'>'.$day.'</option>';
                    }
                echo '</select>';
            echo '</div>';
        echo '</div>';
        echo '<div class="row">
                <button class="btn">
                    表示
                </button>
              </div>';
    echo '</form>';

    echo '<div id="page1">';
    echo '<canvas id="myChart1"></canvas>';
    echo '</div>';

    echo '<div id="page2">';
    echo '<canvas id="myChart2"></canvas>';
    echo '</div>';


    if($result){

    echo '<script>';

        echo 'new Chart(document.getElementById("myChart1"), {
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
                    echo '"'.$obj['sale'],'",';
                    endforeach;
                    echo '],
                    backgroundColor: ["rgb(255, 99, 132)", "rgb(54, 162, 235)", "rgb(255, 205, 86)"]
                }]
            }
        });';

        echo 'new Chart(document.getElementById("myChart2"), {
            type: "line",
            data: {
                labels:';
                    echo '[';
                    $date->modify('-14 days');
                    for($i = 0;$i < 14; $i++){
                            $date->modify('+1 days');
                        echo '"'.$date->format('Y-m-d'),'",';
                    }
                    echo '],
                datasets: [{
                    data:';
                    echo '[';
                    $tweek = $date->modify('-14 days');
                    foreach($datesale as $ds):
                        $date = $tweek;
                        for($i = 0;$i < 14; $i++){
                            $date->modify('+1 days');
                            if ($date->format('Y-m-d') == $ds['date']) {
                                echo '"'.$ds['datesale'],'",';
                                break;
                            } else {
                                echo '"0",';
                            }
                        }
                    endforeach;
                    do {
                        echo '"0",';
                        $date->modify('+1 days');
                    } while($date <= $d);
                    echo '],
                    backgroundColor: ["rgb(255, 99, 132)", "rgb(54, 162, 235)", "rgb(255, 205, 86)"]
                }]
            }
        });
    </script>';
    } else {
        echo 'この日の売り上げはありません。';

        echo '<script>';

        echo 'new Chart(document.getElementById("myChart2"), {
            type: "line",
            data: {
                labels:';
                    echo '[';
                    $date->modify('-14 days');
                    for($i = 0;$i < 14; $i++){
                            $date->modify('+1 days');
                        echo '"'.$date->format('Y-m-d'),'",';
                    }
                    echo '],
                datasets: [{
                    data:';
                    echo '[';
                    $tweek = $date->modify('-14 days');
                    foreach($datesale as $ds):
                        $date = $tweek;
                        for($i = 0;$i < 14; $i++){
                            $date->modify('+1 days');
                            if ($date->format('Y-m-d') == $ds['date']) {
                                echo '"'.$ds['datesale'],'",';
                                break;
                            } else {
                                echo '"0",';
                            }
                        }
                    endforeach;
                    do {
                        echo '"0",';
                        $date->modify('+1 days');
                    } while($date <= $d);
                    echo '],
                    backgroundColor: ["rgb(255, 99, 132)", "rgb(54, 162, 235)", "rgb(255, 205, 86)"]
                }]
            }
        });
    </script>';
    }


} else if(!$_POST) {

    echo '<form action="shop" method="post">';
        echo '<div class="row">';
            echo '<div class="input-field col s4">';
                echo '<select class="browser-default" name="year">';
                    echo '<option value='.$year.' selected>'.$year.'</option>';
                echo '</select>';
                echo '</div>';
            echo '<div class="input-field col s4">';
                echo '<select class="browser-default" name="month">';
                    echo '<option value='.$month.' selected>'.$month.'</option>';
                    for ($month = 1; $month <= 12; $month++){
                        echo '<option value='.$month.'>'.$month.'</option>';
                    }
                echo '</select>';
            echo '</div>';
            echo '<div class="input-field col s4">';
                echo '<select class="browser-default" name="day">';
                    echo '<option value='.$day.' selected>'.$day.'</option>';
                    for ($day = 1; $day <= 31; $day++){
                        echo '<option value='.$day.'>'.$day.'</option>';
                    }
                echo '</select>';
            echo '</div>';
        echo '</div>';
        echo '<div class="row">
                <button class="btn">
                    表示
                </button>
              </div>';
    echo '</form>';

    echo '<div id="page1">';
    echo '<canvas id="myChart1"></canvas>';
    echo '</div>';

    echo '<div id="page2">';
    echo '<canvas id="myChart2"></canvas>';
    echo '</div>';

    echo '<script>';

        echo 'new Chart(document.getElementById("myChart1"), {
            type: "doughnut",
            data: {
                labels:';
                    echo '[';
                    foreach($count as $obj):
                    echo '"'.$obj['product_name'],'",';
                    endforeach;
                    echo '],
                datasets: [{
                    data:';
                    echo '[';
                    foreach($count as $obj):
                    echo '"'.$obj['sale'],'",';
                    endforeach;
                    echo '],
                    backgroundColor: ["rgb(255, 99, 132)", "rgb(54, 162, 235)", "rgb(255, 205, 86)"]
                }]
            }
        });';


    echo '</script>';
}
?>

<style>
    .tab a {
        color: rgba(238, 110, 115, 1) !important;
    }

    .tab a:hover {
        color: rgba(238, 110, 115, 0.6) !important;
    }

</style>


