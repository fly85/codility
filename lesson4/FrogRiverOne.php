<?php

/**
 * @param integer $destination the final destination the frog need to reach
 * @param array $falling_leaves a zero-indexed of N integers
 * representing the falling leaves. A[K] represents the position where one leaf
 * falls at time K
 * @return integer the earliest moment when all the positions from 1 to X are
 * covered by leaves
 *
 * @see https://codility.com/programmers/task/frog_river_one/
 * @see https://codility.com/demo/results/trainingA73GTP-9D3/
 */
function solution($destination, $falling_leaves) {
  $jumps = array();
  $count_jump = 0;
  foreach($falling_leaves as $time => $falling_leaf) {
    if(!array_key_exists($falling_leaf, $jumps)) {
      $jumps[$falling_leaf] = true;
      $count_jump++;
    }
    
    if($destination == $count_jump) {
      return $time;
    }
  }

  return -1;
}
