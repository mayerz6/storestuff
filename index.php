<?php 

/* Definition of User CLASS */
class User {

    /* Definition of UNIQUE class properties */
    private $email = "test@user.com";
    private $username = "testuser";

  /* Definition of User CLASS contructor function */
     public function __construct($usrEmail, $usrName){
        $this->email = $usrEmail;
        $this->username = $usrName;
    }

    /* Getter Function  */
    public function getEmail(){
        return $this->email;
    }
    /* Setter Function */
    public function setEmail($email){
        if(strpos($email, '@') > -1){
            $this->email = $email;
        } else {
            $this->email = "no-valid-email@entered.com";
        }
    }

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

    /* Definition of showUser function */
    public function showUser(){
        return "$this->email and $this->username exists within the database";
    }
}

class Visitor extends User{

    public $userId;

    public function __construct($usrId, $usrEmail, $usrName){
        $this->userId = $usrId;
        parent::__construct($usrEmail, $usrName);
    }

}

class Customer extends User{

    public $customerId;

    public function __construct($customerId, $usrEmail, $usrName){
        $this->customer = $customerId;
        parent::__construct($usrEmail, $usrName);
    }

}


/* Instantiation of User CLASS to define site visitor engagement */

$user1 = new User("mayers@larrymayers.site", "Nicole Mayers");

echo 'This class is <b>' . get_class($user1) . '</b><br>';

echo $user1->getEmail();

echo "<br>";
echo "<br>";
echo "<br>";

$user2 = new User("info@larrymayers.site", "Larry Mayers");

echo 'This class is <b>' . get_class($user2) . '</b><br>';

echo $user2->showUser();

echo "<br>";
echo "<br>";
echo "<br>";

$user2->setEmail("joke@lasersharks.io");
$user1->setUsername("");

echo $user1->showUser() . '<br><br>';
echo $user2->showUser() . '<br><br>';

echo $user1->getEmail() . '<br><br>';
echo $user2->getEmail();


?>

<!DOCTYPE html>

<html lang="en">
    <head>
        <title>Store Stuff</title>
            <link rel="stylesheet" href="assets/css/styles.css" />    
    </head>

    <body>
        <h1>Let's Protect Your Stuff For You!</h1>
            <section id="screen">
                <p>Explore Our Storage Space, Co-Working Space, Co-Warehouse & Services</p>
                    <div id="fbRegion">
                        <span>Name: </span><input type="text"  />
                        <span>Email: </span><input type="email" />
                        <span>Query: </span><input type="text" />
                        <span>Message: </span><textarea type="text" ></textarea>
                    </div>
                    <div id="imgRegion"><img src="" /></div>
             </section>

    </body>
</html>