@extends('layouts.app')
@section('content')
<div class="">
  <div class="">
    <h3>Dashboard</h3>
  </div>
  <div class="content1">
    <div class="left">
      <div class="leftUp">
        <div class="dboardBox leftUpBox">
          <div class="dboardBoxUp">
            <div class="bicons"><img src="../images/homepage/bar-graph.png"></div>
            <div class="btitles">
              <h3>SCORECARD MANAGEMENT</h3>
            </div>
          </div>
          <div class="dboardBoxBottom bbLeftUp">
            <div class="tlb1 tlb">
              <div class="tlbup">
                <div class="tlbupicon"><img src="../images/homepage/profits.png"></div>
                <div class="tlbuptitle">
                  <h2>Measures</h2>
                </div>
              </div>
              <div class="tlbdown">View All Measures</div>
            </div>
            <div class="tlb2 tlb">

              <div class="tlbup">
                <div class="tlbupicon"><img src="../images/homepage/profits.png"></div>
                <div class="tlbuptitle">
                  <h2>GOALS/OBJECTIVES</h2>
                </div>

              </div>
              <div class="tlbdown">View All Goals and Objectives</div>
            </div>
          </div>
        </div>
      </div>
      <div class="leftDown">
        <div class="dboardBox leftDownBox">
          <div class="dboardBoxUp">
            <div class="bicons"><img src="../images/homepage/summary.png"></div>
            <div class="btitles">
              <h3>STAKEHOLDERS STATISTICS SUMMARY</h3>
            </div>
          </div>
          <div class="dboardBoxBottom">
            <div class="blb1">
              <div class="blb1Top">
                <div class="blb1Title">
                  Number of Stakeholders
                </div>
              </div>
              <div class="bb1Bottom">
                <div class="number">
                  0
                </div>
              </div>
            </div>
            <div class="blb2">
              <div class="blb1Top">
                <div class="blb1Title">Number of Proposals/Activites</div>
              </div>
              <div class="bb1Bottom">
                <div class="number">
                  0
                </div>
              </div>
            </div>
            <div class="blb3">
              <div class="blb1Top">
                <div class="blb1Title">Number of Units/Offices</div>
              </div>
              <div class="bb1Bottom">
                <div class="number">
                  0
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="right">
      <div class="dboardBox rightBox">
        <div class="dboardBoxUp">
          <div class="bicons"><img src="../images/homepage/bell.png"></div>
          <div class="btitles">
            <h3>NOTIFICATIONS</h3>
          </div>
        </div>
        <div class="dboardBoxBottom rightBoxBottom">
          <div class="rb1"></div>
          <div class="rb2"></div>
          <div class="rb3"></div>
          <button>View All Notifications</button>
        </div>
      </div>
    </div>
  </div>

</div>

</div>

<div class="three col">
  <div class="loader" id="loader-1"></div>
</div>

<script src="../js/loading.js "></script>


<script>
  var ctx = document.getElementById('myChart').getContext('2d');
  var myChart = new Chart(ctx, {
    type: 'bar',
    data: {
      labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
      datasets: [{
        label: '# of Votes',
        data: [12, 19, 3, 5, 2, 3],
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
        y: {
          beginAtZero: true
        }
      }
    }
  });
</script>


@endsection