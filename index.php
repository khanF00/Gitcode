<!--
   Database connection -->

<?php
$servername   = "localhost";
$database = "gsufoody";
$username = "root";
$password = "faria";
$db_name = "gsufoody";

// Create connection
$conn = new mysqli($servername, $username, $password);
$dbconfig = mysqli_select_db($conn, $db_name);
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

    <link rel="stylesheet" href="https://blog.hubspot.com/wt-assets/static-files/2.0.34/core-nav/styles.css">



    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


    <style>
        <?php include 'css/styles.css'; ?>
    </style>




    <script src="FoodFunctions.js" defer></script>






</head>


<body>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>




    <!-- NAV Sart -->
    <nav class="navbar navbar-dark bg-dark">

        <nav class="nav">
            <a class="nav-link " href="#">Home</a>
            <a class="nav-link" href="pages/login.html">login/sign up</a>
            <a class="nav-link" href="pages/addNewRestaurant.html">Add New Resturant</a>
            <a class="nav-link" href="pages/AddReview.html">review</a>
            <a class="nav-link" href="#">about</a>
            <a class="nav-link" href="#">contact</a>

            <button type="button" class="btn btn-outline-primary" style="font-weight: bold; border: none;">Home</button>
            <button type="button" class="btn btn-outline-primary" style="font-weight: bold; border: none;">login/sign up</button>
            <button type="button" class="btn btn-outline-primary" style="font-weight: bold; border: none;">Add New Resturant</button>
            <button type="button" class="btn btn-outline-primary" style="font-weight: bold; border: none;">review</button>
            <button type="button" class="btn btn-outline-primary" style="font-weight: bold; border: none;">about</button>
            <button type="button" class="btn btn-outline-primary" style="font-weight: bold; border: none;">contact</button>




            <a class="nav-link" href="#">
                <input type="search" id="form1" class="form-control" /> </a>



            <a class="nav-link" href="#"><button type="button" class="btn btn-primary">
                    Search
                </button></a>

        </nav>

    </nav>

    <!-- NAV END -->




    <!-- Card Content Start -->






    <!-- Card Content END -->







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
                                <img src=" <?php echo $row['image.img']; ?>" class="card-img-top" alt="image">
                                <h2 class="card-title">  <?php echo $row['name']; ?> </h2>
                                <h2 class="card-title">  <?php echo $row['address']; ?> </h2>
                                <h2 class="card-title">  <?php echo $row['address2']; ?> </h2>
                                
                                <a href="<?php echo $row['website']; ?>">visit website</a>
                                
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






    <footer class="hsg-footer" style="background-color: #154EFC;  opacity: 0.9;">

        <section class="hsg-footer__contact-links social-cl">
            <ul class="hsg-footer__social">

                <li>
                    <a href="https://www.facebook.com/">
                        <svg class="cl-icon">
                            <use href="#facebook" />
                        </svg>
                    </a>
                </li>
                <li>
                    <a href="https://www.instagram.com/">
                        <svg class="cl-icon">
                            <use href="#instagram" />
                        </svg>
                    </a>
                </li>
                <li>
                    <a href="https://youtube.com/user/">
                        <svg class="cl-icon">
                            <use href="#youtube" />
                        </svg>
                    </a>
                </li>
                <li>
                    <a href="https://twitter.com/">
                        <svg class="cl-icon">
                            <use href="#twitter" />
                        </svg>
                    </a>
                </li>
                <li>
                    <a href="https://www.linkedin.com/">
                        <svg class="cl-icon">
                            <use href="#linkedin" />
                        </svg>
                    </a>
                </li>
                <li>
                    <a href="https://medium.com/">
                        <svg class="cl-icon">
                            <use href="#medium" />
                        </svg>
                    </a>
                </li>
                <li>
                    <a href="https://www.tiktok.com/" style="margin-right: 26px">
                        <svg class="cl-icon">
                            <use href="#tiktok" />
                        </svg>

                    </a>
                </li>

            </ul>
        </section>


        <div class="hsg-footer__logo">
            <p>Copyright © 2022 GSUFoody, Inc.</p>
        </div>

        </section>


        <script src="https://blog.hubspot.com/wt-assets/static-files/2.0.34/core-nav/scripts.js" nonce="qiAvGLngfShgBjFWRhFtmg=="></script>




    </footer>

    <script src="js/FoodFunctions.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>


</body>

</html>