<?php
require_once("dbConnection.php");
$id = $_GET['id'];
$result = mysqli_query($mysqli, "SELECT * FROM users WHERE id = $id");
$resultData = mysqli_fetch_assoc($result);
$name = $resultData['name'];
$age = $resultData['age'];
$email = $resultData['email'];
?>
<!DOCTYPE html>
<html>
<head>    
    <title>Edit Data</title>
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
            width: 100%;
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
    <h2>Edit Data</h2>
    <p>
        
        <a href="index.php" class="home-button">Home</a>
    </p>
    
    <form name="edit" method="post" action="editAction.php">
        <table border="0">
            <tr> 
                <td>Name</td>
                <td><input type="text" name="name" value="<?php echo $name; ?>"></td>
            </tr>
            <tr> 
                <td>Age</td>
                <td><input type="text" name="age" value="<?php echo $age; ?>"></td>
            </tr>
            <tr> 
                <td>Email</td>
                <td><input type="text" name="email" value="<?php echo $email; ?>"></td>
            </tr>
            <tr>
                <td><input type="hidden" name="id" value="<?php echo $id; ?>"></td>
                <td><input type="submit" name="update" value="Update"></td>
            </tr>
        </table>
    </form>
</body>
</html>