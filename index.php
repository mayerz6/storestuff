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
            <b>***HEADER BLOCK***</b>
        </header>
        <div id="main">
            <h1>Let's Protect Your Stuff For You!</h1>
                <section id="screen">
                    <p>Explore Our Storage Space, Co-Working Space, Co-Warehouse & Services</p>
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
                <footer>
                    <!-- ***FOOTER BLOCK***</b> -->

                    <span>&copy; Copyright Storestuff <?php echo date("Y"); ?> | All Rights Reserved. </span>
                </footer>

    </body>
</html>