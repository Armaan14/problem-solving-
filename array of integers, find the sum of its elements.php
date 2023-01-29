#Given an array of integers, find the sum of its elements.
#For example, if the array ar=[1,2,3], 1+2+3=6, so return 6.
#Function Description

<?php
function simpleArraySum($ar) {
    $sum = 0;
    for($i=0; $i<count($ar); $i++){
        $sum += $ar[$i];
    }
    return $sum;
}

    // Write your code here

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$ar_count = intval(trim(fgets(STDIN)));

$ar_temp = rtrim(fgets(STDIN));

$ar = array_map('intval', preg_split('/ /', $ar_temp, -1, PREG_SPLIT_NO_EMPTY));

$result = simpleArraySum($ar);

fwrite($fptr, $result . "\n");

fclose($fptr);

?>
