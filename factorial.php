<?php
function Factorial($number){
    $factorial=1;
    for($i=1;$i<=$number;$i++){
        $factorial=$factorial*$i;
    }
    return $factorial;
}
//driver code
$number=10;
$fact=Factorial($number);
echo "Factorial=$fact";
?>