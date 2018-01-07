<?php include('server.php') ?>


<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Log In and Registration Form Using Bootstrap</title>
    <!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
   <!-- Birthday style -->
   <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">

</head>
<body>
    <div class="container">
        <div class="row text-center  ">
            <div class="col-md-12">
                <br /><br />
                <h2>Admin Registration</h2>
               
                <h5>( Enter your details to get access )</h5>
                 <br />
            </div>
        </div>
    <form role="form" method="post" action="server.php">
         <div class="form-group row">
          <label for="example-text-input" class="col-2 col-form-label">Name</label>
          <div class="col-10">
            <span class="input-group-addon"><i class="fa fa-circle-o-notch"  ></i></span>
            <input class="form-control" name="regname" type="text" value="" id="example-text-input">
          </div>
        </div>
        <div class="form-group row">
          <label for="example-search-input" class="col-2 col-form-label">Username</label>
          <div class="col-10">
            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
            <input class="form-control" name="regusername" type="text" value="" id="example-search-input">
          </div>
        </div>
        <div class="form-group row">
          <label for="example-email-input" class="col-2 col-form-label">Email</label>
          <span class="input-group-addon">@</span>
          <div class="col-10">
            <input class="form-control" name="regemail" type="text" value="" id="example-email-input">
          </div>
        </div>
        <div class="form-group row">
          <label for="example-email-input" class="col-2 col-form-label">Favorite Music</label>
          <div class="col-10">
            <span class="input-group-addon"><i class="glyphicon glyphicon-music"></i></span>
            <input class="form-control" name="regfavoritemusic" type="text" value="" id="example-email-input">
          </div>
        </div>
        <div class="form-group row">
          <label for="example-url-input" class="col-2 col-form-label">Date of Birth</label>
          <div class="col-10">
            <span class="input-group-addon"><i class="fa fa-birthday-cake" aria-hidden="true"></i></span>
            <input class="form-control" name="regbirth" type="text" value="" id="zdatepicker">
          </div>
        </div>
        <!--<div class="form-group row">
          <label for="example-tel-input" class="col-2 col-form-label">Telephone</label>
          <div class="col-10">
            <input class="form-control" type="tel" value="1-(555)-555-5555" id="example-tel-input">
          </div>
        
        </div>-->
        <div class="form-group row">
          <label for="example-password-input" class="col-2 col-form-label">Password</label>
          <div class="col-10">
            <span class="input-group-addon"><i class="fa fa-lock"  ></i></span>
            <input class="form-control" name="regpassword" type="password" value="" id="">
          </div>
        </div>
        <div class="form-group row">
          <label for="example-password-input" class="col-2 col-form-label">Confirm Password</label>
          <div class="col-10">
            <span class="input-group-addon"><i class="fa fa-lock"  ></i></span>
            <input class="form-control" name="regpassword" type="password" value="" id="">
          </div>
        </div>
        <button type="submit" class="btn btn-success" name="register">Register Me</button>
    </div>
</form>
</body>
</html>