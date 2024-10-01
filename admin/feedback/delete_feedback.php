<?php
include '../mechanic_list/db_connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];

    // Prepare and bind SQL statement to delete the feedback entry
    $stmt = $conn->prepare("DELETE FROM feedback WHERE id = ?");
    $stmt->bind_param("i", $id);

    // Execute SQL statement
    if ($stmt->execute()) {
        header("Location: feedback_dashboard.php"); // Redirect back to the feedback dashboard after deletion
    } else {
        echo "Error deleting feedback: " . $conn->error;
    }

    // Close statement and connection
    $stmt->close();
    $conn->close();
}
?>