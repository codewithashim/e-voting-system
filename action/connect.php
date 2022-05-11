<?php

$con = mysqli_connect("localhost", "root", "", "e_voting_system");

if (!$con) {
    die(mysqli_error($con));
}

?>