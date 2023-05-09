<?php
require_once("connection.php");
require("functions.php");
$query_string = "SELECT * FROM car_inventory";
$result = mysqli_query($con, $query_string);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Willow Bend Wheels</title>
        <link rel="stylesheet" href="./resources/css/inventory.css">
        <!-- Adobe Fonts -->
        <link rel="stylesheet" href="https://use.typekit.net/uhx3pje.css">
        <link rel="icon" href="./resources/images/logo.png?">
    </head>

    <body>
        <!-- First Panel -->
            <!-- Navbar -->
            <nav>
                <ul class="navbar">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="#listings">Car Listings</a></li>
                    <li><a href="sell.php">Sell Your Car</a></li>
                    <li><a href="financing.php">Loan Estimator</a></li>
                    <li><a href="about.php">About</a></li>
                </ul>
                <img class="logo" src="./resources/images/logo.png" alt="logo">
            </nav>

            <section id="listings" class="banner" style="background-image: url('./resources/images/inventory-banner.jpg')";>
                <div class="opaque-overlay">
                    <img src="./resources/images/opaque-overlay.png" alt="">
                </div>
                <div class="banner-container">
                    <h1 class="banner-title">Inventory</h1>
                    <h4 id="subtitle" class="banner-subtitle">A car for every person.</h4>
                </div>
            </section>

            <!-- Search Bar -->
            <section class="search-container">
                <form action="#filter" name="">
                    <input type="text" class="main-search-bar" id="search-bar" name="search-bar"
                    placeholder="Find vehicles by year, make, model, and style">
                </form>
            </section>

            <!-- Filter Bar -->
            <section id="filter" class="filter-bar">
                <h3 class="filter-title">Filter</h3>
                <form action="#filter" class="filter-select-form">
                    <select name="brand" id="brand-filter">
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
                        <option value="lamborghini">Lamborghini</option>
                        <option value="lexus">Lexus</option>
                        <option value="lucid">Lucid</option>
                        <option value="mazda">Mazda</option>
                        <option value="mercedes-benz">Mercedes-Benz</option>
                        <option value="nissan">Nissan</option>
                        <option value="porsche">Porsche</option>
                        <option value="ram">Ram</option>
                        <option value="subaru">Subaru</option>
                        <option value="tesla">Tesla</option>
                        <option value="toyota">Toyota</option>
                        <option value="volkswagen">Volkswagen</option>
                        <option value="volvo">Volvo</option>
                    </select>
                    <select name="year" id="year-filter">
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
                    <select name="body-style" id="body-style-filter">
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
                    <select name="engine" id="engine-filter">
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
                    <input type="submit" name="submit" value="Search">
                </form>
            </section>

            <!-- Results Section -->
            <section id="car-inventory" class="inventory-results">
                <?php
                
                // echo loadHTMLtable($result);

                $query_string = "SELECT * FROM car_inventory WHERE ";
                
                if (isset($_GET['search-bar']) && $_GET['search-bar'] != "") {
                    $search = trim($_GET['search-bar']);

                    // separate each of the keywords
                    $keywords = explode(' ', strtolower($search));
                    // $match = implode('+', $keywords);
                    // $sql = "SELECT *, MATCH(`Make`,`Model`,`Type`,`Year`) AGAINST ('$match' IN BOOLEAN MODE) 
                    //         AS relevance FROM car_inventory WHERE MATCH(`Make`,`Model`,`Type`,`Year`) AGAINST ('$match' IN BOOLEAN MODE) 
                    //         ORDER BY relevance DESC";
                    foreach($keywords as $word) {
                        $query_string .= "CONCAT(Make, Model, Year, Type) LIKE '%".$word."%' AND ";
                    }
                    $query_string = substr($query_string, 0, strlen($query_string) - 4);
                    $result = mysqli_query($con, $query_string);
                    $result_count = mysqli_num_rows($result);

                    if ($result_count > 0) {
                        echo loadHTMLtable($result);
                    } else
                    {
                        echo noData();
                    }
                } else if (isset($_GET['brand']) || isset($_GET['year']) || isset($_GET['body-style']) || isset($_GET['engine']))
                {
                    $brand = $_GET['brand'];
                    $year = $_GET['year'];
                    $style = $_GET['body-style'];
                    $engine = $_GET['engine'];

                    if (isset($brand))
                        $query_string .= "Make = '".$brand."' AND ";
                    if (isset($year))
                        $query_string .= "Year = '".$year."' AND ";
                    if (isset($style))
                        $query_string .= "Type = '".$style."' AND ";
                    if (isset($engine))
                        $query_string .= "Engine LIKE '%".$engine."%' AND ";

                    $query_string = substr($query_string, 0, strlen($query_string) - 4);
                    $query_string .= "ORDER BY ((Make = '".$brand."') + (Year = '".$year."') + 
                                                (Type = '".$style."') + (Engine LIKE '%".$engine."%')) DESC";
                    $result = mysqli_query($con, $query_string);
                    $result_count = mysqli_num_rows($result);

                    if ($result_count > 0) {
                        echo loadHTMLtable($result);
                    } else 
                    {
                        echo noData();
                    }
                } else {
                    echo loadHTMLtable($result);
                }
                ?>
            </section>

            
            <!-- Footer -->
            <section class="footer">
                <h3 class="footer-title">Willow Bend Wheels</h3>
                <h5 class="footer-subtitle">1604 Preston Rd, Plano TX 75093<br>
                    +1-800-273-8255<br>
                    Sales: Monday - Saturday 8 AM - 5 PM CST</h5>
                <ul class="footer-links">
                    <li><a href="index.php" class="footer-link link">Home</a></li>
                    <li><a href="about.php" class="footer-link link">About</a></li>
                    <li><a href="#contact" class="footer-link link">Contact</a></li>
                    <li><a href="#privacy-policy" class="footer-link link">Privacy Policy</a></li>
                    <li><a href="#sitemap" class="footer-link link">Sitemap</a></li>
                </ul>
            </section>
    </body>
</html>