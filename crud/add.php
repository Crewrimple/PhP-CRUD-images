<?php
require('addAction.php');
?>

<!DOCTYPE html>
<html>
<head>
    <title>Add Data</title>
    <style>
        body {
            background-color: #f0f0f0; 
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        h2 {
            background-color: #333; 
            color: #fff; 
            padding: 10px;
        }
        p {
            margin-top: 10px;
        }
        form {
            background-color: #fff; 
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
        }
        table {
            width: 25%;
        }
        td {
            padding: 10px;
        }
        input[type="text"] {
            width: 100%;
            padding: 5px;
            border: 1px solid #ccc;
            border-radius: 3px;
        }
        input[type="submit"] {
            background-color: #333; 
            color: #fff; 
            padding: 5px 10px;
            border: none;
            border-radius: 3px;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #555;
        }
       
        .home-button {
            background-color: #333; 
            color: #fff; 
            padding: 5px 10px;
            text-decoration: none;
            border-radius: 3px;
        }
        .home-button:hover {
            background-color: #555; 
        }
    </style>
</head>
<body>
    <h2>Add Data</h2>
    <p>
       
        <a href="index.php" class="home-button">Home</a>
    </p>

    <form action="addAction.php" method="post" name="add">
        <table width="25%" border="0">
            <tr> 
                <td>Name</td>
                <td><input type="text" name="name"></td>
            </tr>
            <tr> 
                <td>Age</td>
                <td><input type="text" name="age"></td>
            </tr>
            <tr> 
                <td>Email</td>
                <td><input type="text" name="email"></td>
            </tr>
            <tr> 
                <td></td>
                <td><input type="submit" name="submit" value="Add"></td>
            </tr>
        </table>
    </form>
</body>
</html>