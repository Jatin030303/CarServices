<?php
// Enable error reporting
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Include the database connection file
include '../mechanic_list/db_connection.php';

// Check if the delete ID is set in the POST request
if (isset($_POST['deleteid'])) {
    $id = $_POST['deleteid'];

    // Prepare the SQL delete query
    $sql = "DELETE FROM userdata WHERE id = ?";
    
    // Initialize a prepared statement
    if ($stmt = $conn->prepare($sql)) {
        // Bind the ID parameter to the query
        $stmt->bind_param("i", $id);

        // Execute the query
        if ($stmt->execute()) {
            // Redirect to the service dashboard if the deletion is successful
            header('Location: service_dashboard.php');
            exit();
        } else {
            // If there's an error, output the error message
            die("Error executing query: " . $stmt->error);
        }

        // Close the statement
        $stmt->close();
    } else {
        // If there's an error preparing the query, output the error message
        die("Error preparing query: " . $conn->error);
    }
} else {
    // If delete ID is not set, output an error message
    die("Invalid request. 'deleteid' not set.");
}

// Close the database connection
$conn->close();
?>