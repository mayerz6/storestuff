/*  
    Form CLASS used to monitor the status of the input fields before user input is 
    sent to the server for processing.
 */
class Form{

constructor(){

    /* Collect FORM data input */
     this.usrName = document.getElementById("name"); /* Name text input */
     this.usrEmail = document.getElementById("email"); /* Email text input */
     this.usrMsg = document.getElementById("message"); /* Message text input */
     this.usrST = document.querySelector('input[name="businessType"]:checked'); /* Radio button input */
     this.usrQT = document.getElementById("query"); /* Query drop down menu option */
     this.usrForm = document.getElementById("reqForm"); /* Query drop down menu option */  
     this.button = document.getElementById("button");
     this.output = "";

            /* Validate FORM data input */
          this.usrName.addEventListener('blur', () => { /* console.log(this.usrName.value); */ this.validateField(this.usrName) });
           
         this.usrEmail.addEventListener('blur', () => { /* console.log(this.usrName.value); */ this.validateField(this.usrEmail) });

         this.usrMsg.addEventListener('blur', () => { /* console.log(this.usrName.value); */ this.validateTextArea(this.usrMsg) });

            /* ONCLICK event handler for FORM submit BUTTON */
        this.button.addEventListener('click', this.sendResponse.bind(this));

         /* Use THIS keyword to reference CLASS methods inorder to call them. */
       
       
}

/* Procedural Design Pattern */
 
/* Reference FORM submit button */

queryZip(e){

    e.preventDefault();

    let self = this;

    const xhr = new XMLHttpRequest();
    const url = "https://www.googleapis.com/discovery/v1/apis/youtube/v3/rest";

    xhr.open('GET', url, true);

    xhr.onreadystatechange = () => {
        if(xhr.readyState === 2){
            self.renderZipCode('codeInfo', "Loading!!!");
        }
        if(xhr.readyState === 4 && xhr.status === 200){
            self.renderZipCode('codeInfo', xhr.responseText);
        }
    }
    xhr.send();

}

renderZipCode(id, content){

    document.getElementById(id).innerHTML = content;
    document.getElementById(id).style = "color: #EEff00";

}


sendResponse(e){

      /* Prevent FORM tag from sending user input to server */ 
      e.preventDefault();
    /* Retain an instance of the OBJECT as the variable SELF */
      let self = this;
    
      /* Creation of XML object */
    const xhr = new XMLHttpRequest();
    this.output = `name=${this.usrName.value}`;
    this.output += `&email=${this.usrEmail.value}`;
    this.output += `&message=${this.usrMsg.value}`;

    self.displaySpinner();
    self.disableSubmitButton();
  
    /* Send POST request to process user input */
    xhr.open('POST', 'mail.php', true);
    /* Construction of the query string for delivery to the server */
    xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
    xhr.setRequestHeader('X-Requested-With', 'XMLHttpRequest');
    xhr.output = this.output;
    xhr.send(this.output);

  /* Once server has been SUCCESSFULLY reached; update the site UI as necessary */
    xhr.onload = function(){
        if(this.status === 200){
            self.removeSpinner();
            self.enableSubmitButton();
  
            console.log("Message sent!");
                console.log(xhr.output);
    
           /* Retained variable SELF used to access CLASS method "renderContent" */
           /* Send XMLHttpRequest object's response info to the CLASS function for client side processing */   
           self.renderContent(xhr.responseText);
       
        }
    };
  
}

disableSubmitButton() { this.button.disabled = true; this.button.value = '...Sending Message'; }
enableSubmitButton() { this.button.disabled = false; this.button.value = 'Send Message'; }

/* Dynamic creation of our GIF for rendering to the page. */
displaySpinner() { 

    let spinner = document.createElement("img");
    spinner.src = "./assets/img/sEKwt.gif";
    spinner.style = "width: 15%; height: 15%; margin: 0; padding: 0;";
    spinner.id = "spinner-gif"
    document.getElementById("response").appendChild(spinner);

 }
 /* Dynamic deletion of our GIF once our content has successfully loaded. */
removeSpinner() { document.getElementById("spinner-gif").remove(); }

formDataDestroy(){
 
    this.usrName.value = "";
    this.usrName.style = "border-color: #ced4da;";
 
    this.usrEmail.value = "";
    this.usrEmail.style = "border-color: #ced4da;";
 
    this.usrMsg.value = "";
    this.usrMsg.style = "border-color: #ced4da;";

}

errorTest(record, status, id){

    console.log(id);
    /* Check for successful input validation STATUS */
    if(record !== undefined && status === false){
    /* If ERRORS exist for the specific form field insert the error message within the necessary location. */
        document.getElementById(id).innerHTML = record;
        document.getElementById(id).style = "color: #ff0000; display: block;";
        document.getElementById("response").innerHTML = "<b>Please review form input details!</b><br>";
        document.getElementById("response").style = "color: #ff0000;";
    } else {
        document.getElementById(id).innerHTML = " ";
        document.getElementById(id).style = "display: none;";
    }
}

renderContent(content){

  /* Parse SERVER response info before sending it to page*/    
  let stuff = JSON.parse(content);
  
  /* 
    Use the ERRORTEST method to ensure no errors were rendered from the server.
    This METHOD takes, 
        - the NAME of the input field being tested 
        - the STATUS of the test returned after the server side rendering is done
        - the tag ID where the error message should be displayed on the screen
      
  */
        
  this.errorTest(stuff.Name, stuff.status, 'nameErr');
  this.errorTest(stuff.Email, stuff.status, 'emailErr');
  this.errorTest(stuff.Message, stuff.status, 'msgErr');

/* Once ALL input field tests have PASSED; render the success message to the page. */
    if(stuff.status === true){
        //  document.getElementById("response").innerHTML = "Thank You for your Business!!!";
        document.getElementById("response").innerHTML = "Success - " + stuff.Success;
        document.getElementById("response").style = "color: #00ff00;";

    }


}

validateField(field){
    /* Examine the user input retrieved from FORM field  */
        if(field.value.trim().length > 0){
            switch(field.type) {
                case 'email': 
                //   console.log(field.type);
                this.validateEmail(field);
                break;
                case 'text':
                //    console.log(field.type);
                this.validateText(field);
                break;    
                }
             
        } else {
            field.style.borderColor = 'red';
            field.classList.add('error');
        }
}

/* Email VALIDATION criteria definition */
validateEmail(field){
    console.log(field);
    console.log("Validated!");
    if(field.value.indexOf('@') === -1){
         field.style.borderColor = 'red';
         field.classList.add('error');
     } else {
        field.style.borderColor = 'green';
        field.classList.remove('error');
     }
}

/* Input VALIDATION criteria definition */
validateTextArea(field){
    if(field.value.trim().length > 0){
    
    if(field.value.trim().length > 60){
        field.style.borderColor = 'red';
          field.classList.add('error');
    } else {
        console.log("Validated!");
        field.style.borderColor = 'green';
        field.classList.remove('error');
    }
    
    } else {
        console.log("Validated!");
        field.style.borderColor = 'red';
        field.classList.add('error');
        }


}

validateText(field){

    if(field.value.trim().length > 20){
        field.style.borderColor = 'red';
          field.classList.add('error');
    } else {
        console.log("Validated!");
        field.style.borderColor = 'green';
        field.classList.remove('error');
    }

}

checkName(name){ return "Son"; }
checkEmail(name){ return "James"; }
checkMessage(name){ return "Cool"; }

}



new Form();
