<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/main.css">
    <title>Final Project</title>
</head>
<body>
<?php include('header.php') ?>
<div class="container">
    <form method="post" action="insert.php">
    <h1>Personal Information</h1>
    <!------------------------------------------------------------------------------ Personal Information & Just Buyer-->
<div class="row">
    <div class="col-2 "><label>First Name</label> </div>
    <div class="col-6"> <input required class="form-control" type="text" name="Fname"> </div>    
</div>
<br>    
<div class="row">
    <div class="col-2"> <label>Second Name</label> </div>
    <div class="col-6"> <input required class="form-control" type="text" name="Sname"> </div>
    <br>
</div>
<br>
<div class="row">  
<div class="col-2"><label>Adress</label></div>
    <div class="col-6"><input required class="form-control" type="text" name="adress"></div>
    <br>
</div>
<br>
<div class="row">
    <div class="col-2"><label>Postal Code</label></div>
    <div class="col-6"><input class="form-control" type="text" name="zib"></div>
    <br>
</div>
<br>
<div class="row">
    <div class="col-2"><label>Date Of Birth</label></div>
    <div class="col-6"><input required class="form-control" type="date" name="dob"></div>
    <br>
</div>
<br>
<div class="row">
    <div class="col-2"><label>Email</label></div>
    <div class="col-6"><input required class="form-control" type="email" name="email"></div>
    <br>
</div>
<br>
<div class="row">
    <div class="col-2"><label>Phone Number</label></div>
    <div class="col-6"><input required class="form-control" type="text" name="phone"></div>
    <br>
</div>
<br>
<div class="row">
    <div class="col-2"><label>National ID</label></div>
    <div class="col-6"><input required class="form-control" type="" name="ssn"></div>
</div>
<br>
<div class="row">
    <div class="col-2"><label>password</label></div>
    <div class="col-6"><input required class="form-control" type="password" name="password"></div>
    <br>
</div>
<br>
<div class="row">
    <div class="col-2"><label>Confirm Password</label></div>
    <div class="col-6"><input required class="form-control" type="password" name="Cpassword"></div>
</div>
<br>
    <!-- <h3 style="display: inline;">I am </h3>
    <label style="margin-left: 130px;">Just Buyer</label>
    <input type="radio" name="client" value="buy">
    
    <label>Seller</label>
    <input type="radio" name="client" value="seller">
    
    <label>Renter</label>
    <input type="radio" name="client" value="only renter">
    
    <label>Exchanger & Renter </label>
    <input type="radio" name="client" value="rentEx">
    <br>
</radio> -->
<hr>
    <!------------------------------------------------------------------------------ IF SELLER 
<h1>Property Information</h1>

<div class="row">  
<div class="col-2"><label>Property Title</label></div>
    <textarea placeholder="More Property Details...." class="col-6"></textarea>
    
    <br>
</div>
<br>
<div class="row">  
<div class="col-2"><label>Property Details</label></div>
    <div class="col-6"><input required class="form-control" type="text" name="propDetails"></div>
    <br>
</div>
<br>
<div class="row">  
<div class="col-2"><label>Delivery Type</label></div>
    <select name="deliveryType" class="col-6">
        <option value="">Property Type</option>
        <option value="">Apartment</option>
        <option value="">Duplix</option>
        <option value="">mini-Villa</option>
        <option value="">Villa</option>
        <option value="">Building</option>
        <option value="">Office-Space</option>
    </select>
</div>
<br>
    <label>Availability :</label>
    <label style="margin-left: 100px;">Available</label><input type="radio" name="availablile">
    
    <label>NOT Available</label><input type="radio" name="availablile">
    

    <div class="row">  
    <div class="col-2"><label>Number of bedroom</label></div>
    <div class="col-6"><input required class="form-control" type="number" name="bedRoom" ></div>
    </div>
    <br>
    <div class="row">  
    <div class="col-2"><label>Number of bathroom</label></div>
    <div class="col-6"><input required class="form-control" type="number" name="bathRoom" ></div>
    </div>
    <br>
    <div class="row">  
    <div class="col-2"><label>Number of Livingroom</label></div>
    <div class="col-6"><input required class="form-control" type="number" name="livingRoom" ></div>
    </div>
    <br>
    <div class="row">  
    <div class="col-2"><label>Number of Kitchen</label></div>
    <div class="col-6"><input required class="form-control" type="number" name="kitchen" ></div>
    </div>
    <br>
    <h5>Utilities</h5>
    <div>  
    <label class="col-1">parking</label><input class="col-1" type="checkbox" name="utility" value="">
    
    <label class="col-1">gas</label><input class="col-1" type="checkbox" name="utility" value="">
    <br>
    <label class="col-1">electric</label><input class="col-1" type="checkbox" name="utility" value="">
    
    <label class="col-1">water</label><input class="col-1" type="checkbox" name="utility" value=""><br>
    <br>
    <label class="col-1">pool</label><input class="col-1" type="checkbox" name="utility" value="">
    
    <label class="col-1">GYM</label><input class="col-1" type="checkbox" name="utility" value=""><br>
    <br>
    <label class="col-1">Super-Markets</label><input class="col-1" type="checkbox" name="utility" value="">
    
    <label class="col-1">School</label><input class="col-1" type="checkbox" name="utility" value=""><br>
    <br>
    <label class="col-1">Clinics</label><input class="col-1" type="checkbox" name="utility" value=""><br><br>
    <!-- property image -->
    <!-- <label>Add Property Images</label>
    <input type="file">
 -->


    <!-- property address  -->
    <!-- <label>Location</label>
    <input type="ma"> -->

    <!-- Price Input -->
    <!-- </div>
    <br><br>
    <div class="row">  
    <div class="col-2"><label>Price $$$</label></div>
    <div class="col-6"><input required class="form-control" type="text" name="price" value="$"></div>
    <br>
</div>


<div class="row">
<label>Area / Floor Space</label>

</div>
 -->


    <br><br>
    <button class="btn btn-primary" type="submit">SUBMIT</button>
    </form>

</div>
    <!----------------------------------------------------------------- Additional  Information -->





    <!------------------------------------------------------------------------------ IF RENTER -->
    <script>
    // Set up global variable
    // var result;
    
    // function showPosition() {
    //     // Store the element where the page displays the result
    //     result = document.getElementById("result");
        
    //     // If geolocation is available, try to get the visitor's position
    //     if(navigator.geolocation) {
    //         navigator.geolocation.getCurrentPosition(successCallback, errorCallback);
    //         result.innerHTML = "Getting the position information...";
    //     } else {
    //         alert("Sorry, your browser does not support HTML5 geolocation.");
    //     }
    // };
    
    // // Define callback function for successful attempt
    // function successCallback(position) {
    //     result.innerHTML = "Your current position is (" + "Latitude: " + position.coords.latitude + ", " + "Longitude: " + position.coords.longitude + ")";
    // }
    
    // Define callback function for failed attempt
//     function errorCallback(error) {
//         if(error.code == 1) {
//             result.innerHTML = "You've decided not to share your position, but it's OK. We won't ask you again.";
//         } else if(error.code == 2) {
//             result.innerHTML = "The network is down or the positioning service can't be reached.";
//         } else if(error.code == 3) {
//             result.innerHTML = "The attempt timed out before it could get the location data.";
//         } else {
//             result.innerHTML = "Geolocation failed due to unknown error.";
//         }
//     }
// </script>
// </head>
// <body>
//     <div id="result">
//         <!--Position information will be inserted here-->
//     </div>
//     <button type="button" onclick="showPosition();">Show Position</button>

// <script src="js/production_jquery.js"></script>
// <script src="js/bootstrap.bundle.js"></script>
// </body>
// </html>