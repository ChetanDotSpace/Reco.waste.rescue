<?php
if (isset($_POST['name'])){
    $server = "localhost";
    $username = "root";
    $password= "";
    $dbname = "test_db";

    $con = mysqli_connect($server,$username, $password, $dbname);
    if(!$con){
        die("connection to this database failed due to". mysqli_connect_error());
    }
    $name = $_POST ['name'];
    $mobile = $_POST ['mobile'];
    $date = $_POST ['date'];
    $weight = $_POST ['weight'];
    $address = $_POST ['address'];
    $lankdmark = $_POST ['landmark'];
    $zipcode= $_POST ['zipcode'];
    $wastetype = $_POST['wasteType'];

    $sql = "INSERT INTO `pickup details` (`name`, `mobile`, `date`, `weight`, `address`, `landmark`, `zipcode`, `waste_type`) VALUES ('$name', '$mobile', '$date', '$weight', '$address', '$lankdmark', '$zipcode', '$wastetype')";

    if($con->query($sql)==true){
        echo "data successfully inserted";
    }
    else{
        echo "error: $sql <br> $con->error";
    }
    $con->close();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=
    , initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="pickup.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
</head>
<body>
    <form action="pickup.php" method="post">
    <div class="">
        <div class="Pickup-main-container">
            <div class="left-side">
                <h2>Schedule Your Pickup</h2>
                <div class="date-time">
                    <div class="">
                     <label class="x" for="name">Enter Your Full name</label>
                     <input class="date" type="text" id="name" name="name" placeholder="Enter name">
                    </div>
                     <div class="">
                         <label for="time">Enter Mobile No.</label>
                         <input type="text" id="name" name="mobile" placeholder="9876543210">
                     </div>
                 </div>
                <div class="date-time">
                   <div class="">
                    <label class="x" for="name">Select Date</label>
                    <input class="date" type="date" id="name" name="date" placeholder="DD/MM/YY">
                   </div>
                </div>
                <div class="weight-year">
                    <div class="">
                        <label for="name">Estimated Weight</label>
                        <input class="date" type="text" id="name" name="weight" placeholder="Select weight">
                    </div>
                </div>
                <div class="address">
                    <label for="name">Enter the types of Waste*</label>
                    <input id="address-input" class="date" type="textarea" id="name" name="wasteType" placeholder="E.g. like glass, plastic, metal, furnitures, appliances">
                </div>
                <div class="address">
                    <label for="name">Enter Address*</label>
                    <input id="address-input" class="date" type="text" id="name" name="address" placeholder="Building,Apartment,Street,House no...">
                </div>
                <div class="landmark-zipcode">
                    <div class="">
                        <label for="name">Landmark</label>
                        <input class="date" type="text" id="name" name="landmark" placeholder="E.g. Near Avinash heights...">
                    </div>
                    <div class="">
                        <label for="name">Zip-code</label>
                    <input type="text" id="name" name="zipcode" placeholder="Enter pincode">
                    </div>
                </div>
        
            </div>
            <div class="right-side">
                <div class="img-1">
                    <img class="photo-1" src="boy.png" alt="">
                </div>
                <div class="img-2">
                    <img class="photo-2" src="music.jpg" alt="">
                </div>
            </div>
    
        </div>
        <div >
            <button class="button" type="submit">submit</button>
        </div>
    </div>
    </form>
</body>
</html>