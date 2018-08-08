(function ($){
    $(document).ready( () => {
        // animation for header <h2></h2> and the social links
        $('#content-slidein').css('opacity', 1)
        $('#content-slidein').css('marginLeft', 0)

        $('#icon1').css('opacity', 1)

        $('#icon2').css('opacity', 1)

        $('#icon3').css('opacity', 1)
    })

    //usp contact button scroll to bottom-page. 
    $("#contact-button").click(function() {
        $('html,body').animate({
            scrollTop: $(".contactsection").offset().top},
            1000);
    });

    $("#header-contact").click(function() {
        $('html,body').animate({
            scrollTop: $(".contactsection").offset().top},
            1300);
    });
    
    // scrolltop fade-in effect for header-menu. 
    $(window).on("scroll", function(){
        if($(window).scrollTop()){
            $('nav').addClass('black');
        }
        else{
            $('nav').removeClass('black');
        }
    })


}) (jQuery);
