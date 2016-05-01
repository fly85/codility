<?php

/**
 * @param array $A a non-empty zero-indexed of N integers
 * @return integer the value of the unpaired element
 *
 * @see https://codility.com/demo/take-sample-test/odd_occurrences_in_array/
 * @see https://codility.com/demo/results/training2XYGH4-SGT/
 */
function solution($A) {
  // Sort the array so every paired element are side by side
  sort($A);
  $count = count($A);
  for ($i = 1; $i < $count; $i++) {
    if($A[$i] !== $A[$i - 1]) {
      return $A[$i - 1];
    }
    $i++;
  }

  return $A[$i - 1];
}
