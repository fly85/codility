<?php

/**
 * @param string $dna a non empty string of N characters
 * @param array $range_start a non empty array of M integers
 * @param array $range_stop a non empty array of M integers
 * @return array the minimum factor for each query
 *
 * @see https://codility.com/demo/take-sample-test/genomic_range_query/
 * @see https://codility.com/demo/results/trainingAGUHSN-RVV/
 */
function solution($dna, $range_start, $range_stop) {
  $return = array();
  $dna_factor = array(
    'A' => 1,
    'C' => 2,
    'G' => 3,
    'T' => 4,
  );

  $dna_sum[-1] = array();
  foreach ($dna_factor as $factor) {
    $dna_sum[-1][$factor] = 0;
  }

  $dna_length = strlen($dna);
  for ($i = 0; $i < $dna_length; $i++) {
    $dna_sum[$i] = $dna_sum[$i - 1];
    $letter = $dna[$i];
    $dna_sum[$i][$dna_factor[$letter]]++;
  }

  $query_count = count($range_start);
  for($i = 0; $i < $query_count; $i++) {
    $start = $range_start[$i];
    $stop = $range_stop[$i];

    if($start == $stop) {
      $return[$i] = $dna_factor[$dna[$start]];
      continue;
    }

    foreach ($dna_factor as $factor) {
      if($dna_sum[$stop][$factor] - $dna_sum[$start - 1][$factor] >= 1) {
        $return[$i] = $factor;
        break;
      }
    }
  }

  return $return;
}
