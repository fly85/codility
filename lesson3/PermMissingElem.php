<?php
/**
 * @param array $A a zero-indexed array of N different integers in the range [1..(N + 1)]
 * @return integer missing element
 *
 * @see https://codility.com/demo/take-sample-test/perm_missing_elem/
 * @see https://codility.com/demo/results/training5WVMRZ-473/
 */
function solution($A) {
  if(empty($A)) {
    return 1;
  }

  sort($A);
  $count_a = count($A);
  $dico_index = floor($count_a / 2);

  $missing = _dico_search_missing($A, $dico_index, $count_a);

  return intval($missing);
}

function _dico_search_missing($stash, $index, $upper) {
  if($index == $upper) {
    return $index + 1;
  }
  if($stash[$index] != $index + 1) {
    return _dico_search_missing($stash, floor($index / 2), $index);
  }
  else {
    return _dico_search_missing($stash, ceil(($upper - $index) / 2) + $index, $upper);
  }
}
