<?php
include '../include/header.php';
?>
    <title>Document</title>
    <link rel="stylesheet" href="../css/feedback.css">
        <div class="table-container">
            <h2>Feedback</h2>
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Message</th>
                        <th>Operation</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    include '../mechanic_list/db_connection.php';

                    $sql = "SELECT id, name, email, message_type FROM feedback";
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                        while($row = $result->fetch_assoc()) {
                            echo "<tr>
                                    <td>" . $row["id"] . "</td>
                                    <td>" . $row["name"] . "</td>
                                    <td>" . $row["email"] . "</td>
                                    <td>" . $row["message_type"] . "</td>
                                    <td>
                                        <form method='post' action='delete_feedback.php'>
                                            <input type='hidden' name='id' value='" . $row["id"] . "'>
                                            <button type='submit' class='btn'>Delete</button>
                                        </form>
                                    </td>
                                  </tr>";
                        }
                    } else {
                        echo "<tr><td colspan='5'>No records found</td></tr>";
                    }
                    $conn->close();
                    ?>
                </tbody>
            </table>
        </div>
    </div>
