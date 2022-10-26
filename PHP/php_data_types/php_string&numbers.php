<!-- PHP string & Numbers. -->
<!-- 
Strings and Numbers 
*Numbers (Integer, float) 
*string is a sequence of charactors 'Singh Quotes' or double quotes' -->

<!-- for example: -->
<?php
$age=1;
$flt=75.5;
//echo $age;
echo var_dump(is_int($age));
//echo var_dump(is_float($age));
?>

<!-- output:
boot(true) -->


<!-- string concatination (.)dot  -->
<?php
$name="kishore";
$age='20';
echo $name."--".$age;
?>
<!-- o/p:
kishore--20 -->

<!-- *string length: strlen() -->
<?php
$name="kishore";
$age='20';
echo strlen($name);
?>
<!-- o/p:
7 -->

<!-- *string word:->str_word_count() -->
<?
$name="kishore kumar";
echo str_word_count($name);
?>

<!-- output:
2 -->

<!-- 
*string reverse -.strrev()
*string postion ->strpos ($name,"chennai") -->
<?php
$name="kishore chennai";
echo strpos($name,"chennai");
?>
 <!-- output: 
8-->
<!-- upper or lower in position string function -> stripos() -->
<?php
$name="kishore chennai";
echo stripos($name,"CHENNAI");
?>
<!-- o/p:
8 -->


<!-- Lost accurence of string ->strpos()  -->
<?php
$name="kishore chennai";
echo strrpos($name,"I");
?>

<!-- output:
14  -->
<?php
$name="kishore chennai";
echo strripos($name,"I");
?>
<!-- o/p:
14 -->

<!-- strstr  find the first accrunce of word  -->
<?php
$name="kishore chennai";
echo strstr($name,"che");
?>
<!-- o/p: 
chennai -->

<?php
$name="kishore chennai";
echo strstr($name,"ore");
//stristr --> this also try
?>
<!-- o/p:
ore chennai -->

<!-- *Trim ->without white space removing white space  -->
<?php
$name="         kishore chennai";
echo trim($name);
?>

<!-- output:
sathish chennai -->

<!-- 
string replace: -->
<?php
$name ="kishore chennai";
echo str_replace('chennai','madurai','salem');
?>
<!-- o/p: 
kishore madurai -->