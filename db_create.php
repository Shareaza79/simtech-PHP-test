<?php

include_once("db_connect.php");
$sql = "CREATE DATABASE feedback_form";
if (mysqli_query($link, $sql)) {
    echo "Database created successfully";
} else {
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}

mysqli_close($link);
