<!--
   Database connection -->

   <?php
      $server_name='localhost';
      $user_name='id19958785_fariafoody';
      $password="5Uy}|o!A4x[c6G!R";
      $database="id19958785_gsufoody";

      $conn=new mysqli($server_name,$user_name,$password,$database);
      
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    echo "Connected successfully";
    ?>

<!DOCTYPE html>
<html>

<head>

    <meta charset="UTF—8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GSUfoody web app</title>


    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


    <style>
        <?php include 'css/styles.css'; ?>
    </style>


</head>


<body>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>


    <!-- NAV Sart -->
    <nav class="navbar navbar-dark bg-dark">

        <nav class="nav">
            <a class="nav-link " href="index.php">Home</a>
            <a class="nav-link" href="pages/login.html">login/sign up</a>
            <a class="nav-link" href="pages/addNewRestaurant.html">Add New Resturant</a>
            <a class="nav-link" href="pages/AddReview.html">review</a>
            <a class="nav-link" href="pages/about.html">about</a>
            <a class="nav-link" href="#">contact</a>
            <a class="nav-link" href="#">
                <input type="search" id="form1" class="form-control" /> </a>
            <a class="nav-link" href="#"><button type="button" class="btn btn-primary">
                    Search
                </button></a>
        </nav>
    </nav>

    <!-- NAV END -->


    <div class="bg-img">
            
                </div>

        <!-- Card Content Start -->
        <div class="container py-5">
            <div class="row mt-4">

                <?php
                $query = "SELECT * FROM restaurants";
                $query_run = mysqli_query($conn, $query);
                $checkdb = mysqli_num_rows($query_run) > 0;

                if ($checkdb) {
                    while ($row = mysqli_fetch_array($query_run)) {
                ?>
                        <div class="col-md-4 ">
                            <div class="card">
                                <div class="card-body">

                                    <img src="<?php echo $row['image']; ?>" alt="image" style="width:250px;height:200px;">

                                    <h2 class="card-title"> <?php echo $row['name']; ?> | <a href="<?php echo $row['website']; ?>">website</a></h2>
                                    <h5 class="card-title"> <?php echo $row['address']; ?> </h5>
                                    <h5 class="card-title"> <?php echo $row['address2']; ?> </h5>
                                    <h5> <?php echo $row['description']; ?> </5>
                                </div>
                            </div>

                        </div>
                <?php

                    }
                } else {
                }
                ?>
            </div>
        </div>

        <!-- Card Content END -->


    </div>

   
    <!-- center Content END -->




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>



    <!-- Copyright -->
    <div class="text-center text-dark p-3" style="background-color: rgba(0, 0, 0, 0.2);">

        <h6 class="text-dark" style="height: .5in;"> © 2020 Copyright: GSUFoody</h6>
    </div>
    <!-- Copyright -->


</body>

</html>