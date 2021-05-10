<?php /* Load external PHP file   */ // include './mail.php'; ?>

<!DOCTYPE html>

<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <meta name="description" content="Secure storage spaces for rent" >
        <meta name="keywords" content="storage spaces secure rental Store Stuff">
        <meta name="author" content="Larry Mayers">

        <title>Contact Store Stuff - Store Stuff | Storage Spaces For Rent</title>
      
        <link rel="icon" href="favicon.png" type="image/gif" sizes="16x16">    
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="assets/css/styles.css" />    
        
        <meta name="keywords" content>
        <meta name="description" content="Looking for quick storage space to rent? Storestuff Spaces is the affordable solution for you. Secure, Convenient...Yours!">
        <meta name="title" content="Contact Storestuff Rentals">
        <meta name="copyright" content="© Copyright Storestuff 2021 | All Rights Reserved. ">
        <meta name="robots" content="noindex, nofollow">
        <!-- Social Profile Cards -->
        <meta name="twitter:card" content="summary">
        <meta name="twitter:site" content="@mayerz">
        <meta name="twitter:title" content="Contact Storestuff Rentals">
        <meta name="twitter:description" content="Looking for quick storage space? Storestuff Spaces is the affordable solution for you. Secure, Convenient...Yours!">
        <meta name="twitter:creator" content="@mayerz">

        <!-- Twitter Summary card images must be at least 120x120px -->
        <meta name="twitter:image" content="https://www.storestuff.site/assets/img/warehouse-mini.png">

        <!-- Open Graph data -->
        <meta property="og:title" content="Contact Storestuff Rentals" />
        <meta property="og:type" content />
        <meta property="og:url" content="https://www.storestuff.site/" />
        <meta property="og:image" content="https://www.storestuff.site/assets/img/warehouse-mini.png" />
        <meta property="og:description" content="Looking for quick storage space? Storestuff Spaces is the affordable solution for you. Secure, Convenient...Yours!" />
        <meta property="og:site_name" content="Storestuff Rentals" />

              <!--  <meta property="fb:admins" content="Facebook numeric ID" />  -->

        
        <script defer src="assets/js/nav.js"></script>
        <script defer src="assets/js/contact.js"></script>
    </head>

    <body>

        <!-- *** HEADER BLOCK *** -->
        <header>
               <a id="logo-link" href="./"><img id="logo" src="favicon.png" alt="logo" /></a>
                    <div id="menu-icon">
                        <div class="line"></div>
                        <div class="line"></div>
                        <div class="line"></div>
                    </div>
                    <nav class="hidden">
                        <ul id="nav">
                            <li><a href="./">Request A Quote</a></li>
                            <li><a href="./services.php">Services</a></li>
                            <li><a class="active" href="./contact.php">Contact</a></li>
                            <li id="tel"><i class="fa fa-phone fa-2x"></i><a href="tel:+12462319428">(246) 231-9428</a></li>
                        </ul>
                    </nav>
        </header>

        <!-- *** MAIN CONTENT BLOCK *** -->
        <div id="main">

            <h1>Storage Space For Rent</h1>
                <section id="screen">
                    <p>Have Any Questions</p>
                                
                                  <div id="response"></div>
                                    
                                  <em><h4>Let's Protect Your Stuff!</h4></em>
                                 
                        <div id="fbRegion">
                            <form action="" name="reqForm" method="" id="reqForm">
                               <label>Name: </label><input id="name" type="text" name="name" value="<?php echo htmlspecialchars($_POST['name'] ?? ''); ?>"  />
                               <b id="nameErr"></b>
                               <label>Email: </label><input id="email" type="email" name="email" value="<?php echo htmlspecialchars($_POST['email'] ?? ''); ?>" />
                               <b id="emailErr"></b>
                                  <label>What can we help you with? </label>
                                   <select name="query" id="query">
                                        <option value="0">-- Select Topic --</option>
                                        <option value="1">General Moving Queries</option>
                                        <option value="2">Quote &amp; Pricing Queries</option>
                                        <option value="3">Reservation Queries Or Changes</option>
                                        <option value="4">Assistance With Your Next Move</option>
                                        <option value="5">Advertising Queries</option>
                                        <option value="6">Website Queries</option>
                                        <option value="7">Data Pricey Requests</option>
                                    </select>
                                    <b id="queryErr"></b>
                               <label>Message: </label><textarea id="message" type="text" name="message"><?php echo htmlspecialchars($_POST['message'] ?? ''); ?></textarea>
                               <b id="msgErr"></b>
                                    <br>
                               
                               <input id="button" type="submit" value="Send Message" name="submit" />
                               <em>We love to listen and are eager to assist with your next storage project! </em>
                            </form>

                            <div id="contact-info">
                    <h4>Let's Stay In Touch</h4>
                      
                          <span>
                            <b>Our customer support is available:</b><br>
                            Monday-Friday 7 a.m.-7 p.m. CST<br>
                            Saturday 9 a.m.-4 p.m. CST.<br><br>
                            </span>
                            
                            <span>
                            <b>Phone Call</b> or <b>WhatsApp Message: <a style="text-decoration: none; color: #ec7048;" href="tel:+12462319428">(246) 231-9428</a></b>
                            <br>
                            (monitored during regular business hours)<br><br>             
                            </span>
                            <span>               
                              <em>We love to listen and are eager to assist with your next storage project! </em>
                            </span>
                </div>
                        </div>
                 </section>
                 <section id="details">
                
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
           
        <div id="banner"><h1>Professional Storage Services</h1></div>
          
                <!-- Definition of the FOOTER Region of the site  -->
                <footer>     
                    <div id="footer">    
                         <!-- ***FOOTER BLOCK*** -->
                    
                    <span>&copy; Copyright Storestuff <?php echo date("Y"); ?> | All Rights Reserved. </span>
                    
                    </div>
                </footer>          
    </body>
</html>