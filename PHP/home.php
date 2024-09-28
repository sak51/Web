<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
    <link href="about.html">
    <link rel="stylesheet" href="style2.css">
    <style>
        header {
            background-color: #333333;
        }

        .carousel-inner {
            height: 650px;
        }

        .property-amenities {
            margin-inline: 80px;
        }

        #custom-bg {
            background-color: #2ec1ac;
        }

        #custom-bg:hover {
            background-color: #279e8c;
        }

        
    </style>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>

    <link href="style2.css" rel="stylesheet">
</head>

<body style="background-color:white;">
    <header class="p-3 bg-rgb(167, 173, 179) text-black">
        <div class="navbar">
            <img src="hotel logo.png" alt="myHotel" style="border-radius:40% ; width: 5%;">
            <div class="navlinks">
                <ul class="nav justify-content-end" style="list-style: none;">
                    <ul class="nav nav-tabs">
                        <li class="nav-item">
                            <a class="nav-link " aria-current="page" href="home.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="about.html">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link"
                                href="https://docs.google.com/forms/d/e/1FAIpQLSdVHgwxq5KSeGtV0BYx9PmZXj3hGq0Rj-iWRzmY67tWRJiF8g/viewform?embedded=true"
                                width="640" height="953" frameborder="0" marginheight="0" marginwidth="0">Contact</a>
                        </li>
                        <li>
                            <a class="nav-link" href="login.php">Login</a>
                        </li>
                    </ul>
                </ul>
            </div>
        </div>
    </header>


    <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="first image.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="second image.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="third image.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="restaurant.jpg" class="d-block w-100" alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <!--cards-->
    <div class="container">
        <div class="row">
            <div class="col-3">
                <a href="room1.html">
                    <div class="card " style="width:13rem;">
                        <img class="card-img-top " src="mumbai.png">
                </a>
            </div>
        </div>
        <div class="col-3">
            <a href="room2.html">
                <div class="card " style="width:13rem;">
                    <img class="card-img-top " src="bangalore.png">
                </div>
            </a>
        </div>
        <div class="col-3">
            <a href="room3.html">
                <div class="card " style="width:13rem;">
                    <img class="card-img-top " src="delhi.png">
                </div>
            </a>
        </div>
        <div class="col-3">
            <a href="room4.html">
                <div class="card " style="width:13rem;">
                    <img class="card-img-top " src="chennai.png">
                </div>
            </a>
        </div>

    </div>
    </div>

    <!--Amenities-->
    <div class="property-amenities">
        <div class="page-container">
            <h1>Amenities</h1>
            <div class="row justify-content-between">
                <div class="col-md-auto">
                    <h5>Building</h5>
                    <div class="amenity-container">
                        <img src="powerbackup.svg">
                        <span>Power backup</span>
                    </div>
                    <div class="amenity-container">
                        <img src="lift.svg">
                        <span>Lift</span>
                    </div>
                </div>

                <div class="col-md-auto">
                    <h5>Common Area</h5>
                    <div class="amenity-container">
                        <img src="wifi-logo.svg">
                        <span>Wifi</span>
                    </div>
                    <div class="amenity-container">
                        <img src="tv.svg">
                        <span>TV</span>
                    </div>
                    <div class="amenity-container">
                        <img src="swim.png">
                        <span>Swimming Pool</span>
                    </div>
                    <div class="amenity-container">
                        <img src="dining.svg">
                        <span>Dining</span>
                    </div>
                    <div class="amenity-container">
                        <img src="football.png">
                        <span>Play Area</span>
                    </div>
                </div>

                <div class="col-md-auto">
                    <h5>Bedroom</h5>
                    <div class="amenity-container">
                        <img src="bed.svg">
                        <span>Single Bed</span>
                    </div>
                    <div class="amenity-container">
                        <img src="bed.svg">
                        <span>Double Bed</span>
                    </div>
                    <div class="amenity-container">
                        <img src="ac.svg">
                        <span>Air Conditioner</span>
                    </div>
                </div>

                <div class="col-md-auto">
                    <h5>Washroom</h5>
                    <div class="amenity-container">
                        <img src="geyser.svg">
                        <span>Geyser</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--footer-->
    <div class="footer">
        <div class="page-container footer-container">
            <div class="footer-cities">
                <div class="footer-city">
                    <a href="mumbai.html">Rooms in Delhi</a>
                </div>
                <div class="footer-city">
                    <a href="bangalore.html">Rooms in Mumbai</a>
                </div>
                <div class="footer-city">
                    <a href="delhi.html">Rooms in Bangalore</a>
                </div>
                <div class="footer-city">
                    <a href="room.html">Rooms in Hyderabad</a>
                </div>
            </div>
            <div class="icons">
                <p>Follow us on</p>
                <img src="twitter.png" alt="img">
                <img src="instagram.png" alt="img">
                <img src="facebook.png" alt="img">
            </div>
            <div class="footer-copyright">© 2024 Copyright Platinum Pavilion </div>
        </div>
    </div>
</body>

</html>