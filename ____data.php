<?php
// create an array and count them
$names[] = 'Valeed';
$names[] = 'John';
$names[] = 'Fabio';
$names[] = 'Scott';
$names[] = 'Adam';
// $count = 1;

foreach($names as $name){
//    echo $count. '. ' .$name. '<br>';
//  $_REQUEST['var] is a way to get 'var' to this server
    
    if ($_REQUEST['name'] == $name){
        echo $_REQUEST['name']. ' is inside the array';
    }
//    $count++;
}
    

?>