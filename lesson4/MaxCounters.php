<?php

/**
 * @param integer $N number of counter
 * @param array $A $operation
 * @return array
 *
 * @see https://codility.com/programmers/task/max_counters/
 * @see https://codility.com/demo/results/training7UYP98-P28/
 */
function solution($N, $A) {
  $counter = array();

  $current_max_counter = 0;
  $max_counter = 0;
  foreach ($A as $k => $value) {
    if($value <= $N) {
      if(!isset($counter[$value])) {
        $counter[$value] = 0;
      }

      $counter_value = &$counter[$value];

      if($counter_value < $current_max_counter) {
        $counter_value = $current_max_counter;
      }

      $counter_value++;

      if($counter_value > $max_counter) {
        $max_counter = $counter_value;
      }
    }
    else {
      $current_max_counter = $max_counter;
    }
  }

  $return = array();
  for($i = 1; $i <= $N; $i++) {
    if(!isset($counter[$i]) || $counter[$i] < $current_max_counter) {
      $return[] = $current_max_counter;
    }
    else {
      $return[] = $counter[$i];
    }
  }

  return $return;
}
