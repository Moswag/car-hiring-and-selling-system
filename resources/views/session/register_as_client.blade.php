<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from wpkixx.com/html/wooble/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 11 Oct 2019 05:59:16 GMT -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content=""/>
    <meta name="keywords" content=""/>
    <title>Car Hiring and Selling Finder Portal</title>
    <link rel="icon" type="image/png" href="images/fav.png">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/color.css">
    <link rel="stylesheet" href="css/responsive.css">
</head>
<body>
<!-- Start Page Loading -->
<div id="loader-wrapper">
    <div id="loader"></div>
    <div class="loader-section section-left"></div>
    <div class="loader-section section-right"></div>
</div>
<div class="panel-layout">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="admin-lock vh100">
                    <div class="admin-form">
                        <div class="logo"><img src="images/car.png" alt=""></div>
                        <h4>Sign Up As Client</h4>
                        <span>Please enter your user information</span>
                        <form method="post" action="{{route('save_client')}}">
                            <label><i class="fa fa-user"></i></label>
                            <input type="text" placeholder="Name">
                            <label><i class="fa fa-user"></i></label>
                            <input type="text" placeholder="Surname" required>
                            <label><i class="fa fa-user"></i></label>
                            <input type="text" placeholder="National Id" required>
                            <label><i class="fa fa-envelope"></i></label>
                            <input type="email" placeholder="Email Address" required>
                            <label><i class="fa fa-user"></i></label>
                            <input type="number" placeholder="Phonenumber" required>
                            <label><i class="fa fa-user"></i></label>
                            <input type="text" placeholder="Address" required>
                            <label><i class="fa fa-unlock-alt"></i></label>
                            <input type="password" placeholder="Password" required>
                            <label><i class="fa fa-unlock-alt"></i></label>
                            <input type="password" placeholder="Confirm Password" required>


                            <button type="submit">sign in</button>
                        </form>
                        <span>Already have an account? <a href="{{route('index')}}" title="">Sign In</a></span></div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/custom.js"></script>
</body>

<!-- Mirrored from wpkixx.com/html/wooble/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 11 Oct 2019 05:59:16 GMT -->
</html>
