<?php

function loadHTMLtable($result)
{
    $tableHtml = "";

    while ($row = mysqli_fetch_assoc($result))
    {
        $tableHtml .= "<div class='inventory-entry'>";
            $tableHtml .= "<div class='inventory-main-heading'>";
                $tableHtml .= "<h5>" . $row['Year'] . "</h5>";
                $tableHtml .= "<h3 class='car-title'>" . $row['Make'] ." ". $row['Model'] . "</h3>";
                $tableHtml .= "<h3 class='car-price'>$" . number_format($row['Price']) ."</h3>";
            $tableHtml .= "</div>";
            $tableHtml .= "<hr class='grey'>";
            $tableHtml .= "<div class='photo-carousel'>";
                $tableHtml .= "<img src='" . $row['URL'] . "' alt=''>";
            $tableHtml .= "</div>";
            $tableHtml .= "<div class='inventory-bottom-info'>";
                $tableHtml .= "<div class='inventory-side-info'>";
                    $tableHtml .= "<div class='inventory-colors'>";
                        $tableHtml .= "<span class='inline'>";
                            $tableHtml .= "<div class='color-sample' style='background-color: " . $row['Exterior'] . "'></div>";
                            $tableHtml .= "<p class='paragraph color-sample-text'>" . $row['Ex_Name'] . " Exterior</p>";
                        $tableHtml .= "</span>";
                        $tableHtml .= "<span class='inline'>";
                            $tableHtml .= "<div class='color-sample' style='background-color: " . $row['Interior'] . "'></div>";
                            $tableHtml .= "<p class='paragraph color-sample-text'>". $row['In_Name'] . " Interior</p>";
                        $tableHtml .= "</span>";
                    $tableHtml .= "</div>";
                    $tableHtml .= "<hr class='grey'>";
                    $tableHtml .= "<div class='inventory-small-details'>";
                        $tableHtml .= "<p class='paragraph'>";
                            $tableHtml .= "Body Style: " . $row['Type'] . "<br>";
                            $tableHtml .= "Total Mileage: " . number_format($row['Est. Miles/Year']) . " miles<br>";
                            //$tableHtml .= $row['City'] . "/" . $row['Hwy'] . " · City/Hwy<br>";
                            //$tableHtml .= "${Est. Miles/Year} Miles<br>";
                            $tableHtml .= "Engine Type: " . $row['Engine'] . "<br>";
                            $tableHtml .= "Drivetrain: " . $row['Drivetrain'] . "WD<br>";
                        $tableHtml .= "</p>";
                    $tableHtml .= "</div>";
                $tableHtml .= "</div>";
                $tableHtml .= "<div class='inventory-buttons'>";
                    $tableHtml .= "<button class='button-one'>View Details</button>";
                    $tableHtml .= "<button class='button-one'>Ask a Question</button>";
                    $tableHtml .= "<button class='button-two'>Book a Test Drive</button>";
                $tableHtml .= "</div>";
            $tableHtml .= "</div>";
        $tableHtml .= "</div>";
    }
    return $tableHtml;
}

function noData()
{
    $html = "";
    $html .= "<h2 class='no-data-text'> No cars were found.</h2>";
    $html .= "<img class='no-data-img' src='./resources/images/leaf-fall.png'>";
    $html .= "<h2 class='no-data-text'> Our inventories are always expanding. Please check back soon to find your dream car!</h2>";
    return $html;
}

?>