<?php
// $image=file_get_contents("http://103.170.22.4/iqbalnet/mikrotik-simple-queue-in-out-day.png");
// $encrypted=base64_encode($image);
// echo '<img src="data:image/gif;base64,'.$encrypted.'" />';
$url1="http://103.170.22.4/iqbalnet/mikrotik-simple-queue-in-out-day.png";
$url2="http://103.170.22.4/iqbalnet/mikrotik-simple-queue-in-out-week.png";
$url3="http://103.170.22.4/iqbalnet/mikrotik-simple-queue-in-out-month.png";
 ?>

<div class="page-wrapper">
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-12 d-flex no-block align-items-center">
                <h4 class="page-title">Dashboard</h4>
                <div class="ms-auto text-end">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Library</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- End Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Container fluid  -->
    <!-- ============================================================== -->
    <div class="container-fluid">
      <div class="">
        Data Akan Refresh dalam <span id="timer"></span>
      </div>
      <div class="" id="load">

      </div>
    </div>

    <script>
      $(document).ready(function(){
        var timeleft = 60;
        var timer = setInterval(function(){
          if(timeleft <= 0){
            timeleft = 61;
            $("#load").load("<?=base_url('dashboard/graph')?>");
          } else {
            document.getElementById("timer").innerHTML = timeleft + " seconds";
          }
          timeleft -= 1;
        }, 1000);
        $("#load").load("<?=base_url('dashboard/graph')?>");
      })
    </script>
