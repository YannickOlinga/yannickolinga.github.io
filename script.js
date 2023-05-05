$(document).ready(function () {
    $(window).scroll(function () {
        if (this.scrollY > 100) {
            $('.navbar').addClass("sticky");
            $('.navbar').removeClass("over");
            $('.navbar').addClass("lol");
        } else {
            $('.navbar').removeClass("sticky");
            $('.navbar').addClass("over");
            $('.navbar').removeClass("lol");
        }
        if(this.scrollY> 500){
            $('.scroll-up-btn').addClass('.show')
        }else{
            $('.scroll-up-btn').removeClass('show')
        }
    });

    var typed = new Typed(".typing", {
        strings: ["Developpeur", "Bloggueur", "Freelance" , "Designer","Vlogguer" ],
        typeSpeed:200,
        backSpeed:60,
        loop:true
    })


    $('.scroll-up-btn').click(function(){
        $('html').animate({scrollTop: 0});
    });


    $('.menu-btn').click(function(){
        $('.navbar .menu').toggleClass("active");
      })
});


