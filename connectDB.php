<?php

$conn = mysqli_connect("localhost", "root", "", "csrflogdb");

// Check connection
if ($conn->connect_errno > 0) {
    die("Unable to connect.[".$conn->connect_error."]");
}
?>