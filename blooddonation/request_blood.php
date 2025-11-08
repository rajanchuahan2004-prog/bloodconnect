<?php
// Include database configuration
include 'config.php';

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $patientName = $_POST['patientName'];
    $contactPerson = $_POST['contactPerson'];
    $contactPhone = $_POST['contactPhone'];
    $bloodTypeNeeded = $_POST['bloodTypeNeeded'];
    $hospital = $_POST['hospital'];
    $unitsNeeded = $_POST['unitsNeeded'];
    $urgency = $_POST['urgency'];
    $additionalInfo = $_POST['additionalInfo'];
    
    // Prepare and bind
    $stmt = $conn->prepare("INSERT INTO blood_requests (patient_name, contact_person, contact_phone, blood_type_needed, hospital, units_needed, urgency, additional_info) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("sssssiss", $patientName, $contactPerson, $contactPhone, $bloodTypeNeeded, $hospital, $unitsNeeded, $urgency, $additionalInfo);
    
    // Execute the statement
    if ($stmt->execute()) {
        // Redirect with success status
        header("Location: index.php?request_status=success");
    } else {
        // Redirect with error status
        header("Location: index.php?request_status=error");
    }
    
    // Close statement and connection
    $stmt->close();
    $conn->close();
} else {
    // Redirect if accessed directly
    header("Location: index.php");
}
?>