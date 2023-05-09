<?php
require_once("connection.php");
require("functions.php");
$query_string = "SELECT * FROM car_inventory LIMIT 24";
$result = mysqli_query($con, $query_string);
?>

<!-- Homepage -->

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <!-- Bootstrap -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        
        <title>Willow Bend Wheels</title>
        <link rel="stylesheet" href="./resources/css/index.css">
        <link rel="stylesheet" href="https://use.typekit.net/imo6mdg.css">
        <link href='https://fonts.googleapis.com/css?family=Lato:400,700' rel='stylesheet' type='text/css'>
        <link rel="icon" href="./resources/images/logo.png?">
    </head>


    <body>
        <!-- Modal -->
        <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title request-title">Contact Form</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body req">
                    <form name="form" action="" class="request_items">
                        <input class="req_item" type="text" placeholder="Name"></input>
                        <input class="req_item" type="text" placeholder="Email"></input>
                        <input class="req_item" type="text" placeholder="Phone Number"></input>
                        <input class="req_item" type="text" placeholder="Message Subject"></input>
                        <textarea class="req_item purpose" placeholder="Message"></textarea>
                        <input class="req_item" type="button" onclick="reset()" value="Submit &gt" data-dismiss="modal">
                    </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- First Panel -->
            <!-- Navbar -->
            <nav>
                <ul class="navigation">
                    <li><a href="#home">Home</a></li>
                    <li><a href="inventory.php">Car Listings</a></li>
                    <li><a href="sell.php">Sell Your Car</a></li>
                    <li><a href="financing.php">Loan Estimator</a></li>
                    <li><a href="about.php">About</a></li>
                </ul>
                <img class="logo-bpa" src="./resources/images/logo.png" alt="logo">
            </nav>
            
            <div id="home" class="container1">
                <div class="trapezoid"></div>

                <span class="wbw_title">Willow Bend<br>Wheels</span>
                <span class="wbw_motto">CARS MADE ACCESSIBLE.</span>

                <img class="bg" src="./resources/images/homepage_front.jpeg" alt="bmw-in-fall-forest">
            </div>
        <!-- First Panel End -->
            
        <!-- Second Panel -->
            <div class="container2">
                <div class="grid">
                    <div class="item">
                        <img class="item-img" src="./resources/images/icon1.png" alt="car">
                        <span class="item-txt">Buy Pre-Owned Cars</span>
                    </div>
                    <div class="item">
                        <img class="item-img" src="./resources/images/icon2.png" alt="hand-keys">
                        <span class="item-txt">Sell Us Your Car</span>
                    </div>
                    <div class="item">
                        <img class="item-img" src="./resources/images/icon3.png" alt="computer">
                        <span class="item-txt">Explore Our Listings</span>
                    </div>
                    <div class="item">
                        <img class="item-img" src="./resources/images/icon4.png" alt="piggy-bank">
                        <span class="item-txt">Get A Quote</span>
                    </div>
                </div>
                <span class="second_title center">Find Your Dream Car</span>

                <form class="search_form center" action="inventory.php#filter" method="GET" name="">
                    <input class="search_input" type="text" name="search-bar" placeholder="Find vehicles by year, make, model, and style">
                </form>

                <div class="filter center">
                    <span class="filter_title center">Filter By Category</span>

                    <form id="filter" action="inventory.php#filter" method="GET" class="filter_grid">
                        <select class="filter_item filter_txt" name="brand" id="brand">
                            <option value="" disabled selected>Brand</option>
                            <option value="audi">Audi</option>
                            <option value="bmw">BMW</option>
                            <option value="chevrolet">Chevrolet</option>
                            <option value="chrysler">Chrysler</option>
                            <option value="dodge">Dodge</option>
                            <option value="ferrari">Ferrari</option>
                            <option value="ford">Ford</option>
                            <option value="genesis">Genesis</option>
                            <option value="gmc">GMC</option>
                            <option value="honda">Honda</option>
                            <option value="hyundai">Hyundai</option>
                            <option value="infinity">Infinity</option>
                            <option value="kia">Kia</option>
                            <option value="lambo">Lamborghini</option>
                            <option value="lexus">Lexus</option>
                            <option value="lucid">Lucid</option>
                            <option value="mazda">Mazda</option>
                            <option value="mercedes-benz">Mercedes</option>
                            <option value="nissan">Nissan</option>
                            <option value="porsche">Porsche</option>
                            <option value="ram">Ram</option>
                            <option value="subaru">Subaru</option>
                            <option value="tesla">Tesla</option>
                            <option value="toyota">Toyota</option>
                            <option value="volks">Volkswagen</option>
                            <option value="volvo">Volvo</option>
                        </select>
                        <select class="filter_item filter_txt" name="year" id="year">
                            <option value="" disabled selected>Year</option>
                            <option value="2001">2001</option>
                            <option value="2002">2002</option>
                            <option value="2003">2003</option>
                            <option value="2004">2004</option>
                            <option value="2005">2005</option>
                            <option value="2006">2006</option>
                            <option value="2007">2007</option>
                            <option value="2008">2008</option>
                            <option value="2009">2009</option>
                            <option value="2010">2010</option>
                            <option value="2011">2011</option>
                            <option value="2012">2012</option>
                            <option value="2013">2013</option>
                            <option value="2014">2014</option>
                            <option value="2015">2015</option>
                            <option value="2016">2016</option>
                            <option value="2017">2017</option>
                            <option value="2018">2018</option>
                            <option value="2019">2019</option>
                        </select>
                        <select class="filter_item filter_txt" name="body" id="body">
                            <option value="" disabled selected>Body Style</option>
                            <option value="convertible">Convertible</option>
                            <option value="coupe">Coupe</option>
                            <option value="crossover">Crossover</option>
                            <option value="luxury">Luxury</option>
                            <option value="sedan">Sedan</option>
                            <option value="sports">Sports Car</option>
                            <option value="suv">SUV</option>
                            <option value="truck">Truck</option>
                            <option value="van">Van</option>
                            <option value="wagon">Wagon</option>
                        </select>
                        <select class="filter_item filter_txt" name="engine" id="engine-filter">
                            <option value="" disabled selected>Engine Type</option>
                            <option value="4-cyl">4-CYL</option>
                            <option value="6-cyl">6-CYL</option>
                            <option value="single motor">Single Motor</option>
                            <option value="double motor">Double Motor</option>
                            <option value="v6">V6</option>
                            <option value="v8">V8</option>
                            <option value="v10">V10</option>
                            <option value="turbo">Turbo</option>
                        </select>
                        <input class="filter_item filter-btn" type="submit" onsubmit="reset()" value="Search">
                    </form>
                    
                </div>
                
                <img class="bg" src="./resources/images/homepage_secondary.png" alt="car-on-mountain-road">
            </div>
        <!-- Second Panel End -->

        <!-- Third Panel -->
            <div class="container2">
                <span class="rest_titles center">Shop Sedans</span>

                <div class="button_grid center">
                    <button type="button" class="black button" onclick="location.href='./inventory.php?search-bar=sedan#filter'">
                        Existing Inventory
                    </button>
                    <button type="button" class="grey button" data-toggle="modal" data-target="#exampleModalCenter">
                        <span>Contact Us</span>
                    </button>
                </div>

                <img class="cars" src="./resources/images/sedan.png" alt="sedan">
            </div>
        <!-- Third Panel End -->

        <!-- Fourth Panel -->
                <div class="container2-black">
                    <span class="rest_titles center">Explore SUVs</span>

                    <div class="button_grid center">
                        <button type="button" class="grey button" onclick="location.href='./inventory.php?search-bar=suv#filter'">
                            Existing Inventory
                        </button>
                        <button class="white button" data-toggle="modal" data-target="#exampleModalCenter">
                            <span>Contact Us</span>
                        </button>
                    </div>

                    <img class="suv" src="./resources/images/suv.png" alt="suv">
                </div>
        <!-- Fourth Panel End -->

        <!-- Fifth Panel -->
            <div class="container2">
                <span class="rest_titles center">Check Out Coupes</span>

                <div class="button_grid center">
                    <button type="button" class="black button" onclick="location.href='./inventory.php?search-bar=coupe#filter'">
                        Existing Inventory
                    </button>
                    <button class="grey button" data-toggle="modal" data-target="#exampleModalCenter">
                        <span>Contact Us</span>
                    </button>
                </div>
                
                <img class="cars" src="./resources/images/coupe.png" alt="coupe">
            </div>
        <!-- Fifth Panel End -->

        <!-- Footer -->
        <section class="footer">
            <h3 class="footer-title">Willow Bend Wheels</h3>
            <h5 class="footer-subtitle">1604 Preston Rd, Plano TX 75093<br>
                +1-800-273-8255<br>
                Sales: Monday - Saturday 8 AM - 5 PM CST</h5>
            <ul class="footer-links">
                <li><a href="#home" class="footer-link link">Home</a></li>
                <li><a href="about.php" class="footer-link link">About</a></li>
                <li><a href="#contact" class="footer-link link">Contact</a></li>
                <li><a href="#privacy-policy" class="footer-link link">Privacy Policy</a></li>
                <li><a href="#sitemap" class="footer-link link">Sitemap</a></li>
            </ul>
        </section>
        <!-- Footer End -->
        
        <!-- Bootstrap -->
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </body>
</html>