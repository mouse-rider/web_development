<!-- *BOOLEAN -->
<?php 
$name=true 
echo_var_dump($name)
?>
<!-- output:
boolen(ture) -->


<?php
$name="";
if($name){
echo"name is set";
}
else{
echo"name is not set";
}
?>
<!-- output:
name is not set  -->


<?php
$name="1";
if($name){
echo"name is set";
}
else{
echo"name is not set";
}
?>
<!-- output:
name is set -->

