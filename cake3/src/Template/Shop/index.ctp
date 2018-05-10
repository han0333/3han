<h1 class="h1 text-center">売上確認</h1>
<form action="user-bento-comp.html" method="post">
    <input type="number" value="2018">年
    <input type="number" value="5">月
    <input type="number" value="6">日
    <button type="submit" class="btn-primary">確認</button>

</form>

<canvas id="myChart"></canvas>
<script>
        new Chart(document.getElementById("myChart"), {
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

</script>
