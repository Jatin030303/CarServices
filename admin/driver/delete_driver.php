<?php
include '../mechanic_list/db_connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_NUMBER_INT);

    if ($id) {
        $stmt = $conn->prepare("DELETE FROM driver WHERE id = ?");
        $stmt->bind_param("i", $id);

        if ($stmt->execute()) {
            echo "success";
        } else {
            echo "error: " . $stmt->error;
        }

        $stmt->close();
    } else {
        echo "Invalid ID.";
    }

    $conn->close();
} else {
    echo "Invalid request method.";
}
?>