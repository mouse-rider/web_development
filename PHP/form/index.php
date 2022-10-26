<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <h2>User register screen</h2>
    <form action="another.php" method="get">
        <table>
            <tr>
                <td>Name :</td>
                <td><input type="text" name="name" id="name"></td>
            </tr>
            <tr>
                <td>Email :</td>
                <td><input type="text" name="email" id="email"></td>
            </tr>
            <tr>
                <td>Age :</td>
                <td><input type="text" name="text" id="age"></td>
            </tr>
            <tr>
                <td>Date :</td>
                <td><input type="date" name="date" id="date"></td>
            </tr>
            <tr>
                <td>address :</td>
                <td><textarea name="address" id="address" cols="30" rows="10"></textarea></td>
            </tr>
            <tr>
                <td>Mobile :</td>
                <td><input type="phone" name="phone" id="mobile"></td>
            </tr>
            <tr>
                <td>Gender :</td>
                <td>
                    Female
                    <input type="radio" name="gender" value="female" >
                    Male
                    <input type="radio" name="gender" value="male">
                </td>
            </tr>
            <tr>
                <td><input type="submit" name="submit" value="submit"></td>
            </tr>
        </table>
    </form>
    <?php
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
    ?>
    
</body>
</html>