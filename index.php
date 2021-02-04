<?php /* Load external PHP file   */  include 'assets/class/validate.php'; ?>

<?php 

    if(isset($_POST['submit'])){
       $test = new UserValidator($_POST);
       $errors = $test->validateForm();
     // echo "Form submitted!!!";
    }

?>


<!DOCTYPE html>

<html lang="en">
    <head>
        <title>Store Stuff</title>
        <link rel="icon" href="favicon.png" type="image/gif" sizes="16x16">    
        <link rel="stylesheet" href="assets/css/styles.css" />    

    </head>

    <body>

        <header>
           <!-- <b>***HEADER BLOCK***</b> -->
               <a id="logo-link" href="index.php"><img id="logo" src="favicon.png" alt="logo" /></a>
                    <img id="menu-icon" src="assets/img/menu-2.png" />
                    <nav>
                        <ul id="nav">
                            <li><a href="#">Home</a></li>
                            <li><a href="#">About</a></li>
                            <li><a href="#">Services</a></li>
                            <li><a href="#">Contact</a></li>
                        </ul>
                    </nav>
        </header>

        <div id="main">
            <h1>Let's Protect Your Stuff!</h1>
                <section id="screen">
                    <p>Explore Our Storage Space</p>
                        <div id="fbRegion">
                            <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
                                <span>Name: </span><input type="text" name="name" value="<?php echo htmlspecialchars($_POST['name'] ?? ''); ?>"  /><b><?php echo $errors['Name'] ?? ''; ?></b><br>
                                <span>Email: </span><input type="email" name="email" value="<?php echo htmlspecialchars($_POST['email'] ?? ''); ?>" /><b><?php echo $errors['Email'] ?? ''; ?></b><br>
                                <span>Query: </span><input type="text" name="topic" /><br><br>
                                <span>Message: </span><textarea type="text" name="message"><?php echo htmlspecialchars($_POST['message'] ?? ''); ?></textarea><b><?php echo $errors['Message'] ?? ''; ?></b><br>
                                <input type="submit" value="Update" name="submit" />
                            </form>
                            </div>
                 </section>
                 <div id="imgRegion"><img src="./assets/img/warehouse-building.png" /></div>
        </div>

                <div id="grid">
                    <section id="features">
                        <article class="options"><h3>Keep It!</h3></article>
                        <article class="options"><h3>Keep It!</h3></article>
                        <article class="options"><h3>Keep It!</h3></article>
                        <article class="options"><h3>Keep It!</h3></article>    
                    </section>
                </div>
                
                <footer>
                    <!-- ***FOOTER BLOCK*** -->

                    <span>&copy; Copyright Storestuff <?php echo date("Y"); ?> | All Rights Reserved. </span>
                </footer>

    </body>
</html>