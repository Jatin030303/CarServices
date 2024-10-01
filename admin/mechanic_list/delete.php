<?php
// Enable error reporting
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Include the database connection file
include 'db_connection.php';

// Check if the delete ID is set in the POST request
if (isset($_POST['deleteid'])) {
    $id = $_POST['deleteid'];

    // JavaScript confirmation dialog
    echo "<script>
            var confirmDelete = confirm('Are you sure you want to delete this record?');
            if (confirmDelete) {
                // If confirmed, proceed with deletion
                window.location.href = 'delete_confirm.php?id=$id';
            } else {
                // If canceled, redirect back to the mechanic dashboard
                window.location.href = 'mechanic_dashboard.php';
            }
          </script>";
} else {
    // If delete ID is not set, output an error message
    die("Invalid request. 'deleteid' not set.");
}

// Close the database connection
$conn->close();
?>