// tuyped text 
let typed = new Typed(".line", {
    strings: ["This is the key of success"],
    TypeSpeed: 99,
    loop: true

});


// navber colore change
const nav = document.getElementById("navber");
const navlist = document.getElementsByClassName("navitem");
window.addEventListener("scroll", () => {
    // console.log("hi");
    if (window.pageYOffset > 12) {
        nav.style.background = 'rgb(164,158,213,0.5)';

        for (let i = 0; i < navlist.length; i++) {
            navlist[i].classList.remove('text-light');
            navlist[i].setAttribute('style', 'color: black;');

        }
               
                

    }

    else {
         nav.style.background = 'black';
         for (let i = 0; i < navlist.length; i++) {
            navlist[i].classList.add('text-light');

        }
       
    }

});