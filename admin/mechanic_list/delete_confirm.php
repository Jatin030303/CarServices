<?php
include 'db_connection.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Prepare the SQL delete query
    $sql = "DELETE FROM mechanic WHERE id = $id";

    // Execute the query
    if ($conn->query($sql) === TRUE) {
        // Redirect to the mechanic dashboard if the deletion is successful
        header('Location: mechanic_dashboard.php');
        exit();
    } else {
        // If there's an error, output the error message
        echo "Error executing query: " . $conn->error;
    }
} else {
    // If ID is not set, output an error message
    echo "Invalid request. 'id' not set.";
}

// Close the database connection
$conn->close();
?>