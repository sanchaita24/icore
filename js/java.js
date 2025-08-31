// navber
let lastScroll = 0;
const hero = document.querySelector(".hero_section");
const nav = document.querySelector("#navber");

window.addEventListener("scroll", () => {
  if (window.scrollY > lastScroll) {
    // scrolling down → hide hero
    hero.classList.add("hide");
    nav.classList.add("fixed-top");
  } else if (window.scrollY === 0) {
    // back to top → show hero
    hero.classList.remove("hide");
    nav.classList.remove("fixed-top");
  }
  lastScroll = window.scrollY;
});








// main-site
$(function () {

    var revealed = false;

    function revealMainSite() {
        if (revealed) return;
        revealed = true;

        // show it first, then animate
        $(".main-site").css("display", "block");
        console.log("revel true");

        gsap.to(".main-site", {
            opacity: 1,
            y: 0,
            delay: 0.6,
            ease: "power3.out"
        });

        // hide container11 if needed
        $(".container11").fadeOut(500);
    }

    // reveal on scroll
    $(window).on("scroll", function () {
        if (window.scrollY > 5) {
            revealMainSite();
        }
    });

});





// form container show
let c = 0;
console.log("from show");
window.addEventListener("scroll", function () {
    if (c === 1) {
        $("#enroll-form").addClass("d-none");
        return;
    }
    const sl = window.pageYOffset;
    console.log("the scroll is:", sl);

    if (sl > 1020) {

        $(".formcontainer").removeClass("d-none");

        $("#enroll-form ").slideDown().css({

            'width': '40%',
            'position': 'fixed',
            'top': '70%',
            'left': '50%',
            'transform': 'translate(-50%, -57%)',
            'background': 'white',
            'padding': '20px',
            'z-index': '1050',
            'box-shadow': '0 0 20px rgba(0,0,0,0.3)'
        });
        $(".formcontainer").css({

            'position': 'fixed',
            'top': '0',
            'left': '0',
            'width': '100vw',
            'height': '100vh',
            'backdrop-filter': 'blur(5px)',
            'background-color': 'rgb(182 209 209 / 75%)',
            'z-index': '1000'

        });

    }
});

//close button enroll form 
$("#close-form").click(function () {

    console.log("close button is work");
    $("#enroll-form").slideUp().addClass("d-none");
    $(".formcontainer").addClass("d-none");
    c = 1;

});



// form popup end by scroll

// typed text 
let typed = new Typed(".line", {
    strings: ["This is the key of success"],
    TypeSpeed: 99,
    loop: true

});
// typed text end







