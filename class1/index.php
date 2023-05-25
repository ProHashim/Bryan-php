<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php

use function PHPSTORM_META\type;

    echo $_SERVER['HTTP_USER_AGENT'] . "<br>";
    

?>

<form action="index.php" method="post">
    <input type="text" name="name" id="name">
    <input type="submit" value="Submit">
</form>
</body>
</html>


<?php

    // if(isset($_GET['name'])){
    //     echo $_GET['name'] . "<br>";

    // }
    if(isset($_POST['name'])){
        echo $_POST['name'] . "<br>";

    }
echo rand(4, 8);

$arr = array(1, 2, 3, 4, 5, 6, 7, 8, 9);
$arr2 = [1, 2, 3, 4, 5, 6, 7, 8, 9];
var_dump($arr);

// associative array
$arrs = ["name"=> "Jhon", "age"=> 25];
$arrs = array("name"=> "Jhon", "age"=> 25);
// echo "<script>alert('$arr[1] ')</script>"

$cool = "asdf";

if (!empty($cool)){
    echo "It is ";
}else {
    echo "It is not ";
}

    ?>