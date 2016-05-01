<?php

/**
 * @param integer $A
 * @param integer $B
 * @param integer $divider
 * @return integer the number of integers within the range [A..B]
 * that are divisible by K
 *
 * @see https://codility.com/programmers/task/count_div/
 * @see https://codility.com/demo/results/trainingD6URER-48H/
 */
function solution($A, $B, $divider) {
  $range = $B - $A;
  $count = floor($range / $divider);
  $range_rest = $range - $count * $divider;

  if($A % $divider == 0) {
    $count++;
  }

  if($range_rest + ($A % $divider) >= $divider) {
    $count++;
  }

  return intval($count);
}

