<?php /* Load external PHP file   */ // include './mail.php'; ?>

<!DOCTYPE html>

<html lang="en">

    <head>
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <title>Store Stuff</title>
        <link rel="icon" href="favicon.png" type="image/gif" sizes="16x16">    
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="assets/css/styles.css" />    
        <script defer src="assets/js/main.js"></script>
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
                            <li><a class="active" href="./">Request A Quote</a></li>
                           <!-- <li><a href="./about.php">About</a></li> -->
                            <li><a href="./services.php">Services</a></li>
                            <li><a href="./contact.php">Contact</a></li>
                            <li id="tel"><i class="fa fa-phone fa-2x"></i><a href="tel:+12462319428">(246) 231-9428</a></li>
                        </ul>
                    </nav>
        </header>

        <!-- *** MAIN CONTENT BLOCK *** -->
        <div id="main">
            <h1>Storage Space For Rent</h1>
                <section id="screen">
                    <p>Request A Quote</p>
                                
                                  <div id="response"></div>
                                    
                                  <em><h4>Let's Protect Your Stuff!</h4></em>
                                 
                        <div id="fbRegion">
                            <form action="<?php /* echo $_SERVER['PHP_SELF'] */ ?>" name="reqForm" method="" id="reqForm">
                               <label>Name: </label><input id="name" type="text" name="name" value="<?php echo htmlspecialchars($_POST['name'] ?? ''); ?>"  />
                               <b id="nameErr"><?php // echo $errors['Name'] ?? ''; ?></b>
                               <label>Email: </label><input id="email" type="email" name="email" value="<?php echo htmlspecialchars($_POST['email'] ?? ''); ?>" />
                               <b id="emailErr"><?php // echo $errors['Email'] ?? ''; ?></b>
                               <h4>What type of quote do you need?</h4>
                          <fieldset>
                          <label>Residential <input type="radio" name="businessType" value="Residential" checked /></label>
                                <label>Business <input type="radio" name="businessType" value="Business" /></label>
                          </fieldset>
                               <label>Subject: </label><input type="text" name="subject" value="<?php echo htmlspecialchars($_POST['subject'] ?? ''); ?>" />
                               
                                   <label>What can we help you with? </label>
                               <!--    <input type="text" name="topic" />  -->
                                   <select name="query" id="query">
                                        <option value="">-- Query Selection --</option>
                                        <option value="moving">Moving</option>
                                        <option value="storage">Storage</option>
                                        <option value="m&s">Moving &amp; Storage</option>
                                    </select>
                               
                               <label>Message: </label><textarea id="message" type="text" name="message"><?php echo htmlspecialchars($_POST['message'] ?? ''); ?></textarea>
                               <b id="msgErr"><?php // echo $errors['Message'] ?? ''; ?></b>
                                    <br>
                               
                               <input id="button" type="submit" value="Send Message" name="submit" />
                               <em>We love to listen and are eager to assist with your next storage project! </em>
                  
                             <!--  <em> Get in touch with us and we&#39;ll get back to you as soon as possible.</em>  -->
                  
                            </form>
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
        <div id="screen">
                <section id="content">
                    <aside>
                        <div class="block">
                            <h4>Store Stuff</h4>
                            <img src="./assets/img/cycle.png" />
                        </div>
                        <div class="block">
                            <h4>Mission</h4>
                            <img src="./assets/img/data-analytics-1.png" />
                        </div>
                        <div class="block">
                            <h4>History</h4>
                            <img src="./assets/img/inventory.png" />
                        </div>
                   
                  
                    </aside>
                    <article id="main">
                    <h1>Who We Are?</h1>
                    <dd>Over the last three years; we've successfully established 
                    the art of providing storage and moving solutions that work for 
                    our customers.  We strive to make you feel comfortable with our 
                    process, and we want you to know that your belongings will be 
                    moved and stored safely with us.
                    </dd>
                    <dd>As of today, where more than 100 professional staff members, 
                        with 3 offices in Jakarta, Surabaya, and Semarang. Our company
                         accesses a large and reliable network of agencies and partners
                          all over the world which allow us to work and operate any 
                          kinds of shipments from/ allwordwide destinations. Our agents 
                          and partners are leading companies
</dd>
                    <dd>We are thankful to God our existence and reputation we have 
                        been earning so far with the high esteem as also enjoyed by our
                         valued customers. Our continuous growth has been proven and 
                         attributed.
                    </dd>
                    </article>
                </section>
         </div>

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
                            <li><a href="">Request A Quote</a></li>
                            <li><a href="">Services</a></li>
                            <li><a href="">Mission & Values</a></li>
                            <li><a href="">Contact Us</a></li>
                            <li><a href="">Sitemap</a></li>
                            <li><a href="">Privacy Policy</a></li>
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
