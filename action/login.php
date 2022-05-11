<?php
session_start();
include './connect.php';

$username = $_POST['username'];
$phone_num = $_POST['ph_number'];
$email = $_POST['email'];
$password = $_POST['password'];
$standard = $_POST['std_g'];

$mySql = "Select * from `userdata` where username='$username' and email='$email' and moblile='$phone_num' and password='$password' and standard='$standard'";

$result = mysqli_query($con,$mySql);


if(mysqli_num_rows($result)>0){
    $sql = "Select username,photo,vote,id from `userdata` where standard='grup'";
    $resultGrup= mysqli_query($con,$sql);

    if(mysqli_num_rows($resultGrup)>0){
        $grups=mysqli_fetch_all($resultGrup, MYSQLI_ASSOC);
        $_SESSION['grup']= $grups;
    }

    $data = mysqli_fetch_array($result);
    $_SESSION['id'] = $data['id'];
    $_SESSION['status'] = $data['status'];
    $_SESSION['data'] = $data;

    echo '<script>
    window.location = "../Component/deshboard.php";
    </script>';


}else{
    echo '<script>
    alert("Invalid Cradinctial 👨‍💻");
    window.location ="../index.php";
    </script>';
}

?>