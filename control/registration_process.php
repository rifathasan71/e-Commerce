<?php
session_start();
$errors = [];

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Validate Full Name
    if (strlen($_POST["name"]) == 0) {
        $errors['name'] = "Full name is required.";
    } elseif (!preg_match("/^[a-zA-Z ]+$/", $_POST["name"])) {
        $errors['name'] = "Full name should contain only alphabets and spaces.";
    }

    // Validate Email
    $email = $_POST["email"];
    if (strlen($email) == 0) {
        $errors['email'] = "Email is required.";
    } else {
        $pattern = "/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/";
        if (!preg_match($pattern, $email)) {
            $errors['email'] = "Invalid email format.";
        }
    }

    // Validate Password
    if (strlen($_POST["password"]) == 0) {
        $errors['password'] = "Password is required.";
    } elseif (!preg_match("/[0-9]/", $_POST["password"])) {
        $errors['password'] = "Password must contain at least one numeric character.";
    } elseif ($_POST["password"] !== $_POST["confirm_password"]) {
        $errors['confirm_password'] = "Passwords do not match.";
    } else {
        $hashed_password = password_hash($_POST["password"], PASSWORD_DEFAULT);
    }

    // Validate Phone Number
    if (strlen($_POST["phone"]) == 0) {
        $errors['phone'] = "Phone number is required.";
    } elseif (!ctype_alnum($_POST["phone"])) {
        $errors['phone'] = "Phone number should contain only alphanumeric characters.";
    }

    // Validate Brand Category
    if (strlen($_POST["brand_category"]) == 0) {
        $errors['brand_category'] = "Please select a brand category.";
    }

    // Validate CV Upload
    if (isset($_FILES["cv"]) && $_FILES["cv"]["error"] == 0) {
        $allowed_ext = ["pdf", "doc", "docx"];
        $file_ext = strtolower(pathinfo($_FILES["cv"]["name"], PATHINFO_EXTENSION));

        if (!in_array($file_ext, $allowed_ext)) {
            $errors['cv'] = "Invalid file type. Only PDF, DOC, or DOCX files are allowed.";
        }
    } else {
        $errors['cv'] = "Please upload your CV.";
    }

    // If no errors, process the data
    if (empty($errors)) {
        // Handle CV Upload
        $upload_dir = "../uploads/";
        $cv_path = $upload_dir . basename($_FILES["cv"]["name"]);
        if (!file_exists($upload_dir)) {
            mkdir($upload_dir, 0777, true);
        }

        if (move_uploaded_file($_FILES["cv"]["tmp_name"], $cv_path)) {
            // Prepare data for saving
            $data = [
                "name" => $_POST["name"],
                "email" => $_POST["email"],
                "password" => $hashed_password,
                "phone" => $_POST["phone"],
                "brand_category" => $_POST["brand_category"],
                "cv" => $cv_path
            ];

            // Path to the userdata.json file
            $jsonFile ="../data/userdata.json";

            // Check if the file exists
            if (!file_exists(dirname($jsonFile))) {
                mkdir(dirname($jsonFile), 0777, true);
            }

            // Load existing data from the JSON file
            $existingData = [];
            if (file_exists($jsonFile)) {
                $existingData = json_decode(file_get_contents($jsonFile), true);
            }

            // Append new user data
            $existingData[] = $data;

            // Save the updated data to the JSON file
            if (file_put_contents($jsonFile, json_encode($existingData, JSON_PRETTY_PRINT))) {
                echo "Registration successful! Data saved to JSON file.";
            } else {
                echo "Failed to save data.";
            }
        } else {
            echo "Sorry, there was an error uploading your CV.";
        }
    } else {
        // Display errors
        foreach ($errors as $field => $error) {
            echo "<p><strong>$field:</strong> $error</p>";
        }
        echo "<p><a href='manager.php'>Back</a></p>";
    }
} else {
    echo "Invalid request.";
}
?>
