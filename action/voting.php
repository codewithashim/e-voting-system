<?php
session_start();
include './connect.php';

$vote = $_POST['grupe_vote'];
$total_vote = $vote+1;
$gid = $_POST['grupe_id'];
$uid = $_SESSION['id'];

$updet_vote=mysqli_query($con,"update `userdata` set vote='$total_vote' where id='$gid'");

$updet_status=mysqli_query($con,"update `userdata` set status=1 where id='$uid'");

if($updet_vote and $updet_status){
    $get_grup = mysqli_query($con,"Select username,photo,vote,id from `userdata` where standard='grup'");
    $grup=mysqli_fetch_all($get_grup,MYSQLI_ASSOC);
    $_SESSION['grup']=$grup;
    $_SESSION['status']=1;
    echo '<script>
    alert("Sussefuly Voted ...👨‍💻👨‍💻");
    window.location="../Component/deshboard.php";
    </script>';
     
}else{
   echo '<script> 
    alert("Some Technical Erro !! Pless Vote After Few Moment ...👨‍💻👨‍💻");
    window.location="../Component/deshboard.php";
    </script>';
}


?>