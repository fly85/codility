<?php

/**
 * A permutation is a sequence containing each element from 1 to N once, and only once.
 *
 * @param array $A a non-empty zero-indexed array A consisting of N integers
 * @return integer 1|0 if the array is a permutation or not
 *
 * @see https://codility.com/demo/take-sample-test/perm_check/
 * @see https://codility.com/demo/results/trainingMBGJGF-95E/
 */
function solution($A) {
  $count_origin = count($A);
  $a_unique = array_unique($A);
  $count = count($a_unique);

  if($count_origin !== $count) {
    return 0;
  }

  sort($a_unique);
  $min = $a_unique[0];
  $max = $a_unique[$count - 1];

  if(1 !== $min || $max !== $count) {
    return 0;
  }

  return 1;
}
