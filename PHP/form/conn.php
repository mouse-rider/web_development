<?php
$server="localhost";
$username="root";
$password="";
$dbname="work_shop";
$conn=new mysqli($server,$username,$password);

$name=$email=$gender=$address=$age=$date=$$age="";
        if(!empty($_POST)){
        $name=input_filters($_POST["name"]);
        $email=input_filters($_POST["email"]);
        $age=input_filters($_POST["age"]);
        $date=input_filters($_POST["date"]);
        $address=input_filters($_POST["address"]);
        $mobile=input_filters($_POST["mobile"]);
        $gender=input_filters($_POST["gender"]);
    }

    $sql="INCERT INTO `work_shop_table`(`name`,`email`,`age`,`date`,`address`,`mobile`,`gender`) VALUES (`$name`,`$email`,`$age`,`$date,`$address`,`$mobile`,`$gender`)";
    if ($conn->query($sql)==TRUE){
        echo "new record created successfullt";
    }else{
        echo "Error: ". $sql."<br>".$conn->error;
    }
    exit;

    /*if ($conn->connect_error){
    die("Connection failed: ". $conn->connect_error);
}else{
    echo "Database connected";
}
exit;*/

?>
	