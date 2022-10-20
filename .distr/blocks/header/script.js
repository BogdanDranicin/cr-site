$(function () {
	initMenu();
	profile();
    burgerMenu();
    
    function burgerMenu() {
        let burger = document.querySelector(".header__burger");
        let burgerMenu= document.querySelector(".mob");
        burger.addEventListener('click', function(e){
            $(this).toggleClass('open');
            burgerMenu.classList.toggle('active')
        })
    }

    function initMenu() {
        let droplist = document.querySelectorAll(".droplist");
        for ( let i = 0; i < droplist.length; i++ ){
            droplist[i].addEventListener ("click", function(e) {
                this.classList.toggle("active")
            }
        )}
    }
    function profile() {
        let profile = document.querySelector(".header__authorization-flex");
        let authorization = document.querySelector(".header__authorization");
        let authorized = document.querySelector(".authorized")
        profile.addEventListener('click', function(e){
            authorization.classList.toggle('authorization')
            authorized.classList.toggle('active')
        })
    }
  
});