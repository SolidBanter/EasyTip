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
        <form class="form-signup" action="php/signup.script.php" method="post">
            <div class="container">

              <div class="list-group">
                    <a class="list-group-item active centre" style="color: white;">Sign Up</a>
                    <a class="list-group-item list-group-item-action centre">Enter your information to register as a business.</a>
                    
              </div>
          
              <input type="email" placeholder="EMAIL" name="bus-signup-email" required>
          
              <input type="password" placeholder="PASSWORD" name="bus-signup-password" required>
          
              <input type="password" placeholder="RE-TYPE PASSWORD" name="bus-signup-password-conf" required>
      
              <input type="text" placeholder="BUSINESS NAME" name="bus-signup-name" required>
      
              <input type="text" placeholder="LOCATION" name="bus-signup-location" required>
              
              <button type="submit" class="btn btn-primary btn-lg finalbtn">Submit</button>
              
            </div>
        </form>
