<?php
include '../include/header.php';
?>
    <title>Service Request Dashboard</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/service.css">
        <div class="container1">
        <h2>Service Request Dashboard</h2>
            <div class="table-responsive">
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                    
                            <th>ID</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Number</th>
                            <th>Brand</th>
                            <th>Model</th>
                            <th>Service Type</th>
                            <th>State</th>
                            <th>City</th>
                            <th>Date</th>
                            <th>Pickup/Drop</th>
                           
                            <th>Address</th>
                            <th>Pincode</th>
                            <th>Flat Number</th>
                            <th>Registration No</th>
                            <th>Odometer</th>
                            <th>Service Requirement</th>
                            <th>Additional Requirement</th>
                           <th>Status</th>
                            <th>Action</th>
                            <th>Time Slot</th> 
                            <th>Operation</th>
                        </tr>
                    </thead>
                    <tbody id="userdata-table">
                        <!-- Data will be inserted here by JavaScript -->
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <script src="../script/service.js"></script>
