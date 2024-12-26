<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="post">
        <label for="name">Name</label>
        <input type="text" name="name"><br><br>
        <label for="password">Password</label>
        <input type="password" name="password"><br><br>
        <!-- <button type="submit" name="submit">submit</button> -->
        <input type="radio" name="credit">visa<br>
        <input type="radio" name="credit">Mastercard<br>
        <input type="radio" name="credit">american express<br>
        <button type="submit" name="confirm">submit</button><br>

    </form>
</body>
</html>



<?php
//echo"php language <br>";
// echo"php language <br>";


// $name=12;
// echo "\${$name} ";
//echo $_GET["name"];
// echo "{$_POST["name"]} <br>";
// echo "{$_POST["password"]}";
// $a=10;
// $b=20;
// $c=30;
// $d=40;
// echo max($a,$b,$c,$d)."<br>";

// $st=null;
// if($st)
// {
//     echo "done";
// }
// else
// {
//     echo "not done <br>";
// }
// $date=date("l");
// echo $date;

// $foods=array(1,2,3,4,"apple");
// array_push($foods,34,"banana");
// echo count($foods)."<br>";
// echo $foods[0];
// foreach($foods as $food)
// {
//      echo $food."<br>";
// }
// //associated array
// $arr=array(1=>1,"2"=>2,"3"=>6,4=>8);
// echo $arr["3"]."<br>";
// foreach($arr as $key=>$value)
// {
//    echo $key."=".$value."<br>";
// }
// if(isset($_POST["confirm"]))
// {
//     if(empty($_POST["credit"]))
//     {
//        echo "not set <br>";
//     }
//     else
//     {
//         echo "set";
//     }
// }
// else
// {
//     echo "not-set";
// }
if(isset($_POST["confirm"]))
{
    $name=filter_input(INPUT_POST,"name",FILTER_SANITIZE_SPECIAL_CHARS);
    $name1=filter_input(INPUT_POST,"name",FILTER_VALIDATE_INT);
    echo $name;
    echo $name1;
}
 setcookie("food","pizza",time()+86400,"/");
 
?>


