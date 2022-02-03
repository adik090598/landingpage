var topper = $('nav').offset().top;

window.onscroll = function() { scroller() };

// sticky function
function scroller() {
    if($(window).scrollTop() > topper) {
        console.log("if");
        $('.nav-a').addClass('fixed');
    }
    else if($(window).scrollTop() == topper)  {
        console.log("else");
        $('.nav-a').removeClass('fixed');
    }
}


$(function () {
    $('nav li a').filter(function () {
        if(location.href === "") {
            return this.href === "/"
        } else  {
            return this.href === location.href;
        }

    }).addClass('active');
});


// $(".burger-menu").on("click", function() {
//     /* your code here */
//     console.log("asd");
//     $('nav>li').slideToggle();
// });
