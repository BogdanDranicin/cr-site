$(function () {
	initMenu();


    function initMenu() {
        let stat = document.querySelectorAll(".results__block-item");
        for ( let i = 0; i < stat.length; i++ ){
            stat[i].addEventListener ("click", function(e) {
                this.classList.toggle("active")
            }
        )}
    }
  
});