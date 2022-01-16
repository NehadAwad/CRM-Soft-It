@extends('user.main')
@section('content')
    <main class="app-content">
        <!-- Breadcamps -->
{{--        @include('user.layout.breadcamp', ['heading'=>'Dashboard', 'link' => route('user.dashboard'), 'icon' => 'fa fa-dashboard'])--}}

        <div class="row">
            <div class="col-md-6 col-lg-3">
                <div class="widget-small primary coloured-icon"><i class="icon fa fa-users fa-3x"></i>
                    <div class="info">
                        <h4>Buyers</h4>
                        <p><b></b></p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="widget-small info coloured-icon"><i class="icon fa fa-list fa-3x"></i>
                    <div class="info">
                        <h4>Orders</h4>
                        <p><b></b></p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="widget-small warning coloured-icon"><i class="icon fa fa-files-o fa-3x"></i>
                    <div class="info">
                        <h4>Products</h4>
                        <p><b></b></p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="widget-small danger coloured-icon"><i class="icon fa fa-star fa-3x"></i>
                    <div class="info">
                        <h4>Sellers</h4>
                        <p><b></b></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="tile">
                    <h3 class="tile-title">Weekly Orders</h3>
                    <canvas id="weeklyOrder" style="width:100%;max-width:600px"></canvas>
                </div>
            </div>
            <div class="col-md-6">
                <div class="tile">
                    <h3 class="tile-title">Monthly Sale Post</h3>
                    <canvas id="monthlySellerPost" style="width:100%;max-width:600px"></canvas>
                </div>
            </div>
        </div>
    </main>
    <script>
        //Weekly Orders
        var xDays = ["Saturday", "Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday"];
        var yDays = [55, 49, 44, 24, 15, 67, 89];
        var barColors = ["red", "green","blue","orange","brown", "pink", "yellow"];

        new Chart("weeklyOrder", {
            type: "bar",
            data: {
                labels: xDays,
                datasets: [{
                    backgroundColor: barColors,
                    data: yDays
                }]
            },
            options: {
                legend: {display: false},
                title: {
                    display: true,
                    text: "Last Weeks Order from buyers"
                }
            }
        });



        //Monthly Seller Post
        var xSellerPosts = [50,60,70,80,90,100,110,120,130,140,150];
        var yDays = [7,8,8,9,9,9,10,11,14,14,15];

        new Chart("monthlySellerPost", {
            type: "line",
            data: {
                labels: xSellerPosts,
                datasets: [{
                    fill: false,
                    lineTension: 0,
                    backgroundColor: "rgba(0,0,255,1.0)",
                    borderColor: "rgba(0,0,255,0.1)",
                    data: yDays
                }]
            },
            options: {
                legend: {display: false},
                scales: {
                    yAxes: [{ticks: {min: 6, max:16}}],
                }
            }
        });
    </script>
@endsection
