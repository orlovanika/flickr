<?php

   $url= "https://api.flickr.com/services/rest/?&method=flickr.tags.getHotList&api_key=9efc64af59f4d2c437ade6a2c95c5263&period=week&format=json";
   $ch = curl_init();
   curl_setopt($ch, CURLOPT_URL,$url );
   curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
   curl_setopt($ch, CURLOPT_HEADER, 0);
   $output = curl_exec($ch);
   $output = json_decode($output,true);
   var_dump($output);
   curl_close($ch);



?>