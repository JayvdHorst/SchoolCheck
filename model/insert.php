<?php

//define host
include '../includes/config.php';
//make connection
include '../includes/database.php';

if(isset($_POST['title'])){
    $text_here = $_POST['title'];
    $title = strip_tags($text_here);
}

if(isset($_POST['location'])){
    $loc_here = $_POST['location'];
    $location = strip_tags($loc_here);
}

$sql = "INSERT INTO schools (name, location) VALUES ('$title', '$location')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
    header("Location: ../");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
};
