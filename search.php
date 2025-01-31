<?php
  include 'components/config.php';
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Easy StartUps</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="css/index.css?v=<?php $version?>">
  </head>
  <body>
    <?php

        session_start();
        $login = false;

        if(isset($_SESSION['loggedin'])){
            $login = true;
        }
        require "components/_navbar.php";

        $search = mysqli_real_escape_string($conn, $_GET['query']);
    ?>


    <div class = "container">
        <h1 class = "my-3">Search results for <?php echo $search ?> </h1>
        <h5>Helluuu ggg</h5>
        <h5>Helluuu ggg</h5>
        <h5>Helluuu ggg</h5>
        <h5>Helluuu ggg</h5>
        <h5>Helluuu ggg</h5>
        <h5>Helluuu ggg</h5>
        <h5>Helluuu ggg</h5>
        <h5>Helluuu ggg</h5>
    </div>
 


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>