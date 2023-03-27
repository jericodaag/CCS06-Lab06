<?php
$start_year = 4; //starting yr
$end_year = 2024; //ending yr

for ($year = $start_year; $year <= $end_year; $year++) { //year looping statement

  if (($year % 4 == 0 && $year % 100 != 0) || $year % 400 == 0) {
  
    echo $year . "<br>";  //print starting yr to ending yr
  }
}
?>