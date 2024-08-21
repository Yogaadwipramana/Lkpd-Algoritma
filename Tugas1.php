<?php
function isLeapYear($year) {
    return ($year % 4 == 0 && $year % 100 != 0) || ($year % 400 == 0);
}

$startYear = 1600;
$endYear = 2024;

for ($year = $startYear; $year <= $endYear; $year += 4) {  
    if (isLeapYear($year)) {
        echo $year . " kabisat.\n";
    } else {
        echo $year . " bukan kabisat.\n";
    }
}
?>
