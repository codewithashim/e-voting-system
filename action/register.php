<?php
include("./connect.php");

$username = $_POST['user_name'];
$mobile = $_POST['reg_ph_number'];
$email = $_POST['reg_email'];
$password = $_POST['reg_password'];
$conf_password = $_POST['reg_conf_password'];
$profile = $_FILES['profile_photo']['name'];
$tmp_name = $_FILES['profile_photo']['tmp_name'];
$standerd = $_POST['std_grup'];


if ($password != $conf_password) {
    echo '<script>
    alert("Password Is Not Match Pless Enter The Currect Password");
    window.location ="../Component/register.php";
    </script>';
} else {
    move_uploaded_file($tmp_name, "../upload/$profile");
    $sql = "insert into `userdata`(username,moblile,email,password,photo,standard,status,vote) values('$username','$mobile','$email','$password','$profile','$standerd',0,0)";
    $result = mysqli_query($con,$sql);

    if($result){
        echo '<script>
        alert("Registrations Is Sussesfuly Done 👨‍💻");
        window.location ="../index.php";
        </script>';
    }

}

?>
