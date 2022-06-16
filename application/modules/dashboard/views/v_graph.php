<?php
// $image=file_get_contents("http://103.170.22.4/iqbalnet/mikrotik-simple-queue-in-out-day.png");
// $encrypted=base64_encode($image);
// echo '<img src="data:image/gif;base64,'.$encrypted.'" />';
$url1="http://103.170.22.4/iqbalnet/mikrotik-simple-queue-in-out-day.png";
$url2="http://103.170.22.4/iqbalnet/mikrotik-simple-queue-in-out-week.png";
$url3="http://103.170.22.4/iqbalnet/mikrotik-simple-queue-in-out-month.png";
 ?>
      <div class="">
        <p>Trafik Harian Iqbal NET</p>
        <img src="data:image/gif;base64,<?=$this->enkripsi->kunci($url1)?>"/>
      </div>
      <br>
      <div class="">
        <p>Trafik Mingguan</p>
        <img src="data:image/gif;base64,<?=$this->enkripsi->kunci($url2)?>" alt="">
      </div>
      <br>
      <div class="">
        <p>Trafik Bulanan</p>
        <img src="data:image/gif;base64,<?=$this->enkripsi->kunci($url3)?>" alt="">
      </div>
