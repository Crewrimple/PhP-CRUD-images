<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    if (isset($_FILES["image"]) && $_FILES["image"]["error"] == 0) {
        
        $uploadDir = "uploads/";

        if (!file_exists($uploadDir)) {
            mkdir($uploadDir, 0777, true); 
        }

        
        $fileName = $_FILES["image"]["name"];
        $fileTmpName = $_FILES["image"]["tmp_name"];
        $fileType = $_FILES["image"]["type"];
        $fileSize = $_FILES["image"]["size"];

        $uniqueFileName = uniqid() . "_" . $fileName;

        $allowedTypes = array("image/jpeg", "image/png", "image/gif");

        if (in_array($fileType, $allowedTypes)) {
          
            if (move_uploaded_file($fileTmpName, $uploadDir . $uniqueFileName)) {
              
                require_once("dbConnection.php");

                if ($mysqli->connect_error) {
                    die("Connection failed: " . $mysqli->connect_error);
                }

                $insertQuery = "INSERT INTO uploaded_images (file_name, file_path) VALUES (?, ?)";
                $stmt = $mysqli->prepare($insertQuery);

                
                if ($stmt) {
                    
                    $stmt->bind_param("ss", $uniqueFileName, $uploadDir);

                  
                    if ($stmt->execute()) {
                        echo "Файл успешно загружен и информация сохранена в базе данных!";
                    } else {
                        echo "Ошибка при сохранении информации в базе данных: " . $stmt->error;
                    }

                    $stmt->close();
                } else {
                    echo "Ошибка при подготовке запроса: " . $mysqli->error;
                }

             
                $mysqli->close();
            } else {
                echo "Ошибка при загрузке файла.";
            }
        } else {
            echo "Недопустимый тип файла. Разрешены файлы JPEG, PNG и GIF.";
        }
    } else {
        echo "Ошибка: " . $_FILES["image"]["error"];
    }
}
?>

