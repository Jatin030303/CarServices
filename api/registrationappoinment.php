<?php
?>
    <title>Car Service Appointment</title>
    <link rel="stylesheet" href="./css/reg.css">
    <div class="form-container">
        <form id="myForm" method="post" action="regdata.php">
            <div id="mainForm">
                <div class="small_container">
                    <div class="inside_container">
                        <p>Name</p>
                        <input type="text" name="fname" id="fname" required>
                    </div>  
                    <div class="inside_container">
                        <p>Email</p>
                        <input type="email" name="femail" id="femail" required>
                    </div>        
                </div>

                <div class="small_container">
                    <div class="inside_container">
                        <p>Number</p>
                        <input type="tel" name="fnumber" id="fnumber" required>
                    </div>  
                    <div class="inside_container">
                        <p>Brand</p>
                        <select id="brand" name="brand" value="brand" onchange="filterModels()" style="width: 47%;" required>
                            <option value="">--Select a brand--</option>
                            <option value="maruti">Maruti</option>
                            <option value="hyundai">Hyundai</option>
                            <option value="tata">Tata</option>
                            <option value="mahindra">Mahindra</option>
                        </select>
                    </div>   
                </div>

                <div class="small_container">
                    <div class="inside_container">
                        <p>Model</p>
                        <select id="model" name="model" value="model" style="width: 47%;" required>
                            <option value="">--Select a model--</option>
                        </select>
                    </div>  
                    <div class="inside_container">
                        <p>Service Type</p>
                        <select id="servicess" name="servicess" value="servicess" style="width: 47%;" required>
                            <option value="">--Select Service--</option>
                            <option>Full Service</option>
                            <option>Basic Service</option>
                            <option>Express Service</option>
                            <option>Specialized Service</option>
                        </select>
                    </div>  
                </div>

                <div class="small_container">
                    <div class="inside_container">
                        <p>State</p>
                        <select id="states" name="states" value="states" style="width: 47%;" required>
                            <option value="">--Select State--</option>
                            <option>Himachal Pradesh</option>
                        </select>
                    </div>  
                    <div class="inside_container">
                        <p>City</p>
                        <select id="cities" name="cities" value="cities"  style="width: 47%;" required>
                            <option value="">--Select City--</option>
                            <option>Anni</option>
                            <option>Baddi</option>
                            <option>Bilaspur</option>
                            <option>Chamba</option>
                            <option>Hamirpur</option>
                            <option>Kangra</option>
                            <option>Kullu</option>
                            <option>Manali</option>
                            <option>Nadaun</option>
                            <option>Shimla</option>
                        </select>
                    </div>  
                </div>

                <div class="small_container">
                    <div class="inside_container">
                        <p>Pickup & Drop Required</p>
                        <label>
                            <input type="radio" name="fpickup_drop" id="fyes" value="Yes" onclick="toggleAdditionalFields(true)" required> Yes
                        </label>
                        <label>
                            <input type="radio" name="fpickup_drop" id="fno" value="No" onclick="toggleAdditionalFields(false)" required> No
                        </label>
                    </div>  
                    <div class="inside_container">
                        <p>Date</p>
                        <input type="date" name="fdate" id="fdate" required>
                    </div>  
                </div>

                <div class="small_container additional-fields" id="additionalFields">
                    <div class="inside_container">
                        <p>Location Address</p>
                        <input type="text" id="address" name="address" style="width: 101%; padding: 8px;" disabled>
                    </div>
                    <div class="inside_container">
                        <p>Pin Code</p>
                        <input type="text" id="pincode" name="pincode" disabled>
                    </div>
                    <div class="inside_container">
                        <p>Flat Number</p>
                        <input type="text" id="flatNumber" name="flatNumber" style="width: 74%; padding: 8px;" disabled>
                    </div>
                </div>

                <div class="small_container">
                    <div class="inside_container">
                        <p>Registration No.</p>
                        <input type="text" name="fregno" id="fregno" required>
                    </div>  
                    <div class="inside_container">
                        <p>Odometer(Km's)</p>
                        <input type="number" name="fodometer" id="fodometer" required>
                    </div>        
                </div>

                <div class="small_container full-width">
                    <p>Service Requirement</p>
                    <textarea name="Service_Requirment" rows="3" cols="90" required></textarea>
                </div>

                <div class="small_container full-width">
                    <p>Additional Requirement (if any)</p>
                    <textarea name="add_Service_Requirment" rows="2" cols="90"></textarea>
                </div>
            </div>
            <input type="submit" name="submit" id="btn1" value="submit">
        </form>
    </div>
    <script src="./script/reg.js"></script>
