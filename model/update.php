<?php
//define host
include '../includes/config.php';
//make connection
include '../includes/database.php';

    $id = $_GET["id"];

    $sql = "SELECT * FROM schools WHERE id = $id";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // output data of each row
        while ($row = $result->fetch_assoc()) {
            $Name = $row['name'] ;
            $Loc = $row['location'] ;
        }
    }

    if (!$result)
    {
        die("Error: Data not found..");
    }

    if(isset($_POST['save']))
    {
        $name_save = $_POST['name'];
        $loc_save = $_POST['location'];

        mysqli_query($conn, "UPDATE schools SET name = '$name_save', location = '$loc_save' WHERE id = '$id'");
        echo "Saved!";

        header("Location: ../index.php");
    }
?>
<!DOCTYPE html>
<html>
<head>
    <title>Update</title>
</head>

<body>
<form method="post">
    <table>
        <tr>
            <td>Name:</td>
            <td><input type="text" name="name" value="<?php echo $Name ?>"/></td>
        </tr>
        <tr>
            <td>Location</td>
            <td><input type="text" name="location" value="<?php echo $Loc ?>"/></td>
        </tr>
        <tr>
            <td>&nbsp;</td>
            <td><input type="submit" name="save" value="save" /></td>
        </tr>
    </table>

</body>
</html>
