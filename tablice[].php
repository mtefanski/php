<?php

#error_reporting(~E_NOTICE);

#print_r($a);
#var_dump($a);

$a[] = 3;
$a[] = 4;
$a['1'] = 55;
$a[false] = 'FALSE';
$a[true] = 'TRUE';
$a[2.5] = 'FLOAT';


$a = array(77 =>  0,1,2,3,4,5,'abc' => 'cba', 'def' => 'fed');

foreach( $a as $key => $value)
{
	echo $key,'  ',$value,'</br>'; 
}

?>
