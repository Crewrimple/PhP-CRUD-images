<?php
require('dbConnection.php');

if (isset($_POST['submit'])) {
    
    $name = $_POST['name'];
    $age = $_POST['age'];
    $email = $_POST['email'];

    $query = "INSERT INTO users(name, age, email) values ('$name', '$age', '$email')";

    $insert = $mysqli->query($query);

    header('location: index.php');
    // if ($insert) {
    //     echo "Database added...";
        
    //     // echo '<br><a href="index.php">HOME</a>';
    // } else {
    //     echo "No data";
    // }
    
}
?>