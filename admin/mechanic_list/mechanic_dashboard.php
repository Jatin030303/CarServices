<?php
include '../include/header.php';
?>
    <title>Mechanic Dashboard</title>
    <link rel="stylesheet" href="../css/mechanic.css">
        <div class="table-container">
            <h2>Mechanic List</h2>
            <button class="btn add-mechanic-btn" onclick="openAddMechanicModal()">Add Mechanic</button>
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Address</th>
                        <th>Status</th>
                        <th>Action</th>
                        <th>Operation</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    include 'db_connection.php';

                    $sql = "SELECT id, name, email, phone, address, status, action FROM mechanic";
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                        while($row = $result->fetch_assoc()) {
                            echo "<tr>
                            <td>" . $row["id"] . "</td>
                            <td>" . $row["name"] . "</td>
                            <td>" . $row["email"] . "</td>
                            <td>" . $row["phone"] . "</td>
                            <td>" . $row["address"] . "</td>
                            <td>" . $row["status"] . "</td>
                            <td>
                                <select class='action-button'>
                                    <option value=''>Select</option>
                                    <option value='active'>Active</option>
                                    <option value='idle'>Idle</option>
                                    <option value='holiday'>Holiday</option>
                                </select>
                            </td>
                          <td>
    <button class='btn delete-button' data-id='" . $row['id'] . "'>Delete</button>
</td>
                        </tr>";
                        }
                    } else {
                        echo "<tr><td colspan='7'>No records found</td></tr>";
                    }
                    $conn->close();
                    ?>
                </tbody>
            </table>
        </div>
    </div>
    <div class="overlay" id="overlay"></div>
    <div class="popup-form" id="popup-form">
        <h2>Add Mechanic</h2>
        <form id="add-mehanic-form" action="process_add_mechanic.php" method="POST">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>
            
            <label for="email">Email:</label>
            <input type="text" id="email" name="email" required>
            
            <label for="phone">Phone:</label>
            <input type="text" id="phone" name="phone" required>
            
            <label for="address">Address:</label>
            <input type="text" id="address" name="address" required>
            <button type="submit" class="btn">Submit</button>
        </form>
    </div>

    <script src="../script/mechanic.js"></script>
