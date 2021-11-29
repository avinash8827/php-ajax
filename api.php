<?php
//$data = json_decode(file_get_contents('php://input'));
//var_dump($data);

//echo 'ohk';
$conn = mysqli_connect('localhost','root','','ecom2_db') or die('Could not connect');


if( (isset($_GET['action'])) && ($_GET['action'] == 'registration')    ){

    $email = mysqli_real_escape_string($conn,$_GET['e']);
    $password = mysqli_real_escape_string($conn,$_GET['p']);
    $hashed_password = hash('sha512',$password);

    $sql = "INSERT INTO users_tbl(`email`,`password`)VALUES('$email','$hashed_password')";

    mysqli_query($conn,$sql) or die(mysqli_error($conn));

    echo "200";
    exit;

    mysqli_close($conn);
}

?>