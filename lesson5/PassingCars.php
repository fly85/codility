<?php

/**
 * @param array $cars_passing a non-empty zero-indexed array of N integers
 * The consecutive elements of array A represent consecutive cars on a road.
 * Array A contains only 0s and/or 1s:
 *  - 0 represents a car traveling east,
 *  - 1 represents a car traveling west.
 * @return array
 *
 * @see https://codility.com/programmers/task/passing_cars/
 * @see https://codility.com/demo/results/trainingGUU5CY-UTW/
 */
function solution($cars_passing) {
  $max_count = 1000000000;
  $count = 0;
  $sum_cars_west = array_sum($cars_passing);

  foreach ($cars_passing as $time => $direction) {
    if($direction === 1) {
      $sum_cars_west--;
    }
    else {
      $count += $sum_cars_west;
    }

    if($count > $max_count) {
      return -1;
    }
  }

  return $count;
}

var_dump(solution(array(0, 1, 0, 1, 1)));