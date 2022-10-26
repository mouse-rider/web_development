<!-- for example: -->
<?php
$name="kishore";
$name=1;
echo var_dump($name)
?>

<!-- output:
int(1) -->

<!-- 
EXAMPLE FOR ALL DATA TYPES DECLARED IN A VARIABLE. -->

<?php
//integer
$data_int=1;
//string
$data_str="kishore";
//float
$data_flt=1.1;
//array
$data_arr=["red", "green","blue"];
//object 
class colour{
    function get_colour(){
        return "green";
    }
}
$data_obj=new colour();
$data_obj->get_colour();
echo $data_int."--".$data_str."--".$data_flt;

?>

<!-- output:
green,_kishore_1.1 -->

