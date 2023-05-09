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
        <link rel="stylesheet" href="./resources/css/sell.css">
        <link rel="stylesheet" href="https://use.typekit.net/imo6mdg.css">
        <link href='https://fonts.googleapis.com/css?family=Lato:400,700' rel='stylesheet' type='text/css'>
        <link rel="icon" href="./resources/images/logo.png?">
    </head>

    <body>
            <!-- First Panel -->
            <nav>
                <ul class="navbar1">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="inventory.php">Car Listings</a></li>
                    <li><a href="#sell">Sell Your Car</a></li>
                    <li><a href="financing.php">Loan Estimator</a></li>
                    <li><a href="about.php">About</a></li>
                </ul>
                <img class="logo1" src="./resources/images/logo.png" alt="logo">
            </nav>
            
            <section id="sell" class="bg-small" style="background-image: url('./resources/images/carsell.png')";>
                <img class="opaque-overlay" src="./resources/images/opaque-overlay.png" alt="">
                <h1 class="centered-text">Sell Your Car
                    <p class="banner-subtitle">Reach buyers. Make deals.</p>
                </h1>
            </section>

            <!-- Second Panel -->
            <section id="financing-options" class="panel-two">
                <section class="page-nav">
                    <ul>
                        <li><a href="#subtitle" class="page-nav-link">Selling Information</a></li>
                        <li><a href="#calculator" class="page-nav-link">Calculate Vehicle Valuation</a></li>
                        <li><a href="#schedule-consultation" class="page-nav-link">Schedule Consultation</a></li>
                        <li><a href="#faq" class="page-nav-link">FAQ</a></li>
                    </ul>
                    <hr class="black-divider">
                </section>
                <section class="flex-container" style="padding-bottom: 1em">
                    <div class="flex-child thirds">
                        <h3>
                            Quick
                        </h3>
                        <p class="black">
                            Get your exclusive offer in real-time using our car valuation
                            calculator below. We offer a streamlined paperwork and appraisal process.
                        </p>
                    </div>
                    <div class="flex-child thirds">
                        <h3>
                            Easy
                        </h3>
                        <p class="black">
                            Work with our seasoned professionals to sell your car 
                            hassle-free with no hidden or additional fees. Fill out our
                            form below to schedule a consultation at any time.
                        </p>
                    </div>
                    <div class="flex-child thirds">
                        <h3>
                            Accessible
                        </h3>
                        <p class="black">
                            From cost-saving to luxury cars, Willow Bend Wheels will give you a
                            competitive offer for all. Choose same-day payment or take some time to
                            gauge your options.
                        </p>
                    </div>
                </section>
            </section>

            <!-- Third Panel -->
            <section id="calculator" class="panel-three">
                <h2>Car Valuation Calculator</h2>
                <hr class="white-divider">
                <section class="flex-container">
                    <div class="flex-child thirds">
                        <h4 class="centered-h4">Car Information</h4>
                        <form name="form" class="model">
                            <input type="number" class="input-box" name="year" 
                            placeholder="Year">
                            <input type="text" class="input-box" name="make"
                            placeholder="Make">
                            <input type="text" class="input-box" name="model"
                            placeholder="Model">
                            <input type="number" class="input-box" name="mileage" 
                            placeholder="Total Mileage">
                        </form>
                    </div>
                    <div class="flex-child thirds">
                        <h4 class="centered-h4">Your Information</h4>
                        <form name="form" class="license-plate">
                            <input type="number" class="input-box" name="state" 
                            placeholder="State">
                            <input type="number" class="input-box" name="zip"
                            placeholder="ZIP Code">
                            <input type="text" class="input-box" name="phone"
                            placeholder="Phone Number">
                            <input type="text" class="input-box" name="email-address"
                            placeholder="Email Address">
                        </form>
                    </div>
                    <div class="flex-child thirds">
                        <h4 class="centered-h4">General Information</h4>
                        <form name="form" class="vin-number">
                            <input type="number" class="input-box" name="vin-number" 
                            placeholder="VIN Number">
                            <input type="number" class="input-box" name="license-plate-number"
                            placeholder="License Plate Number">
                            <input type="button" class="input-box" onclick="submitForm()" value="SUBMIT &gt">
                        </form>
                    </div>
                </section>
            </section>
            
            <!-- Fourth Section -->
            <section id="schedule-consultation" class="panel_four">
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
                            What are the benefits of selling a used car?
                        </button>
                        </h3>
                        <div id="basicAccordionCollapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                        data-mdb-parent="#basicAccordion" style="">
                        <div class="accordion-body">
                            Old vehicles can be a surprising source of income that is rarely tapped into. At Willow Bend Wheels,
                            we serve to take your vehicles and turn them into someone else's pride and joy. After all, one man's
                            trash is another man's treasure!<br>
                            Additionally, high resale values can act in your favor. Even if you don't own a luxury vehicle like a
                            Ferrari, mainstream cars like Hondas and Toyotas may have a higher value than you realize. Use our car
                            valuation calculator above to get a quote directly in your inbox.
                        </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h3 class="accordion-header" id="headingThree">
                        <button class="accordion-button collapsed" type="button" data-mdb-toggle="collapse"
                            data-mdb-target="#basicAccordionCollapseThree" aria-expanded="false" aria-controls="collapseThree">
                            How are offers determined?
                        </button>
                        </h3>
                        <div id="basicAccordionCollapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                        data-mdb-parent="#basicAccordion" style="">
                        <div class="accordion-body">
                            We do market research in order to calculate both car valuations and loan payments. Offers are determined
                            based on your car's make, model, year, mileage, wear, and other factors such as condition. Quotes delivered
                            through the car valuation calculator may not be accurate, since we need to evaluate the car in person for
                            defects.
                        </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h3 class="accordion-header" id="headingFour">
                        <button class="accordion-button collapsed" type="button" data-mdb-toggle="collapse"
                            data-mdb-target="#basicAccordionCollapseFour" aria-expanded="false" aria-controls="collapseFour">
                            How do I get paid when I sell my car?
                        </button>
                        </h3>
                        <div id="basicAccordionCollapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                        data-mdb-parent="#basicAccordion" style="">
                        <div class="accordion-body">
                            In order to make the selling process as efficient as possible for you, we offer two payment options.
                            You can leave with the payment on the same day you sell us your car, or you can take as long as seven days
                            to think over our offer. In the event that you decide not to sell us your car, you can still ask for an offer
                            at a later date. We pay with a special type of check called a bank draft that you can deposit into your account.
                        </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h3 class="accordion-header" id="headingFive">
                        <button class="accordion-button collapsed" type="button" data-mdb-toggle="collapse"
                            data-mdb-target="#basicAccordionCollapseFive" aria-expanded="false" aria-controls="collapseFive">
                            Is there anything I need to bring when I sell my car?
                        </button>
                        </h3>
                        <div id="basicAccordionCollapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive"
                        data-mdb-parent="#basicAccordion" style="">
                        <div class="accordion-body">
                            Although the requirements can vary by state, there are a few items that are necessary across all locations.
                            You need your car's title or payoff information, valid registrations, a state-issued photo ID, and your car keys or remote.
                            Please note that these items are only required if you plan to sell your car, not for getting an offer.
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