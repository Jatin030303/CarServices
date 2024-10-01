<?php
include '../include/header.php';
?>
    <title>Driver</title>
    <link rel="stylesheet" href="../css/driver.css">
        <div class="table-container">
            <h2>Driver List</h2>
            <button class="btn add-driver-btn" onclick="openAddDriverModal()">Add Driver</button>
            <table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Address</th>
            <th>Licence</th>
            <th>Experience</th>
            <th>Status</th>
            <th>Action</th>
            <th>Operation</th>
        </tr>
    </thead>
    <tbody>
        <?php
        include '../mechanic_list/db_connection.php';

        $sql = "SELECT id, name, email, phone, address, licence, experience, status FROM driver";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo "<tr>
                        <td>" . $row["id"] . "</td>
                        <td>" . $row["name"] . "</td>
                        <td>" . $row["email"] . "</td>
                        <td>" . $row["phone"] . "</td>
                        <td>" . $row["address"] . "</td>
                        <td>" . $row["licence"] . "</td>
                        <td>" . $row["experience"] . "</td>
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
                            <button class='btn delete-btn' data-id='" . $row["id"] . "'>Delete</button>
                        </td>
                    </tr>";
            }
        } else {
            echo "<tr><td colspan='10'>No records found</td></tr>";
        }
        $conn->close();
        ?>
    </tbody>
</table>
        </div>
        <div class="overlay" id="overlay"></div>
    <div class="popup-form" id="popup-form">
    <h1>Driver Dashboard</h1>
    <form action="process_add_driver.php" method="post">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required><br>
        
        <label for="email">Email:</label>
        <input type="text" id="email" name="email" required><br>
        
        <label for="phone">Phone:</label>
        <input type="text" id="phone" name="phone" required><br>
        
        <label for="address">Address:</label>
        <input type="text" id="address" name="address" required><br>

        <label for="licence">Licence:</label>
        <input type="text" id="licence" name="licence" required><br>
       
        <label for="experience">Experience:</label>
        <input type="number" id="experience" name="experience" required><br>

        <button type="submit" class="btn">Submit</button>
    </form>
    </div>
    
    <script src="../script/driver.js"></script>
