<?php
//  [1]
//   $somerar = 15;
//   function aditt() {
//     $somerar;
//     $somerar++;
//     echo "somerar is $somerar";
//   }
//   aditt();
//   output is 16 because the (global keyword) import variable value from global scope which = 15
// //////////////////////
// [2]
// $arr = array(5 => 1 , 12 => 2);
// $arr[] = 56;
// $arr["x"] = 42;
// unset($arr);
// echo var_dump($arr);

// error because we cant dump info about unset variable , $arr value is Null;

// //////////////////////
// [3]
// $var = "false";
// if($var) {
//   echo "true";
// }else {
//   echo "false";
// }
// output => true because it checks if $var has value or has falsy value;
// //////////////////////
// [4]
// $baseNum1 = 0;
// $baseNum2 = 1;
// echo "$baseNum1  $baseNum2 ";
// for($counter = 0; $counter < 10; $counter++) {
//   $newNum =  $baseNum1 + $baseNum2;
//   echo " $newNum ";
//   $baseNum1 = $baseNum2;
//   $baseNum2 = $newNum;
// }
/////////////////////////
//[5]
// $year = 1992;
// if ($year % 400 == 0)
//     print("It is a leap year");
//   else if ($year % 100 == 0)
//     print("It is not a leap year");
//   else if ($year % 4 == 0)
//     print("It is a leap year");
//   else
//     print("It is not a leap year");

///////////////////////////
//[6]
// for($i = 0; $i < 10; $i++) {
//   $num = rand(1,52);
//   echo "($num) ";
// }
/////////////////////////////
//[7]
// for ($i = 1; $i < 6; $i++) {
//   for ($j = 1; $j < 6; $j++) {
//       echo $i*$j . " ";
//   }
//   echo "<br>";
// }
/////////////////////////////////////
//[8]
// $arr = [1,1,2,2,3,3,4,4];
// $res = array_values(array_unique($arr));
// print_r($res);

//[9]

//false
//true
//false
//???
//true
?>

