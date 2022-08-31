$(function () {
	initMenu();
	profile();


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
        let authorization= document.querySelector(".header__authorization");
        profile.addEventListener('click', function(e){
            authorization.classList.toggle('authorization')
        })
    }
  
});