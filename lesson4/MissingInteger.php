<?php

/**
 * @param array $A a non-empty zero-indexed array of N integers
 * @return integer the minimal positive integer (greater than 0) that does not occur in $A
 *
 * @see https://codility.com/programmers/task/missing_integer/
 * @see https://codility.com/demo/results/trainingP57R8F-6FB/
 */
function solution($A) {
  $positive_integer = array();
  foreach ($A as $integer) {
    if($integer > 0) {
      $positive_integer[$integer] = $integer;
    }
  }

  ksort($positive_integer);
  $min = 1;
  foreach ($positive_integer as $integer) {
    if($min !== $integer) {
      return $min;
    }

    $min++;
  }

  return $min;
}
