<?php

function selection_sort($arr) {
  $size = count($arr);
  for ($i = 0; $i < $size - 1; $i++) {
    $min = $i;

    for ($j= $i + 1; $j < $size; $j++) {
      if($arr[$j] < $arr[$min]) {
        $min = $j;
      }
    }

    $tmp = $arr[$i];
    $arr[$i] = $arr[$min];
    $arr[$min] = $tmp;
  }
  return $arr;
}
