$(function() {
    tabs();
    initLinks();

    function tabs() {
        
        
        var tab = $('#tabs .tabs-items > div'); 
        tab.hide().filter(':first').show(); 
        
        // Клики по вкладкам.
        $('#tabs .tabs-nav a').click(function(){
            tab.hide(); 
            tab.filter(this.hash).show(); 
            $('#tabs .tabs-nav a').removeClass('active');
            $(this).addClass('active');
            return false;
        }).filter(':first').click();
    
        // Клики по якорным ссылкам.
        $('.tabs-target').click(function(){
            $('#tabs .tabs-nav a[href=' + $(this).attr('href')+ ']').click();
        });
        
        // Отрытие вкладки из хеша URL
        if(window.location.hash){
            $('#tabs-nav a[href=' + window.location.hash + ']').click();
            window.scrollTo(0, $("#" . window.location.hash).offset().top);
        }
    }
    

    function initLinks() {
        let links = document.querySelectorAll(".tabs-nav-item");
        for ( let i = 0; i < links.length; i++ ){
            links[i].addEventListener ("click", function(e) {
                this.classList.toggle("active")
            }
        )}
    }
    
});
$(function() {
    tabsSlick();

    
    function tabsSlick() {
        $('.slick-wrapper').slick({
            speed: 0,
            infinite: false,
            prevArrow: '<div class="prev"></div>',
            nextArrow: '<div class="next"></div>'
        });
    }
})