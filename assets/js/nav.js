/*  
    Form CLASS used to monitor the status of the hamburge icon used
    to toggle the visible of the site's primary navigation when viewed
    on mobile devices.
 */
class Nav{
    constructor(){
        this.hamIcon = document.getElementById('menu-icon');
        this.hamIcon.addEventListener('click', () => {
     

            if(document.querySelector('nav').classList.contains("hidden")){
                document.querySelector('nav').classList.remove('hidden');
                document.getElementById('main').style.marginTop = "68%";
            }else{
                document.querySelector('nav').classList.add('hidden');
                document.getElementById('main').style.marginTop = "0%";
            }
           
        });
    }
}

new Nav();