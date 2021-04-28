<?php /* Load external PHP file   */  include 'assets/class/quote-validator.php'; 
/* Load external PHP file   */ // include 'assets/class/stats.php';
/* Load external PHP file   */  include 'assets/class/user.php'; 

// sleep(5);

function is_ajax_request(){  return isset($_SERVER['HTTP_X_REQUESTED_WITH']) && $_SERVER['HTTP_X_REQUESTED_WITH'] == 'XMLHttpRequest';  }

if(!is_ajax_request()) { exit; }


if(isset($_POST)){
    
  //  echo $_POST["name"] ?? "Missing Form Data!!!";

    $test = new QuoteValidator($_POST);
      $errors = $test->validateForm();
   
      /* Initialize a USER object for management of submitted form input. */
      if(empty($errors)){
        
        $usr = new User;
        $usr->sendQuote($_POST);                      
        
      } else {
            /* Include the STATUS element within the errors array */
            $errors += array("status" => false);
             $info = json_encode($errors);
            echo $info;

           }

   } else {

      echo "Server reached BUT Form NOT submitted!!!";

   }