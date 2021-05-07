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
             this.usrSubject = document.getElementById("subject"); /* Message text input */
             this.usrST = document.querySelector('input[name="businessType"]:checked'); /* Radio button input */
             this.usrQT = document.getElementById("query"); /* Query drop down menu option */
             this.usrForm = document.getElementById("reqForm"); /* Query drop down menu option */  
             this.button = document.getElementById("button");
             this.output = "";
        
                    /* Validate FORM data input */
                 this.usrName.addEventListener('blur', () => { this.validateField(this.usrName) });
                 this.usrEmail.addEventListener('blur', () => { this.validateField(this.usrEmail) });
                 this.usrQT.addEventListener('change', () => { this.validateSelection(this.usrQT) });
                 this.usrSubject.addEventListener('blur', () => { this.validateField(this.usrSubject) });
                 this.usrMsg.addEventListener('blur', () => { this.validateField(this.usrMsg) });
        
                    /* ONCLICK event handler for FORM submit BUTTON */
                this.button.addEventListener('click', this.sendResponse.bind(this));
        
                 /* Use THIS keyword to reference CLASS methods inorder to call them. */
               
               
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
            this.output += `&query=${this.usrQT.options[this.usrQT.selectedIndex].text}`;
            this.output += `&type=${this.usrST.value}`;
            this.output += `&subject=${this.usrSubject.value}`;
            this.output += `&message=${this.usrMsg.value}`;
        
            self.displaySpinner();
            self.disableSubmitButton();
          
            /* Send POST request to process user input */
            xhr.open('POST', 'quote.php', true);
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
                        /*
                            For DIAGNOSTIC purposes 
                            - console.log (xhr.responseText);
                            - console.log("Message sent!");
                            - console.log(xhr.output);
                      */
                    
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
         
            this.usrQT = document.getElementById("query"); /* Query drop down menu option */
         
            this.usrName.value = "";
            this.usrName.style = "border-color: #ced4da;";
         
            this.usrEmail.value = "";
            this.usrEmail.style = "border-color: #ced4da;";
        
            this.usrSubject.value = "";
            this.usrSubject.style = "border-color: #ced4da;";
        
            this.usrQT.selectedIndex = 0;
            this.usrQT.style = "border-color: #ced4da;";
        
            this.usrMsg.value = "";
            this.usrMsg.style = "border-color: #ced4da;";
        
        }
        
        errorTest(record, status, id, field){
        
            /* Check for successful input validation STATUS */
            if(record !== undefined && status === false){
            /* If ERRORS exist for the specific form field insert the error message within the necessary location. */
                document.getElementById(field).style = "border-left: 4px solid #ec7048; padding-left: 6px";
                document.getElementById(id).innerHTML = record;
                document.getElementById(id).style = "color: #ec7048; display: block;";
                document.getElementById("response").innerHTML = "<b>Please review form input details!</b><br>";
                document.getElementById("response").style = "color: #ec7048;";
            } else {
                document.getElementById(id).innerHTML = " ";
                document.getElementById(id).style = "display: none;";
            }
        
        }
        
        renderContent(content){
        
          /* Parse SERVER response info before sending it to page*/    
          let stuff = JSON.parse(content);
          /* 
            Use the ERROR TEST method to ensure no errors were rendered from the server.
            This METHOD takes, 
                - the NAME of the input field being tested 
                - the STATUS of the test returned after the server side rendering is done
                - the tag ID where the error message should be displayed on the screen
          */
          this.errorTest(stuff.Name, stuff.status, 'nameErr', 'name');
          this.errorTest(stuff.Subject, stuff.status, 'subjectErr', 'subject');
          this.errorTest(stuff.Query, stuff.status, 'queryErr', 'query');
          this.errorTest(stuff.Email, stuff.status, 'emailErr', 'email');
          this.errorTest(stuff.Message, stuff.status, 'msgErr', 'message');
        
        /* Once ALL input field tests have PASSED; render the success message to the page. */
            if(stuff.status === true){
                document.getElementById("response").innerHTML = "Success - " + stuff.Success;
                document.getElementById("response").style = "color: green;";
                this.formDataDestroy();
            }
        
        
        }
        
        validateField(field){
            /* Examine the user input retrieved from FORM field  */
                if(field.value.trim().length > 0){
                    switch(field.name) {
                        case 'email': 
                        this.validateEmail(field);
                        break;
                        case 'name':
                         this.validateName(field);
                        break;  
                        case 'subject':
                          this.validateSubject(field);
                        break;    
                        case 'message':
                          this.validateTextArea(field);
                        break;    
                    }
                     
                } else {
                    field.style = 'border-left: 4px solid #ec7048; padding-left: 6px';
                    field.classList.add('error');
                }
        }
        
        /* Query VALIDATION criteria definition */
        validateSelection(field){
    
            if(field.value === '0'){
                  field.style = 'border-left: 4px solid #ec7048; padding-left: 6px';
                  field.classList.add('error');
              } else {
                  field.style = 'border-left: 4px solid green; padding-left: 6px';
                  field.classList.remove('error');
                  document.getElementById('queryErr').innerHTML = " ";
                  document.getElementById('queryErr').style = "display: none;";
           
              }
          }
        
        
        /* Email VALIDATION criteria definition */
        validateEmail(field){
        
           if(field.value.indexOf('@') === -1){
                field.style = 'border-left: 4px solid #ec7048; padding-left: 6px';
                 field.classList.add('error');
             } else {
                field.style = 'border-left: 4px solid green; padding-left: 6px';
                document.getElementById('emailErr').innerHTML = " ";
                field.classList.remove('error');
             }
        }
        
        /* Input VALIDATION criteria definition */
        validateTextArea(field){
    
            if(field.value.trim().length > 0){
            
                if(field.value.trim().length > 60){
                    field.style = 'border-left: 4px solid #ec7048; padding-left: 6px';
                    field.classList.add('error');
                } else {
                    field.style = 'border-left: 4px solid green; padding-left: 6px';
                    document.getElementById('msgErr').innerHTML = " ";
                    field.classList.remove('error');
                }
            
            } else {
                field.style = 'border-left: 4px solid #ec7048; padding-left: 6px';
                field.classList.add('error');
                }
        
        
        }
        
        /* Input VALIDATION criteria definition */
        validateName(field){
        
            if(field.value.trim().length > 0){
                    if(field.value.trim().length > 20){
                        field.style = 'border-left: 4px solid #ec7048; padding-left: 6px';
                          field.classList.add('error');
                    } else {
                        field.style = 'border-left: 4px solid green; padding-left: 6px';
                        document.getElementById('nameErr').innerHTML = " ";
                        field.classList.remove('error');
                    }
        
            } else {
                field.style = 'border-left: 4px solid #ec7048; padding-left: 6px';
                field.classList.add('error');
            }
        
        }
        
        validateSubject(field){
        
            if(field.value.trim().length > 0){
                    if(field.value.trim().length > 20){
                        field.style = 'border-left: 4px solid #ec7048; padding-left: 6px';
                          field.classList.add('error');
                    } else {
                        field.style = 'border-left: 4px solid green; padding-left: 6px';
                        document.getElementById('subjectErr').innerHTML = " ";
                        field.classList.remove('error');
                    }
        
            } else {
                field.style = 'border-left: 4px solid #ec7048; padding-left: 6px';
                field.classList.add('error');
            }
        
        }
        
        
        }
        
        
        
        new Form();
        