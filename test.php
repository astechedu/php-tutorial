<?php
$arr=["ajay", "bhanu", "chandra", "kumar"];
$arr2 = ["new1","new2"];

$new = array_splice($arr,1,0,$arr2);

print_r($new);

print_r($arr);


?>
