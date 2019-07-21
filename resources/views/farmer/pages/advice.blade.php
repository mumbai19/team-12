@extends('farmer.dashboard.Nav1')

@section('content')
  <!-- Essential JS UI widget -->
  <div class="wheater" style="margin-bottom:20px">
                <a class="weatherwidget-io" href="https://forecast7.com/en/19d0872d88/mumbai/" data-label_1="MUMBAI" data-label_2="WEATHER" data-theme="original" >MUMBAI WEATHER</a>
                            <script>
                            !function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src='https://weatherwidget.io/js/widget.min.js';fjs.parentNode.insertBefore(js,fjs);}}(document,'script','weatherwidget-io-js');
                            </script>
                </div>
  
  <script>
                var url = "{{url('farmer/chart')}}";
                var Years = new Array();
                var Labels = new Array();
                var Prices =new Array();
                var Speed =new Array();
                var Perf =new Array();
                
                $(document).ready(function(){
                        var pass=document.getElementById('pid').value;     
                  $.get(url, {pid:pass},function(response){
                    response.forEach(function(data){
                        var d =new Date(data.created_at);
                        console.log(d);
                      var day= d.getDate();
                      var mon=d.getMonth()+1;
                      var year=d.getFullYear();
                        Years.push(data.created_at);
                        Labels.push(day+'/'+mon+'/'+year);
                        Prices.push(data.ph);
                        Speed.push(data.o2);
                        
                        
                    }); 
                    var ctx = document.getElementById("chLine");
                    var spe = document.getElementById("sp");
                    var per = document.getElementById("per");
                    
                        var myChart = new Chart(ctx, {
                          type: 'line',
                          data: {
                              labels:Labels,
                              datasets: [{
                                  label: '02 dissolution',
                                  data: Prices,
                                  borderWidth: 1,
                                  fill: true,
                                  
                                    lineTension: 0.3,
                                    backgroundColor: "rgba(75,192,192,0.4)",
                                    borderColor: "rgba(75,192,192,1)",
                                    borderCapStyle: 'butt',
                                    borderDash: [],
                                    borderDashOffset: 0.0,
                                    borderJoinStyle: 'miter',
                                    borderWidth: 1,
                                    pointBorderColor: "rgba(75,192,192,1)",
                                    pointBackgroundColor: "#fff",
                                    pointBorderWidth: 1,
                                    pointHoverRadius: 5,
                                    pointHoverBackgroundColor: "rgba(75,192,192,1)",
                                    pointHoverBorderColor: "rgba(220,220,220,1)",
                                    pointHoverBorderWidth: 2,
                                    pointRadius: 1,
                                    pointHitRadius: 10,
                                        data: [4,5,6,7,8,4.5,5.6,6],
                                    spanGaps: false
                              }]
                          },
                          options: {
                              scales: {
                                  yAxes: [{
                                      ticks: {
                                          beginAtZero:true
                                      }
                                  }]
                              }
                          }
                      });
                
                       var myChart1 = new Chart(spe, {
                          type: 'line',
                          data: {
                              labels:Labels,
                              datasets: [{
                                  label: 'PH',
                                  data: Speed,
                                  borderWidth: 1,
                                  fill: true,
                                    lineTension: 0.3,
                                    backgroundColor: "rgba(75,192,192,0.4)",
                                    borderColor: "rgba(75,192,192,1)",
                                    borderCapStyle: 'butt',
                                    borderDash: [],
                                    borderDashOffset: 0.0,
                                    borderJoinStyle: 'miter',
                                    borderWidth: 1,
                                    pointBorderColor: "rgba(75,192,192,1)",
                                    pointBackgroundColor: "#fff",
                                    pointBorderWidth: 1,
                                    pointHoverRadius: 5,
                                    pointHoverBackgroundColor: "rgba(75,192,192,1)",
                                    pointHoverBorderColor: "rgba(220,220,220,1)",
                                    pointHoverBorderWidth: 2,
                                    pointRadius: 1,
                                    pointHitRadius: 10,
                                   data: [50, 20, 40, 31, 32, 22, 10],
                                    spanGaps: false
                              }]
                          },
                          options: {
                              scales: {
                                  yAxes: [{
                                      ticks: {
                                          beginAtZero:true
                                      }
                                  }]
                              }
                          }
                      });
                  });
                });
                       
                </script>
  <section class="mt-30px mb-30px">
                <div class="container">
        <input type="hidden" id='pid' value={{Auth::user()->id}}>
                        <div class="row">
                                <div class="col-lg-6">
                                  <div class="card line-chart-example">
                                    <div class="card-header align-items-center">
                                      <h4 class="text-center">O <sub>2</sub> dissolution Report</h4>
                                    </div>
                                    <div class="card-body">
                                      <canvas id="sp"></canvas>
                                    </div>
                                  </div>
                                </div>
                                <div class="col-lg-6">
                                  <div class="card  bar-chart-example">
                                    <div class="card-header  align-items-center">
                                      <h4 class="text-center">PH Report</h4>
                                    </div>
                                    <div class="card-body">
                                      <canvas id="chLine"></canvas>
                                    </div>
                                  </div>
                                </div>
        
                               
        
                                     
                        </div>
                        
        
                </div>
            </section>

           
        
        
        
@endsection