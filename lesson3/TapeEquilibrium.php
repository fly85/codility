<?php

/**
 * @param array $number_on_tape a non-empty zero-indexed of N integers
 * @return integer the minimal difference that can be achieved
 *
 * @see https://codility.com/demo/take-sample-test/tape_equilibrium/
 * @see https://codility.com/demo/results/trainingTJJFUW-YJE/
 */
function solution($number_on_tape) {
  $left_sum = 0;
  $right_sum = array_sum($number_on_tape);
  $minimal_diff = FALSE;

  $stop = count($number_on_tape) - 1;
  for($i = 0; $i < $stop; $i++) {
    $value_tape = $number_on_tape[$i];
    $left_sum += $value_tape;
    $right_sum -= $value_tape;
    $difference = abs($left_sum - $right_sum);
    if($minimal_diff === FALSE || $difference < $minimal_diff) {
      $minimal_diff = $difference;
    }
  }

  return $minimal_diff;
}

