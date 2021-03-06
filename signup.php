<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kerala Tourism</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>
<body class="bgcolor">

    <!-- Navbar begins here -->
    
    <nav class="navbar navbar-expand-sm bg-success navbar-dark">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="about.php">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="signin.php">Sign In</a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="signup.php">Sign Up</a>
        </li>
        
      </ul>
    </nav> 
    <!-- Navbar ends here -->

    <div class="container">
      

        <center><p class="txtstyle">Sign Up</p></center>
        <div class="row">
          <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
            <img src="./images/Jatayu.jpeg" height="700" width="350" alt="">
          </div>
              
              <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                 
                  
                  <table class="table">
                      <tr>
                          <td>First name</td>
                          <td><input type="text" class="form-control"></td>
                      </tr>
                      <tr>
                          <td>Last name</td>
                          <td><input type="text" class="form-control"></td>
                      </tr>
                      <tr>
                        <td>Mobile</td>
                        <td><input type="tel" class="form-control"></td>
                      </tr>
                      <tr>
                        <td>Place</td>
                        <td><input type="text" class="form-control"></td>
                      </tr> 
                      <tr>
                          <td>Gender</td>
                          <td><input type="radio" name="gender">Male
                              <br><br>
                              <input type="radio" name="gender">Female
                          </td>
                      </tr>
                      <tr>
                        <td>Email</td>
                        <td><input type="email" class="form-control"></td>
                      </tr>
                      <tr>
                        <td>Password</td>
                        <td><input type="password" class="form-control"></td>
                      </tr>
                      <tr>
                        <td>Confirm Password</td>
                        <td><input type="password" class="form-control"></td>
                      </tr>
                      <tr>
                          <td><input type="checkbox"></td>
                          <td>By signing up I agree to the terms and conditions</td>
                      </tr>
                      <tr>
                        <td></td>
                        <td><a href="signin.php">Already have an account!!</a></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td><button class="btn btn-success">Sign Up</button></td>
                      </tr>
                  </table>
                  
              </div>
              <!-- <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2">
                      
                      
              </div> -->
              
                  

</div>
</div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>