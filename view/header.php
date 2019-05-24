<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="">
    <title>Graficas</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,400italic" rel="stylesheet">
    <link href="assets/css/toolkit-inverse.css" rel="stylesheet">
    <link href="assets/css/application.css" rel="stylesheet">

    <style>
        /* note: this is a hack for ios iframe for bootstrap themes shopify page */
        /* this chunk of css is not part of the toolkit :) */
        
        body {
            width: 1px;
            min-width: 100%;
            *width: 100%;
        }
    </style>
</head>

<body>
    <div class="bw">
        <div class="dh">
            <div class="et brf">
                <div class="bqn">
                    <div class="bqo">
                        <h6 class="bqq">Dashboards</h6>
                        <h2 class="bqp">Visión general</h2>
                    </div>
                    <div class="on bqr">
                        <div class="axm bpy">
                            <input type="text" value="01/01/15 - 01/08/15" class="form-control" data-provide="datepicker">
                        </div>
                    </div>
                </div>
                <hr class="aez">
                <div class="dh avv afn">
                    <div class="eo afk amd">
                        <div class="ayq ahn">
                            <canvas class="bps" width="200" height="200" data-chart="doughnut" data-dataset="[230, 130]" data-dataset-options="{ borderColor: '#252830', backgroundColor: ['#1ca8dd', '#1bc98e'] }" data-labels="['Returning', 'New']">
                            </canvas>
                        </div>
                        <strong class="awy">Traffic</strong>
                        <h4>Altos vs Bajos</h4>
                    </div>
                    <div class="eq fp afd amk asi">
                        <div class="brh bpn">
                            <div class="ago">
                                <span class="bpi">Page views</span>
                                <h2 class="bph">1,293
                                  <small class="bpj bpk">5%</small>
                                </h2>
                                <hr class="bpr aei">
                            </div>
                            <canvas id="sparkline1" width="378" height="94" class="bri" data-chart="spark-line" data-dataset="[[28,68,41,43,96,45,100]]" data-labels="['a','b','c','d','e','f','g']" style="width: 189px; height: 47px;">
                            </canvas>
                        </div>
                    </div>
                    <div class="eq fp afd amk asi">
                        <div class="brh bpn">
                            <div class="ago">
                                <span class="bpi">Page views</span>
                                <h2 class="bph">1,293
                                  <small class="bpj bpk">5%</small>
                                </h2>
                                <hr class="bpr aei">
                            </div>
                            <canvas id="sparkline1" width="378" height="94" class="bri" data-chart="spark-line" data-dataset="[[28,68,41,43,96,45,100]]" data-labels="['a','b','c','d','e','f','g']" style="width: 189px; height: 47px;">
                            </canvas>
                        </div>
                    </div>
                    

                    
                    <!--<div class="eo afk amd">
                        <div class="ayq ahn">
                            <canvas class="bps" width="200" height="200" data-chart="doughnut" data-dataset="[330,30]" data-dataset-options="{ borderColor: '#252830', backgroundColor: ['#1ca8dd', '#1bc98e'] }" data-labels="['Returning', 'New']">
                            </canvas>
                        </div>
                        <strong class="awy">Revenue</strong>
                        <h4>New vs Recurring</h4>
                    </div>
                    <div class="eo afk amd">
                        <div class="ayq ahn">
                            <canvas class="bps" width="200" height="200" data-chart="doughnut" data-dataset="[100,260]" data-dataset-options="{ borderColor: '#252830', backgroundColor: ['#1ca8dd', '#1bc98e'] }" data-labels="['Referrals', 'Direct']">
                            </canvas>
                        </div>
                        <strong class="awy">Traffic</strong>
                        <h4>Direct vs Referrals</h4>
                    </div> !-->
                </div>

                <!--<div class="bpu afn afd">
                    <h3 class="bpv bpw">Quick stats</h3>
                </div>

                <div class="dh brg">
                    <div class="eq fp afd amk asi">
                        <div class="brh bpn">
                            <div class="ago">
                                <span class="bpi">Page views</span>
                                <h2 class="bph">1,293
                                  <small class="bpj bpk">5%</small>
                                </h2>
                                <hr class="bpr aei">
                            </div>
                            <canvas id="sparkline1" width="378" height="94" class="bri" data-chart="spark-line" data-dataset="[[28,68,41,43,96,45,100]]" data-labels="['a','b','c','d','e','f','g']" style="width: 189px; height: 47px;">
                            </canvas>
                        </div>
                    </div>
                    <div class="eq fp afd amk asi">
                        <div class="brh bpq">
                            <div class="ago">
                                <span class="bpi">Downloads</span>
                                <h2 class="bph">758
                                    <small class="bpj bpl">1.3%</small>
                                </h2>
                                <hr class="bpr aei">
                            </div>
                            <canvas id="sparkline1" width="378" height="94" class="bri" data-chart="spark-line" data-dataset="[[4,34,64,27,96,50,80]]" data-labels="['a', 'b','c','d','e','f','g']" style="width: 189px; height: 47px;"></canvas>
                        </div>
                    </div>
                    <div class="eq fp afd amk asi">
                        <div class="brh bpo">
                            <div class="ago">
                                <span class="bpi">Sign-ups</span>
                                <h2 class="bph"> 1,293
                                    <small class="bpj bpk">6.75%</small>
                                </h2>
                                <hr class="bpr aei">
                            </div>
                            <canvas id="sparkline1" width="378" height="94" class="bri" data-chart="spark-line" data-dataset="[[12,38,32,60,36,54,68]]" data-labels="['a', 'b','c','d','e','f','g']" style="width: 189px; height: 47px;"></canvas>
                        </div>
                    </div>
                    <div class="eq fp afd amk asi">
                        <div class="brh bpp">
                            <div class="ago">
                                <span class="bpi">Downloads</span>
                                <h2 class="bph">758
                                    <small class="bpj bpl">1.3%</small>
                                </h2>
                                <hr class="bpr aei">
                            </div>
                            <canvas id="sparkline1" width="378" height="94" class="bri" data-chart="spark-line" data-dataset="[[43,48,52,58,50,95,100]]" data-labels="['a', 'b','c','d','e','f','g']" style="width: 189px; height: 47px;"></canvas>
                        </div>
                    </div>
                </div>!-->
            </div>
        </div>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/chart.js"></script>
    <script src="assets/js/tablesorter.min.js"></script>
    <script src="assets/js/toolkit.js"></script>
    <script src="assets/js/application.js"></script>
    <script>
        // execute/clear BS loaders for docs
        $(function() {
            while (window.BS && window.BS.loader && window.BS.loader.length) {
                (window.BS.loader.pop())()
            }
        })
    </script>
</body>

</html>