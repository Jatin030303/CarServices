
<?php
include'connect.php';
if(isset($_POST['submit']))
{
    $name=$_POST['fname'];
    $email=$_POST['femail'];
    $number=$_POST['fnumber'];
    $brand=$_POST['brand'];
    $model=$_POST['model'];
    $service_type=$_POST['servicess'];
    $state=$_POST['states'];
    $city=$_POST['cities'];
    $pickup_drop=$_POST['fpickup_drop'];
    $date=$_POST['fdate'];
    $address = isset($_POST['address']) ? $_POST['address'] : NULL;
    $pincode = isset($_POST['pincode']) ? $_POST['pincode'] : NULL;
    $flat_number = isset($_POST['flatNumber']) ? $_POST['flatNumber'] : NULL;
    $registration_no=$_POST['fregno'];
    $odometer=$_POST['fodometer'];
    $service_requirement=$_POST['Service_Requirment'];
    $additional_requirement = isset($_POST['add_Service_Requirment']) ? $_POST['add_Service_Requirment'] : NULL;


    $sql="insert into userdata(name,email,number,brand,model,service_type,state,city,pickup_drop,date,address,pincode,flat_number,registration_no,odometer,service_requirement,additional_requirement)
    values('$name' , '$email' , '$number' , '$brand' , '$model' , '$service_type' , '$state' , '$city' , '$pickup_drop' , '$date' , '$address' , '$pincode' , '$flat_number' , '$registration_no' , '$odometer' , '$service_requirement' , '$additional_requirement')";
    if(mysqli_query($con,$sql))
    {
        echo "<script>alert('new record inserted')</script>";
    }
    else
    {
        echo "error".mysqli_error($con);
    }
    mysqli_close($con);
}
?>