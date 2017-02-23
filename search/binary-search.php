<?php

function binary_search($arr, $x) {
  $first = 0;
  $last = count($arr);

  while($last >= $first) {
    $middle = floor(($first + $last) / 2);
    //print_r($middle);
    if ($arr[$middle] == $x) { //7
      return $middle;
    }
    if ($arr[$middle] > $x) {
      $last = $middle;
    } else {
      $first = $middle;
    }
  }
  return null;
}
