<?php /* Load external PHP file   */ // include './mail.php'; ?>

<!DOCTYPE html>

<html lang="en">

            <head>
                
                <title>Store Stuff | Storage Spaces For Rent</title>
                
                <link rel="icon" href="favicon.png" type="image/gif" sizes="16x16">    
                <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
                <link rel="stylesheet" href="assets/css/styles.css" />    
                
                <meta name="viewport" content="width=device-width,initial-scale=1.0">
                <!-- Social Profile Cards -->
                <meta name="twitter:card" content="">
                <meta name="twitter:card" content="">
                <meta name="twitter:card" content="">
                <meta name="twitter:card" content="">
                <!--  -->
                <script defer src="assets/js/quote.js"></script>
                <script defer src="assets/js/nav.js"></script>
            </head>

    <body>

        <!-- *** HEADER BLOCK *** -->
        <header>
               <a id="logo-link" href="./"><img id="logo" src="favicon.png" alt="store_stuff_logo" /></a>
                    <div id="menu-icon"> <!-- Icon to illustrate collapsed navbar -->
                        <div class="line"></div>
                        <div class="line"></div>
                        <div class="line"></div>
                    </div>
                    <nav class="hidden">
                        <ul id="nav"> <!-- List of navbar links -->
                            <li><a class="active" href="./">Request A Quote</a></li>
                            <li><a href="./services.php">Services</a></li>
                            <li><a href="./contact.php">Contact</a></li>
                            <li id="tel"><i class="fa fa-phone fa-2x"></i><a href="tel:+12462319428">(246) 231-9428</a></li>
                        </ul>
                    </nav>
        </header>
        <!-- *** END OF HEADER BLOCK *** -->

        <!-- *** MAIN CONTENT BLOCK *** -->
        <div id="main">
            <h1>Storage Spaces For Rent</h1>
                <section id="screen">
                    <p>Request A Quote</p>
                                
                                  <div id="response"></div>
                                    
                                  <em><h4>Let's Protect Your Stuff!</h4></em>
                                 
                        <div id="fbRegion"> <!-- User feedback form -->
                            <form action="" name="reqForm" method="" id="reqForm">
                               <label>Name: </label><input id="name" type="text" name="name" value="<?php echo htmlspecialchars($_POST['name'] ?? ''); ?>"  />
                               <b id="nameErr"></b>
                               <label>Email: </label><input id="email" type="email" name="email" value="<?php echo htmlspecialchars($_POST['email'] ?? ''); ?>" />
                               <b id="emailErr"></b>
                               <h4>What type of quote do you need?</h4>
                          <fieldset>
                          <label>Residential <input type="radio" name="businessType" value="Residential" checked /></label>
                                <label>Business <input type="radio" name="businessType" value="Business" /></label>
                          </fieldset>
                               <label>Subject: </label><input id="subject" type="text" name="subject" value="<?php echo htmlspecialchars($_POST['subject'] ?? ''); ?>" />
                               <b id="subjectErr"></b>
                                   <label>What can we help you with? </label>
                                   <select name="query" id="query">
                                        <option value="0">-- Query Selection --</option>
                                        <option value="1">Moving</option>
                                        <option value="2">Storage</option>
                                        <option value="3">Moving &amp; Storage</option>
                                    </select>
                                    <b id="queryErr"></b>
                               <label>Message: </label><textarea id="message" type="text" name="message"><?php echo htmlspecialchars($_POST['message'] ?? ''); ?></textarea>
                               <b id="msgErr"></b>
                                    <br>
                               
                               <input id="button" type="submit" value="Send Message" name="submit" />
                               <em>We love to listen and are eager to assist with your next storage project! </em>
                  
                         
                            </form>
                        </div>
                 </section>

                 <section id="details"> <!-- Company services -->
                        <div>
                            <section>
                                <h2 id="storage">Storage</h2>
                                <dd><b>&#10003;</b>Log Term</dd>
                                <dd><b>&#10003;</b>On-Site</dd>
                                <dd><b>&#10003;</b>Accessible</dd>
                            </section>
                            <section>
                                <h2 id="collection">Collection</h2>
                                <dd><b>&#10003;</b>Secure Inventory</dd>
                                <dd><b>&#10003;</b>Friendly Staff</dd>
                                <dd><b>&#10003;</b>Professional Service</dd>
                            </section>
                            <section>
                                <h2 id="pickup">Pickup &amp; Delivery</h2>
                                <dd><b>&#10003;</b>Next Day Scheduling</dd>
                                <dd><b>&#10003;</b>Competitive Pricing</dd>
                                <dd><b>&#10003;</b>Simple Checkout Experience</dd>
                            </section>
                        </div>
                 </section>
                 <h1>Secure, Convenient...Yours!</h1>
          
        </div>
        <!-- *** END OF MAIN CONTENT BLOCK *** -->
           
        <div id="banner"><h1>Professional Storage Services</h1></div>

        <!-- *** FOOTER CONTENT BLOCK *** -->       
                <footer>                                    
                    <!-- *** COPYRIGHT SECTION *** -->      
                    <div id="footer"><span>&copy; Copyright Storestuff <?php echo date("Y"); ?> | All Rights Reserved. </span></div>
            
                </footer>
                <!-- *** END OF FOOTER CONTENT BLOCK *** -->
                
                
    </body>
</html>