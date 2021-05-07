

class Contact{

    constructor(){

        /* Collect Contact FORM data input */
        this.usrName = document.getElementById("name"); /* Name text input field */
        this.usrEmail = document.getElementById("email"); /* Email text input field */
        this.usrQuery = document.getElementById("query"); /* Query drop down selection field */
        this.usrMsg = document.getElementById("message"); /* Message text area input field */
        this.btnSubmit = document.getElementById("button"); /* Form submission button */
        this.output = ""; /* Place holder for FORM feedback spinner */

        /* Instantiate FORM event listener functionality */
        this.usrName.addEventListener('blur', () => { this.validateField(this.usrName) });
        this.usrEmail.addEventListener('blur', () => { this.validateField(this.usrEmail) });
        this.usrQuery.addEventListener('change', () => { this.validateSelection(this.usrQuery) });
        this.usrMsg.addEventListener('blur', () => { this.validateField(this.usrMsg) });
        this.btnSubmit.addEventListener('click', this.sendResponse.bind(this));
    }

    
formDataDestroy(){
 
    this.usrName.value = "";
    this.usrName.style = "border-color: #ced4da;";
 
    this.usrEmail.value = "";
    this.usrEmail.style = "border-color: #ced4da;";

    this.usrQuery.selectedIndex = 0;
    this.usrQuery.style = "border-color: #ced4da;";

    this.usrMsg.value = "";
    this.usrMsg.style = "border-color: #ced4da;";

}

    sendResponse(e){
        /* Prevent FORM tag from sending user input to server */
        e.preventDefault();
        /* Retain an instance of the OBJECT as the variable SELF */
        let self = this;

        /* Creation of XML object */
        const xhr = new XMLHttpRequest();

        this.output = `name=${this.usrName.value}`;
        this.output += `&topic=${this.usrQuery.options[this.usrQuery.selectedIndex].text}`;
        this.output += `&email=${this.usrEmail.value}`;
        this.output += `&message=${this.usrMsg.value}`;

        self.displaySpinner();
        self.disableSubmitButton();

        /* Send POST request to process user input */
        xhr.open('POST', 'form.php', true);
        xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
        xhr.setRequestHeader('X-Requested-With', 'XMLHttpRequest');
        xhr.output = this.output;
        xhr.send(this.output);

        xhr.onload = function(){
            if(this.status === 200){
                self.removeSpinner();
                self.enableSubmitButton();
                self.renderContent(xhr.responseText);
            }
        }

    }

    renderContent(content){

        let stuff = JSON.parse(content);
        this.errorTest(stuff.Name, stuff.status, 'nameErr', 'name');
        this.errorTest(stuff.Email, stuff.status, 'emailErr', 'email');
        this.errorTest(stuff.Topic, stuff.status, 'queryErr', 'query');
        this.errorTest(stuff.Message, stuff.status, 'msgErr', 'message');

        if(stuff.status === true){
            //  document.getElementById("response").innerHTML = "Thank You for your Business!!!";
            document.getElementById("response").innerHTML = "Success - " + stuff.Success;
            document.getElementById("response").style = "color: green;";
            this.formDataDestroy();
        }

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
        } else { /* #e24a18 */
            document.getElementById(id).innerHTML = " ";
            document.getElementById(id).style = "display: none;";
        }
    }
    
    
    /* Dynamically change the button design & functionality */
    disableSubmitButton() { this.btnSubmit.disabled = true; this.btnSubmit.value = '...Sending Message'; }
    enableSubmitButton() { this.btnSubmit.disabled = false; this.btnSubmit.value = 'Send Message'; }

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


    validateField(field) {
        /* Examine the user input retrieved from FORM field */
        if(field.value.trim().length > 0){
            switch(field.name){
                case 'email':
                    this.validateEmail(field);
                        break;
                case 'name':
                    this.validateName(field);
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

        validateName(field){

            if(field.value.trim().length > 20){
                field.style = 'border-left: 4px solid #ec7048; padding-left: 6px';
                  field.classList.add('error');
            } else {
                field.style = 'border-left: 4px solid green; padding-left: 6px';
                document.getElementById('nameErr').innerHTML = " ";
                field.classList.remove('error');
            }
        
        }
        


}

new Contact();