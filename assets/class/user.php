<?php

require './assets/PHPMailer/class.phpmailer.php';
require './assets/PHPMailer/class.pop3.php';
require './assets/PHPMailer/class.smtp.php';
require './assets/PHPMailer/class.phpmaileroauth.php';


/* Definition of User CLASS */
class User {

    /* Definition of UNIQUE class properties */
    private static $email = "info@storestuff.site";
    private static $pwd = "M@y3rZ.S0urc#!9a";
    private static $host = "mail.privateemail.com";

    private $subject = "#yT^Qk~1";
    private $query = "jk&*sQ";
    private $msg = "";

  /* Definition of User CLASS contructor function */
    //  public function __construct($usrEmail, $usrName){
    //     $this->email = $usrEmail;
    //     $this->username = $usrName;
    // }
    
    /* Return PRIVATE server credential info via CLASS Method. */
    public static function getPwd(){ return self::$pwd; }
    
    public static function getEmail(){ return self::$email; }
    
    public static function getHost(){ return self::$host; }

    /* Setter Function */
    public function setEmail($email){
        if(strpos($email, '@') > -1){
            $this->email = $email;
        } else {
            $this->email = "no-valid-email@entered.com";
        }
    }

    /* Getter Function  */
    public function getUsername(){
        return $this->username;
    }

    public function setUsername($username){
        if(strlen($username) > 0){
            $this->username = $username;
        } else {
            $this->username = "Bad Username Entered";
        }
    }

    public function sendEmail($formData){

        /* Collect & Store all POST data as local variables based on their name. */
        extract($formData);

        //PHPMailer Object
        $mail = new PHPMailer(true); //Argument true in constructor enables exceptions
        $mail->isSMTP();
        $mail->isHTML(true);


      //  $str .= "$this->msg";

      //  echo "Message sent! <br><br><b>$str</b>";

        //Enable SMTP debugging
        // 0 = off (for production use)
        // 1 = client messages
        // 2 = client and server messages
        $mail->SMTPDebug = 0;

        //Ask for HTML-friendly debug output
        $mail->Debugoutput = 'html';

        //Set the hostname of the mail server
        // $mail->Host = 'mail.privateemail.com';
        $mail->Host = User::getHost();
        // use
        // $mail->Host = gethostbyname('smtp.gmail.com');
        // if your network does not support SMTP over IPv6

        //Set the SMTP port number - 587 for authenticated TLS, a.k.a. RFC4409 SMTP submission
        $mail->Port = 587;

        //Set the encryption system to use - ssl (deprecated) or tls
        $mail->SMTPSecure = 'tls';

        //Whether to use SMTP authentication
        $mail->SMTPAuth = true;


        //$mail->Username = "admin@athlene.site";
        $mail->Username = User::getEmail();
        $mail->Password = User::getPwd();

        //From email address and name
        $mail->From = User::getEmail();
        $mail->FromName = "Athlene Learning - Tutelage Request Message";

        //To address and name
        $mail->addAddress("admin@athlene.site", "Athlene Learning");
        // $mail->addAddress("info@larrymayers.site", "Larry Mayers"); //Recipient name is optional

        //Address to which recipient will reply
        $mail->addReplyTo($email, $name);

        //CC and BCC
        // $mail->addCC("admin@athlene.site");
        // $mail->addCC("larrymayers101@gmail.com");
        $mail->addBCC("info@larrymayers.site");

        //Send HTML or Plain Text email
        $mail->isHTML(true);

        //Set the subject line
        $mail->Subject = $topic;
       // $mail->Body = "<h1>" . $formData['name'] .  "</h1><br><p><b>Contact: </b>" . $contact . "</p><br><p><b>Email: </b>" . $email . "</p><p><b>Requested Topic: </b>" . $usrTopic . "</p><p><b>Academic Level: </b>" . $usrLevel . "</p><p><b>Time Requested: </b>" . $usrSessTime . "</p><p><b>Student Designation: </b>" . $stuDef . "</p><h6>Please review the received message below.</h6><br>" . $formData['message'];
        $mail->Body = "<span>Please review the received message below.</span><br>"
                    . "<h4>Message Author: </h4><span>" . $name . " - " . $email . "</span><br>" 
                    . "<h4>Message Details: </h4><p>" . $message ."</p>";
                
        $str = "Thank you $name for sending your feedback. <br> ";
        $str .= "We do appreciate you reaching out to us and will respond, <br>";
        $str .= "to your query shortly. <br><br>";
        $str .= "Original Message: <br><br><br>";
      
        try  {
            $mail->send();

               echo json_encode(
                array(
                    'status' => true,
                    'Success' => "Email Sent!"
                    )
                );
            

        } catch (Exception $e) {

            echo json_encode(
                array(
                  'status' => false,
                  'error' => $e -> getMessage(),
                  'error_code' => $e -> getCode()
                )
              );
        }

    }


    
    public function sendQuote($formData){

        extract($formData);

        //PHPMailer Object
        $mail = new PHPMailer(true); //Argument true in constructor enables exceptions
        $mail->isSMTP();
        $mail->isHTML(true);

  
        $str = "Thank you $name for sending your feedback. <br> ";
        $str .= "We do appreciate you reaching out to us and will respond, <br>";
        $str .= "to your query shortly. <br><br>";
        $str .= "Original Message: <br><br><br>";
      //  $str .= "$this->msg";

      //  echo "Message sent! <br><br><b>$str</b>";

        //Enable SMTP debugging
        // 0 = off (for production use)
        // 1 = client messages
        // 2 = client and server messages
        $mail->SMTPDebug = 0;

        //Ask for HTML-friendly debug output
        $mail->Debugoutput = 'html';

        //Set the hostname of the mail server
        // $mail->Host = 'mail.privateemail.com';
        $mail->Host = User::getHost();
        // use
        // $mail->Host = gethostbyname('smtp.gmail.com');
        // if your network does not support SMTP over IPv6

        //Set the SMTP port number - 587 for authenticated TLS, a.k.a. RFC4409 SMTP submission
        $mail->Port = 587;

        //Set the encryption system to use - ssl (deprecated) or tls
        $mail->SMTPSecure = 'tls';

        //Whether to use SMTP authentication
        $mail->SMTPAuth = true;


        //$mail->Username = "admin@athlene.site";
        $mail->Username = User::getEmail();
        $mail->Password = User::getPwd();

        //From email address and name
        $mail->From = User::getEmail();
        $mail->FromName = "Athlene Learning - Tutelage Request Message";

        //To address and name
        $mail->addAddress("admin@athlene.site", "Athlene Learning");
        // $mail->addAddress("info@larrymayers.site", "Larry Mayers"); //Recipient name is optional

        //Address to which recipient will reply
        $mail->addReplyTo($email, $name);

        //CC and BCC
        // $mail->addCC("admin@athlene.site");
        // $mail->addCC("larrymayers101@gmail.com");
        $mail->addBCC("info@larrymayers.site");

        //Send HTML or Plain Text email
        $mail->isHTML(true);

        //Set the subject line
        $mail->Subject = $query;
       // $mail->Body = "<h1>" . $formData['name'] .  "</h1><br><p><b>Contact: </b>" . $contact . "</p><br><p><b>Email: </b>" . $email . "</p><p><b>Requested Topic: </b>" . $usrTopic . "</p><p><b>Academic Level: </b>" . $usrLevel . "</p><p><b>Time Requested: </b>" . $usrSessTime . "</p><p><b>Student Designation: </b>" . $stuDef . "</p><h6>Please review the received message below.</h6><br>" . $formData['message'];
        $mail->Body = "<h1>Message Author: " . $name . " - " . $email . "</h1><br>"
                    . "<span>Please review the received message below.</span><br>" 
                    . "<p>" . $message ."</p>";
                
        //$mail->AltBody = "This is the plain text version of the email content";

        try  {
            $mail->send();

               echo json_encode(
                array(
                    'status' => true,
                    'Success' => "Email Sent!"
                    )
                );
            

        } catch (Exception $e) {

            echo json_encode(
                array(
                  'status' => false,
                  'error' => $e -> getMessage(),
                  'error_code' => $e -> getCode()
                )
              );
        }

    }


    /* Definition of showUser function */
    public function showUser(){
        return "$this->email and $this->username exists within the database";
    }

    
}

class Visitor extends User{

    public $userId;

    // public function __construct($usrId, $usrEmail, $usrName){
    //     $this->userId = $usrId;
    //     parent::__construct($usrEmail, $usrName);
    // }

}

class Customer extends User{

    public $customerId;

    // public function __construct($customerId, $usrEmail, $usrName){
    //     $this->customer = $customerId;
    //     parent::__construct($usrEmail, $usrName);
    // }

}

// $instance = new Visitor("001", "info@larrymayers.site", "mayerz6");
