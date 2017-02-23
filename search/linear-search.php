<?php

// Линейный поиск

function linear_search($arr, $x) {
  $result = null;
  $i = 0;
  while ($i < count($arr)) {
    if ($arr[$i] == $x) {
      $result = $i;
    }
    $i++;
  }
  return $result;
}

// Улучшеный линейный поиск

function better_linear_search($arr, $x) {
  $result = null;
  $i = 0;
  while ($i < count($arr)) {
    if ($arr[$i] == $x) {
      $result = $i;
      break;
    }
    $i++;
  }
  return $result;
}

// Линейный поиск с барьером

function sentinel_linear_search($arr, $x) {
  $arr[] = $x;
  $i = 0;
  while ($arr[$i] != $x) {
    $i++;
  }
  $result = $i == count($arr) - 1? null : $i;
  return $i;
}
