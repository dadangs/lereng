<?php

  header('Access-Control-Allow-Origin: *');
 $data = array(["nama_foto" => "bar", "token" => "baz"],
 ["nama_foto" => "bar2", "token" => "baz2"]);
  $json = json_encode($data);
  
  echo '{"feedData":' .$json."}";
?>