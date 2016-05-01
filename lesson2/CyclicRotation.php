<?php

/**
 * @param array $A a zero-indexed array of N integers
 * @param integer $K
 * @return array $A rotated $K times
 *
 * @see https://codility.com/demo/take-sample-test/cyclic_rotation/
 * @see https://codility.com/demo/results/trainingJDBBJX-6AV/
 */
function solution($A, $K) {
  $count_element = count($A);
  $effective_rotation = $K % $count_element;

  $slice = array_splice($A, $count_element - $effective_rotation);
  return array_merge( $slice, $A );
}
