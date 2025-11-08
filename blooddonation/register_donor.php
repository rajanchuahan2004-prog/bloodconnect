<?php
// Include database configuration
include 'config.php';

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $fullName = $_POST['fullName'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $bloodType = $_POST['bloodType'];
    $age = $_POST['age'];
    $weight = $_POST['weight'];
    $address = $_POST['address'];
    $city = $_POST['city'];
    $lastDonation = $_POST['lastDonation'] ? $_POST['lastDonation'] : NULL;
    
    // Prepare and bind
    $stmt = $conn->prepare("INSERT INTO donors (full_name, email, phone, blood_type, age, weight, address, city, last_donation) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssssiisss", $fullName, $email, $phone, $bloodType, $age, $weight, $address, $city, $lastDonation);
    
    // Execute the statement
    if ($stmt->execute()) {
        // Redirect with success status
        header("Location: index.php?status=success");
    } else {
        // Redirect with error status
        header("Location: index.php?status=error");
    }
    
    // Close statement and connection
    $stmt->close();
    $conn->close();
} else {
    // Redirect if accessed directly
    header("Location: index.php");
}
?>