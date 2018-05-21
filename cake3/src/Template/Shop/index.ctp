<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.1.4/Chart.min.js"></script>

<div class="nav-content">
      <ul class="tabs tabs-transparent">
        <li class="tab"><a class="active" href="#page1">弁当別売上</a></li>
        <li class="tab"><a  href="#page2">売上推移</a></li>
      </ul>
</div>

<form action="" method="post">
    <div class="row">
        <div class="input-field col s4">
          <input id="first_name" type="number" class="validate" value="2018">
          <label for="first_name">年</label>
        </div>
        <div class="input-field col s4">
          <input id="last_name" type="number" class="validate" value="05">
          <label for="last_name">月</label>
        </div>
        <div class="input-field col s4">
          <input id="last_name" type="number" class="validate" value="18">
          <label for="last_name">日</label>
        </div>
      </div>
      <div class="row">
      <button class="btn">
      全期間表示
      </button>
      <button class="btn">
      指定期間で表示
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
    .tab a{
        color:rgba(238,110,115,1)!important;
    }
    .tab a:hover{
        color:rgba(238,110,115,0.6)!important;
    }
</style>
