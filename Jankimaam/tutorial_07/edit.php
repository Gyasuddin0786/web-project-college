<?php
session_start();

// Check if the user is logged in
if(!isset($_SESSION['stulogin']) || $_SESSION['stulogin'] !== true) {
    header("location: login.php");
    exit;
}

// Include database connection file
include 'conn.php';

// Fetch user data
$username = $_SESSION['username'];
$query = "SELECT * FROM user WHERE username = '$username'";
$result = $conn->query($query);

if ($result->num_rows>0) {
    $userData = $result->fetch_assoc();
} else {
    echo "User data not found.";
    exit;
}

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $name = $_POST['name'];

    // Handle profile picture upload
    if(!empty($_FILES["profile_pic"]["name"])) {
        $targetDir = "profile_pictures/";
        $targetFile = $targetDir .basename($_FILES["profile_pic"]["name"]);
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

        // Check if image file is a actual image or fake image
        $check = getimagesize($_FILES["profile_pic"]["tmp_name"]);
        if ($check !== false) {
            $uploadOk = 1;
        } else {
            echo "File is not an image.";
            $uploadOk = 0;
        }

        // Check file size
        if ($_FILES["profile_pic"]["size"] >500000) {
            echo "Sorry, your file is too large.";
            $uploadOk = 0;
        }

        // Allow certain file formats
        if (
            $imageFileType != "jpg"&& $imageFileType != "png"&& $imageFileType != "jpeg"
            && $imageFileType != "gif"
        ) {
            echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
            $uploadOk = 0;
        }

        // Check if $uploadOk is set to 0 by an error
        if ($uploadOk == 0) {
            echo "Sorry, your file was not uploaded.";
        } else {
            if (move_uploaded_file($_FILES["profile_pic"]["tmp_name"], $targetFile)) {
                // Update user information in the database including the new profile picture filename
                $updateQuery = "UPDATE user SET name='$name', profile_pic='$targetFile' WHERE username='$username'";
                if ($conn->query($updateQuery) === TRUE) {
                    // Redirect to profile page after successful update
                    header("location: header.php");
                    exit;
                } else {
                    echo "Error updating record: " . $conn->error;
                }
            } else {    
                echo "Sorry, there was an error uploading your file.";
            }
        }
    } else {
        // Update user information in the database excluding the profile picture
        $updateQuery = "UPDATE user SET name='$name' WHERE username='$username'";
        if ($conn->query($updateQuery) === TRUE) {
            // Redirect to profile page after successful update
            header("location: main.php");
            exit;
        } else {
            echo "Error updating record: " . $conn->error;
        }
    }
}
?>
