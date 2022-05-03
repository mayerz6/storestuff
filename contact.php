<?php /* Load external PHP file   */ // include './mail.php'; ?>

<!DOCTYPE html>

<html lang="en">

    <head>
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <title>Store Stuff</title>
        <link rel="icon" href="favicon.png" type="image/gif" sizes="16x16">    
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="assets/css/styles.css" />    
        <script defer src="assets/js/nav.js"></script>
    </head>

    <body>

        <!-- *** HEADER BLOCK *** -->
        <header>
               <a id="logo-link" href="./"><img id="logo" src="favicon.png" alt="logo" /></a>
              <!--      <img id="menu-icon" src="assets/img/menu.png" />  -->
                    <div id="menu-icon">
                        <div class="line"></div>
                        <div class="line"></div>
                        <div class="line"></div>
                    </div>
                    <nav class="hidden">
                        <ul id="nav">
                            <li><a href="./">Request A Quote</a></li>
                           <!-- <li><a href="./about.php">About</a></li>  -->
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
                            <form action="<?php /* echo $_SERVER['PHP_SELF'] */ ?>" name="reqForm" method="" id="reqForm">
                               <label>Name: </label><input id="name" type="text" name="name" value="<?php echo htmlspecialchars($_POST['name'] ?? ''); ?>"  />
                               <b id="nameErr"><?php // echo $errors['Name'] ?? ''; ?></b>
                               <label>Email: </label><input id="email" type="email" name="email" value="<?php echo htmlspecialchars($_POST['email'] ?? ''); ?>" />
                               <b id="emailErr"><?php // echo $errors['Email'] ?? ''; ?></b>
                                  <label>What can we help you with? </label>
                               <!--    <input type="text" name="topic" />  -->
                                   <select name="query" id="query">
                                        <option value="">-- Select Topic --</option>
                                        <option value="moving">General Moving Queries</option>
                                        <option value="storage">Quote &amp; Pricing Queries</option>
                                        <option value="m&s">Reservation Queries Or Changes</option>
                                        <option value="m&s">Assistance With Your Next Move</option>
                                        <option value="m&s">Advertising Queries</option>
                                        <option value="m&s">Website Queries</option>
                                        <option value="m&s">Data Pricey Requests</option>
                                    </select>
                               
                               <label>Message: </label><textarea id="message" type="text" name="message"><?php echo htmlspecialchars($_POST['message'] ?? ''); ?></textarea>
                               <b id="msgErr"><?php // echo $errors['Message'] ?? ''; ?></b>
                                    <br>
                               
                               <input id="button" type="submit" value="Send Message" name="submit" />
                               <em>We love to listen and are eager to assist with your next storage project! </em>
                  
                             <!--  <em> Get in touch with us and we&#39;ll get back to you as soon as possible.</em>  -->
                  
                            </form>

                            <div id="contact-info">
                    <h4>Let's Stay In Touch</h4>
                      
                  <span><b>Our customer support is available:</b><br>
                            Monday-Friday 7 a.m.-7 p.m. CST<br>
                            Saturday 9 a.m.-4 p.m. CST.<br><br>
                            </span>
                            
                            <span>
                            <b>Phone Call</b> or <b>WhatsApp Message: <a style="text-decoration: none; color: #ec7048;" href="tel:+12462319428">(246) 231-9428</a></b>
                            <br>
                            (monitored during regular business hours)<br><br>
                            <!--    <b>Facebook Messenger:</b><br>
                                Send us a message on Facebook<br>
                                (monitored during regular business hours)<br><br>
                            -->
                                    <!-- Send us a message on Facebook<br> -->
                              
                            </span>
                            <span>               
                              <!--  <b>Mail:</b><br>
                                8401 McClure Drive<br>
                                Fort Smith, AR 72903<br><br>
                                    </span>
                                    <span> 
                                <b>Fax:</b><br>
                                (479) 494 - 6925<br><br>
                            </span> -->

                               <em>We love to listen and are eager to assist with your next storage project! </em>
                  
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
              <!--
                <div id="grid">
                    <h1>How We Can Help?</h1>
                    <section id="features">
                        <article class="options">
                        <img src="assets/img/logic.png" />
                            <h3>Logistic Service</h3>
                            <div>We deliver your container -- and there's no need 
                                to meet the driver, as PODS is a contactless service. 
                                Load on your schedule, right in your driveway. If you 
                                want help, we can connect you with local packing 
                                and loading companies.</div>
                        </article>
                        <article class="options">
                                <img src="assets/img/box.png" />
                            <h3>Package &amp; Storage</h3>
                            <div>We deliver your container -- and there's no need 
                                to meet the driver, as PODS is a contactless service. 
                                Load on your schedule, right in your driveway. If you 
                                want help, we can connect you with local packing 
                                and loading companies.</div>
                        </article>
                        <article class="options">
                        <img src="assets/img/truck.png" />
                            <h3>Ground Transport</h3>
                            <div>We deliver your container -- and there's no need 
                                to meet the driver, as PODS is a contactless service. 
                                Load on your schedule, right in your driveway. If you 
                                want help, we can connect you with local packing 
                                and loading companies.</div>
                        </article>
                        <article class="options">
                        <img src="assets/img/warehouse-building.png" />
                            <h3>Warehousing</h3>
                            <div>We deliver your container -- and there's no need 
                                to meet the driver, as PODS is a contactless service. 
                                Load on your schedule, right in your driveway. If you 
                                want help, we can connect you with local packing 
                                and loading companies.</div>
                        </article>
                       
                    </section>
                </div>
                    -->
                <!-- Definition of the FOOTER Region of the site  -->
                <footer>     
                    <div id="footer">    
                    <!-- 
                <section id="location">
                        <h2>Storage Container</h2>
                        <ul>
                            <li>Why Us</li>
                            <li>Storage Containers</li>
                            <li>Mobile Offices</li>
                            <li>Trailers</li>
                        </ul>
                    </section>
                    <section id="nav">
                        <h2>Quick Links</h2>
                        <ul>
                            <li>About</li>
                            <li>Contact</li>
                            <li>Services</li>
                            <li>Personel</li>
                            <li>Sitemap</li>
                            <li>Privacy Policy</li>
                        </ul>
                    </section>
                   <section id="feedback">
                    <h2>Keep In Touch</h2>
                      <div class="struRegion">
                          <p>Find your desired storage location.</p><br>
                          <label>ZIP Code:</label><input type="text" id="figure" />
                           <button id="figure-submit">Search</button>
                         
                            <b id="codeInfo"></b>
                      </div>
                    </section>
                  
                    <section id="info">
                    <h2>Locations</h2>
                       <ul>
                            <li>Lot 1 & 2 Green Hill Mahaica Gap Green Hill</li>
                            <li>(246) 231 9428</li>
                            <li>(246) 536 9177</li>
                            <li>Mon - Sat 9.00 to 18.00</li>
                        </ul>
                    </section>
                    -->
                    <!-- ***FOOTER BLOCK*** -->
                    
                    <span>&copy; Copyright Storestuff <?php echo date("Y"); ?> | All Rights Reserved. </span>
                    
                    </div>
                </footer>
                
                
    </body>
</html>