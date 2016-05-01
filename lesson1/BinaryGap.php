<?php

/**
 * @param $number
 * @return int
 *
 * @see https://codility.com/programmers/task/binary_gap/
 * @see https://codility.com/demo/results/trainingBV4ZRD-R3E/
 */
function solution($number) {
  $max_gap = 0;
  $previous_power = 0;

  /**
   * 25 = 2^4 + 2^3 + 2^0 = 0b11001
   * while we have a power of 2, get the gap with previous power and keep the max gap
   */
  while (FALSE !== ($power = getPower2($number))) {
    $max_gap = intval(max($previous_power - ($power + 1), $max_gap));
    $previous_power = $power;
    $power_value = pow(2, $power);
    $number -= $power_value;
  }

  return $max_gap;
}

function getPower2($N)
{
  if($N <= 0) {
    return FALSE;
  }

  return floor(log($N,2));
}
