<?php
include "php/config.php";
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="styles.css">

        <title>Restaurants</title>
        
    </head>
    <body>
        <?php
        if (isset($_POST['restaurant-search-submit'])) {
            $name = trim(mysqli_real_escape_string($conn, $_POST['restaurant-search-name']));

        
            if (empty($name)){
                header('Location: search.php?search=empty');
            } else {
                $sql = "SELECT * FROM restaurant WHERE res_name LIKE '%$name%'";
                $result = mysqli_query($conn, $sql);
                $queryResult = mysqli_num_rows($result);
                if (queryResult > 0){
                    while ($row = mysqli_fetch_assoc($result)){
                        echo "<a href='listWaiters.php?resName=".$row['res_name']."&address=".$row['res.address']."'><div class='card' style='width: 18rem;'>
                                <div class='card-body'>
                                    <h5 class='card-title'>".$row['res_name']."</h5>
                                    <h6 class='card-subtitle mb-2 text-muted'>".$row['res_address']."</h6>
                                </div>
                            </div></a>";
                    }
                } else {
                    echo "There are no results matching your search!";
                    
                    
                }
            }
        }
        ?>


        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    </body>
</html>