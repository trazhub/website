<?php
include("connect.php");
$dry_cleaning = '';
$laundary = '';
$shoes_cleaning = '';
$home_cleaning = '';
$ironing = '';
$luggage = '';
$sofa = '';
$carpet = '';
if (isset($_post["submit"])) {
        echo "<pre>";
       print_r($_post);
  //
    $name = $_POST["name"];
    $phone = $_POST["phone"];
    $city = $_POST["city"];
    $pincode = $_POST["pincode"];
    $dry_cleaning = $_POST["dry_cleaning"];
    $laundary = $_POST["laundary"];
    $shoes_cleaning = $_POST["shoes_cleaning"];
    $home_cleaning = $_POST["home_cleaning"];
    $ironing = $_POST["ironing"];
    $luggage = $_POST["luggage"];
    $carpet = $_POST["carpet"];
    $sofa = $_POST["sofa"];
    echo $sofa;


    $sql = "INSERT INTO `laundary` ( `name`, `phone`, `city`, `pincode`, `dry_cleaning`, `laundary`, `shoes_cleaning`, `home_cleaning`, `iron_cleaning`, `luggage`, `carpet`, `sofa`) 
            VALUES ( '$name', '$phone', '$city', '$pincode`', '$dry_cleaning', '$laundary', '$shoes_cleaning','$home_cleaning', '$ironing', '$luggage', '$carpet', '$sofa');";
    if (mysqli_query($conn, $sql)) {
       
        header("Location: http://laundrywalah.com/new/laundary/oder.html");
         
    }
    else{
        echo 'DATA NOT SAVED'; 
    }
    
}
else {
    echo "contect to admin";
}
?>