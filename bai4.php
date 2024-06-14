<?php
$chuoi1 = "H,e,l,l,o,W,o,r,l,d";
echo $chuoi1 .'</br>';
$arr = explode("," ,$chuoi1);
// print_r($arr);
echo $arr[0].'</br>';
$chuoi2 = implode("", $arr);
echo $chuoi2;
?>,
