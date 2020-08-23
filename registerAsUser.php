<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="styles.css"/>

        <title>Login</title>
 
    </head>
    <body class="regUserBody">
        <?php include 'php/navbar.component.php'; ?>


        <form class="form-signup" action="php/signup.script.php">
            <div class="container">


              <div class="list-group">
                    <a class="list-group-item active centre" style="color: white;">Sign Up</a>
                    <a class="list-group-item list-group-item-action centre">Enter your information to register as a user.</a>
                    
              </div>
          
              <input type="email" placeholder="EMAIL" name="user-signup-email" required>
          
              <input type="password" placeholder="PASSWORD" name="user-signup-password" required>
          
              <input type="password" placeholder="RE-TYPE PASSWORD" name="user-signup-password-conf" required>

              <input type="text" placeholder="NAME WRITTEN ON THE CARD" name="user-signup-name">

              <input type="text" placeholder=" CREDIT CARD NUMBER" name="user-signup-card-number">

              <input type="text" placeholder="CVV" name="cvv">
                
                
                
              <div class="list-group centre">
              <a class="list-group-item active centre expiry-date" style="color: white;">Expiration Date</a>
              </div>
                    
              <select name="month-form" class="expiry border">
              <option value="JAN">JANUARY</option>
              <option value="FEB">FEBRUARY </option>
              <option value="MAR">MARCH</option>
              <option value="APR">APRIL</option>
              <option value="MAY">MAY</option>
              <option value="JUN">JUNE</option>
              <option value="JUL">JULY</option>
              <option value="AUG">AUGUST</option>
              <option value="SEP">SEPTEMBER</option>
              <option value="OCT">OCTOBER</option>
              <option value="NOV">NOVEMBER</option>
              <option value="DEC">DECEMBER</option>
              </select>

              <select name="year-form" class="expiry border">
              <option value="2017"> 2017</option>
              <option value="2018"> 2018</option>
              <option value="2019"> 2019</option>
              <option value="2020"> 2020</option>
              <option value="2021"> 2021</option>
              <option value="2022"> 2022</option>
              <option value="2023"> 2023</option>
              <option value="2024"> 2024</option>
              </select>        
          
              
              <button type="submit" class="btn btn-primary btn-lg finalbtn">Submit</button>
              
            </div>
        </form>

        
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    </body>
</html>