<?php

/**
 * @param integer $X frog position
 * @param integer $Y frog minimal destination
 * @param integer $D frog jump distance
 * @return integer
 *
 * @see https://codility.com/demo/take-sample-test/frog_jmp/
 * @see https://codility.com/demo/results/trainingV32U8J-3VU/
 */
function solution($X, $Y, $D) {
  return intval(ceil(($Y - $X) / $D));
}
