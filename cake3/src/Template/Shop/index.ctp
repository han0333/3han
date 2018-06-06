<h1 class="h1 text-center">売上確認</h1>



<?php
$day = $date->format('j');
$month = $date->format('n');
$year = $date->format('Y');
$date = $date->format('Y/m/d');

if ($_POST) {
    echo '<form action="shop" method="post">';
        echo '<input type="number" value='.$_POST['year'].' name="year" min=2018>年';
        echo '<input type="number" value='.$_POST['month'].' max=12 min=1 name="month">月';
        echo '<input type="number" value='.$_POST['day'].' max=31 min=1 name="day">日';
        echo '<button type="submit" class="btn-primary">確認</button>';
    echo '</form>';


    if($result){

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


    echo '<canvas id="myChart"></canvas>';
    echo '<script>';

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
