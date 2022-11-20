document.addEventListener('DOMContentLoaded', function(){
eventListene();

darkMode();
});


function eventListener(){
    const mobileMenu = document.querySelector('.img_hambur');

    mobileMenu.addEventListener('click', navegacionResponsive);

}


function navegacionResponsive(){
    
    const navegacion=document.querySelector('.nav-principal');

    if(navegacion.classList.contains('mostrar')){
        navegacion.classList.remove('mostrar');
    }else{
        navegacion.classList.add('mostrar');
    }
}

function darkMode(){
    const botondarkMode = document.querySelector('.dark-mode');
    botondarkMode.addEventListener('click', function(){
        document.body.classList.toggle('dark-modo')
    });
}
