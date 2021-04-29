<?php 

class QuoteValidator {

    /* UserValidator CLASS Functions */
    /* 1 - Constructor COLLECTS user entered FORM data via POST super global variable  */
    /* 2 - Test for the existence of required FORM field input */
    /* 3 - Execute CLASS method to validate form input based on expected user information */
    /* 4 - Execute CLASS method to pass SANTIZED input to server for processing */

    /* Return ERROR messages if SANTIZATION tests FAIL */
    /* Return SUCCESS messages if SANTIZATION tests PASS */

    private $data;  /* Attribute to collect all info entered within site registration FORM */
    private $errors = [];  /* Attribute to collect all error messages presented within FORM UI */
    private static $fields = ['name', 'email', 'subject', 'topic', 'message'];  /* Attribute to record all required FORM input fields */

    public function __construct($post_data){
        // the DATA attribute will contain an array of records retrieved from the POST super global array
        $this->data = $post_data;
    }

    public function validateForm(){

    // Test for the existence of these fields being entered within the FORM.
  
       $this->validateName();
       $this->validateSubject();
       $this->validateTopic();
       $this->validateEmail();
       $this->validateMessage();


       return $this->errors;

    }

    private function validateName(){
    /* Remove all empty spaces within user input and store as TMP variable 'REC' */
        $rec = trim($this->data['name']);
        $errorMsg = "Empty name fields are not allowed!!!";
        /* If 'REC' variable is BLANK then record error message */
        if(empty($rec)){
                $this->addError("Name", $errorMsg);
                return;

        } else {

            if(!preg_match('/^[a-zA-Z\s]{2,25}$/', $rec)){
                $errorMsg = "Name field criteria not met!!!";
                   $this->addError("Name", $errorMsg);
                   return; 
            } 

        }
    }

    private function validateSubject(){
        /* Remove all empty spaces within user input and store as TMP variable 'REC' */
            $rec = trim($this->data['subject']);
            $errorMsg = "Empty subject fields are not allowed!!!";
            /* If 'REC' variable is BLANK then record error message */
            if(empty($rec)){
                    $this->addError("Subject", $errorMsg);
                    return;
    
            } else {
    
                if(!preg_match('/^[a-zA-Z\s]{2,35}$/', $rec)){
                    $errorMsg = "Subject field criteria not met!!!";
                       $this->addError("Subject", $errorMsg);
                       return; 
                } 
    
            }
        }


    private function validateTopic(){

        /* Remove all empty spaces within user input and store as TMP variable 'REC' */
            $errorMsg = "No topic was selected!!!";
            /* If 'REC' variable is BLANK then record error message */
            if($this->data['query'] == "-- Query Selection --") {
                $this->addError("Query", $errorMsg);
                       return; 
                } 
    
        }
   
        private function validateEmail(){
            $rec = trim($this->data['email']);
            $errorMsg = "Emtpy email address fields are not allowed!!!";
            if(empty($rec)){
                    $this->addError("Email", $errorMsg);
                    return;
            } else {
                
                if(!filter_var($rec, FILTER_VALIDATE_EMAIL)){
                    $errorMsg = "Email entered is not valid!!!";
                            $this->addError("Email", $errorMsg);
                                return;
                }
            }

        }
    

    private function validateMessage(){
        $msg = trim($this->data['message']);
        $errorMsg = "Empty message fields are not allowed!!!";
        if(empty($msg)){
                $this->addError("Message", $errorMsg);
                return;

        } else {

            if(!preg_match('/^$|^[A-Za-z0-9,.\+\-!?:\'\";()\s]{2,60}$/', $msg)){
                $errorMsg = "Criteria for feedback message fields are not met!!!";
                    $this->addError("Message", $errorMsg);
                    return;

            }
        }
    }

    private function addError($field, $errorMsg){
        $this->errors[$field] = $errorMsg;
    }

}
