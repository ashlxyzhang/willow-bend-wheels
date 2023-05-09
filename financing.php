<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Willow Bend Wheels</title>
        <!-- MDB -->
        <link
            href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.0.1/mdb.min.css"
            rel="stylesheet"
        />
        <link rel="stylesheet" href="./resources/css/financing.css">
        <link rel="stylesheet" href="https://use.typekit.net/imo6mdg.css">
        <link href='https://fonts.googleapis.com/css?family=Lato:400,700' rel='stylesheet' type='text/css'>
        <script src="./resources/js/financing.js" defer></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
        <link rel="icon" href="./resources/images/logo.png?">
    </head>

    <body>
            <!-- First Panel -->
                <!-- Navbar -->
                <nav>
                    <ul class="navbar1">
                        <li><a href="index.php">Home</a></li>
                        <li><a href="inventory.php">Car Listings</a></li>
                        <li><a href="sell.php">Sell Your Car</a></li>
                        <li><a href="#financing">Loan Estimator</a></li>
                        <li><a href="about.php">About</a></li>
                    </ul>
                    <img class="logo1" src="./resources/images/logo.png" alt="logo">
                </nav>
            
            <section id="financing" class="bg-small" style="background-image: url('./resources/images/financing-banner-primary.jpeg')";>
                <img class="opaque-overlay" src="./resources/images/opaque-overlay.png" alt="">
                <h1 class="centered-text">Loan Estimator
                    <p class="banner-subtitle">Cars available to all.</p>
                </h1>
            </section>

            <!-- Second Panel -->
            <section id="financing-options" class="panel-two">
                <section class="page-nav">
                    <ul>
                        <li><a href="#financing-options" class="page-nav-link">Financing Options</a></li>
                        <li><a href="#calculator" class="page-nav-link">Calculator</a></li>
                        <li><a href="#schedule-consultation" class="page-nav-link">Schedule Consultation</a></li>
                        <li><a href="#faq" class="page-nav-link">FAQ</a></li>
                    </ul>
                    <hr class="black-divider">
                </section>
    
                <section class="flex-container">
                    <div class="flex-child thirds">
                        <h3>
                            Trade In
                        </h3>
                        <p class="black">
                            Get a fair value for your car without all the hassle.
                            We will match any offer you get from CarMax with an additional $1000.
                        </p>
                    </div>
                    <div class="flex-child thirds">
                        <h3>
                            Lease
                        </h3>
                        <p class="black">
                            Short and long-term leases are available at market rates.
                            All leases come with the Willow Bend Difference, a comprehensive warranty.
                        </p>
                    </div>
                    <div class="flex-child thirds">
                        <h3>
                            Buy
                        </h3>
                        <p class="black">
                            Purchase your new set of wheels at an affordable price outright or with the help of our certified in-house financing.
                        </p>
                    </div>
                </section>
            </section>

            <!-- Third Panel -->
            <section id="calculator" class="panel-three brown-section">
                <h2>Financing Calculator</h2>
                <hr class="white-divider">
                <section class="flex-container">
                    <div class="flex-child">
                        <form class="calculator-form">
                            <label for="Car Price"><h4>Car Price</h4></label><br>
                            <input type="number" class="input-box" name="car-price" placeholder="Enter the price of your car; enter 0 if none"><br>
                            <label for="Down Payment"><h4>Approximate Down Payment</h4></label><br>
                            <input type="number" class="input-box" name="down-payment" placeholder="Enter your approximate down payment; enter 0 if none"><br>
                            <label for="Trade In"><h4>Trade In Value</h4></label><br>
                            <input type="number" class="input-box" name="trade-in" placeholder="Enter your approximate trade in value; enter 0 if none"><br>
                            <label for="disclaimer"><p class="white">*We guarantee that you will get at least the CarMax value + $1000</p></label><br>
                        </form>
                    </div>
                    <div class="flex-child">
                        <h4 class="centered-h4">What's Your Credit Score?</h4>
                        <div class="credit-score-grid">
                            <button btn-val="0">Over 740</button>
                            <button btn-val="1">720-739</button>
                            <button btn-val="2">700-719</button>
                            <button btn-val="3">680-699</button>
                            <button btn-val="4">660-679</button>
                            <button btn-val="5">640-659</button>
                            <button btn-val="6">620-639</button>
                            <button btn-val="7">Under 619</button>
                        </div>
                    </div>
                    <div class="flex-child">
                        <div class="leasing-purchasing-grid">
                            <button class="lease-purchase" btn-val="0">Leasing</button>
                            <button class="lease-purchase" btn-val="1">Purchasing</button>
                            <h4 class="span-two">Finance/Lease Length</h4>
                            <button class="lease-length" btn-val="12">12 months</button>
                            <button class="lease-length" btn-val="24">24 months</button>
                            <button class="lease-length" btn-val="36">36 months</button>
                            <button class="lease-length" btn-val="60">60 months</button>
                            <form action="" class="calculator-form">
                                <input type="number" name="months-lease" class="span-two" placeholder="Enter a custom amount of months">
                            </form>
                        </div>
                    </div>
                </section>
            </section>
            
            <section class="panel-three-half brown-section">
                <hr class="white-divider">
                <div class="flex-container">
                    <div class="flex-child">
                        <h3 class="calculator-title">Your Estimated <br>Monthly Payment</h3>
                    </div>
                    <div id="calculator-output" class="flex-child">
                        <span id="calc-output-text">Please Fill in All Fields</span>
                    </div>
                </div>
                <p class="white">*The price listed above is an estimation and not an official offer.
                    Taxes are not included.
                    There are additional service fees and a delivery fee as well.
                    Please email, call, or schedule a consultation to work out the final details.
                    <br>
                    *Leases are approximations assuming the car is driven 10,000 miles a year.
                    Any miles over 10,000 will be charged as extra.
                </p>
            </section>

            <!-- Fourth Section -->
            <section id="schedule-consultation" class="panel-four">
                <h2 style="color: black">Schedule a Consultation</h2>
                <section class="request_form">
                    <div class="req">
                        <span class="request_title">Request Form</span>
                        <form name="form" action="" class="request_items">
                            <input class="req_item" type="text" placeholder="Full Name"></input>
                            <input class="req_item" type="text" placeholder="Email"></input>
                            <input class="req_item" type="text" placeholder="Phone Number"></input>
                            <input class="req_item" type="text" placeholder="ZIP Code"></input>
                            <textarea class="req_item purpose" placeholder="Other Information"></textarea>
                            <input class="req_item" type="button" onclick="submitForm()" value="SUBMIT &gt">
                        </form>
                    </div>
                    <img class="partner_img" src="./resources/images/consultation-form-image.jpeg">
                </section>
            </section>

            <!-- Fifth Section -->
            <div id="faq" style="height: auto; padding: 2% 0 2% 0">
                <h2 style="color: black; padding-top: 0">Frequently Asked Questions</h2>
                <div class="accordion" style="width: 80%; margin: 0 auto" id="basicAccordion">
                    <div class="accordion-item">
                        <h3 class="accordion-header" id="headingOne">
                        <button class="accordion-button collapsed" type="button" data-mdb-toggle="collapse"
                            data-mdb-target="#basicAccordionCollapseOne" aria-expanded="false" aria-controls="collapseOne">
                            Why should I buy a used car?
                        </button>
                        </h3>
                        <div id="basicAccordionCollapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne"
                        data-mdb-parent="#basicAccordion" style="">
                        <div class="accordion-body">
                            Here at Willow Bend Wheels, we fully believe in furthering sustainability in everything we do.
                            As a used car dealership, we refurnish and repurpose old and unwanted cars to give them a new life.
                            All of our cars are certified pre-owned (CPO), meaning that we thoroughly inspect and recondition them.
                            Buying a brand new car with the same features as an older model can cost around $161 more per month.
                            Additionally, new cars depreciate faster and generally have more expensive insurance costs. Join with
                            Willow Bend Wheels' sustainability mission and buy used.
                        </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h3 class="accordion-header" id="headingTwo">
                        <button class="accordion-button collapsed" type="button" data-mdb-toggle="collapse"
                            data-mdb-target="#basicAccordionCollapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            Is there a minimum credit requirement?
                        </button>
                        </h3>
                        <div id="basicAccordionCollapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                        data-mdb-parent="#basicAccordion" style="">
                        <div class="accordion-body">
                            Unlike other car dealerships, Willow Bend Wheels does not require a minimum credit score.
                            This is because we believe that the ability to purchase a car should be extended to all 
                            regardless of socioeconomic status. Willow Bend Wheels strives to incorporate inclusivity in all aspects.
                        </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h3 class="accordion-header" id="headingThree">
                        <button class="accordion-button collapsed" type="button" data-mdb-toggle="collapse"
                            data-mdb-target="#basicAccordionCollapseThree" aria-expanded="false" aria-controls="collapseThree">
                            Do you offer gap insurance?
                        </button>
                        </h3>
                        <div id="basicAccordionCollapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                        data-mdb-parent="#basicAccordion" style="">
                        <div class="accordion-body">
                            We do offer an optional gap insurance coverage to help you pay off your automotive
                            loans in the event of your car getting totaled or stolen. Our gap insurance covers the
                            difference between your car's value and what you owe on it. If you don't have a car loan
                            or lease, there is no need to get gap insurance.
                        </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h3 class="accordion-header" id="headingFour">
                        <button class="accordion-button collapsed" type="button" data-mdb-toggle="collapse"
                            data-mdb-target="#basicAccordionCollapseFour" aria-expanded="false" aria-controls="collapseFour">
                            Can I finance using my bank?
                        </button>
                        </h3>
                        <div id="basicAccordionCollapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                        data-mdb-parent="#basicAccordion" style="">
                        <div class="accordion-body">
                            Yes, financing through a bank or other credit lender is fine.
                            Let us know that you're preapproved during the consultation.
                            We might even offer a lower rate than the loan you currently have.
                        </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h3 class="accordion-header" id="headingFive">
                        <button class="accordion-button collapsed" type="button" data-mdb-toggle="collapse"
                            data-mdb-target="#basicAccordionCollapseFive" aria-expanded="false" aria-controls="collapseFive">
                            Is there a minimum down payment?
                        </button>
                        </h3>
                        <div id="basicAccordionCollapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive"
                        data-mdb-parent="#basicAccordion" style="">
                        <div class="accordion-body">
                            As a used car dealership, Willow Bend Wheels does require a 
                            10% minimum down payment. A bigger down payment will result in
                            smaller future loans and more faorable loan terms, thus saving
                            you money in the long term. Feel free to use our Loan Estimator Calculator
                            above to determine your estimated monthly payment based on varied down payment prices.
                        </div>
                        </div>
                    </div>
                </div>
            </div>
            
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
        <!-- MDB -->
        <script
            type="text/javascript"
            src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.0.1/mdb.min.js"
        ></script>
        <script
            src="./resources/js/all.js"
        ></script>
    </body>
</html>