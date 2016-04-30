<?php
/**
 * @param array $A a zero-indexed array of N different integers in the range [1..(N + 1)]
 * @return integer missing element
 *
 * @see https://codility.com/demo/take-sample-test/perm_missing_elem/
 * @see https://codility.com/demo/results/trainingNZGHNZ-6SE/
 */
function solution($A) {
  if(empty($A)) {
    return 1;
  }

  $count_a = count($A);

  sort($A);
  for ($i = 1; $i <= $count_a; $i++) {
    if($i !== $A[$i - 1]) {
      return $i;
    }
  }

  return $count_a + 1;
}
