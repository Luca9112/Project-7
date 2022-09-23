<?php

require "reserveren.php";
$all = $_RSV->getDay();


header("Content-Type: text/csv");
header("Content-Disposition: attachment;filename=reserveringen.csv");
if (count($all)==0) { echo "Geen reserveringen"; }
else {
  
  foreach ($all[0] as $k=>$v) { echo "$k,"; }
  echo "\r\n";

 
  foreach ($all as $r) {
    foreach ($r as $k=>$v) { echo "$v,"; }
    echo "\r\n";
  }
}
