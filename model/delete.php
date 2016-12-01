<?php

//define host
include '../includes/config.php';
//make connection
include '../includes/database.php';

$id = $_GET["id"];

$sql = "DELETE FROM schools WHERE id = $id";

if ($conn->query($sql) === TRUE) {
    echo "Record has been deleted";
    header("Location: ../");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
};