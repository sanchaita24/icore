// typed text 
// let typed = new Typed(".line", {
//     strings: ["This is the key of success"],
//     TypeSpeed: 99,
//     loop: true

// });

let el = document.querySelector("#navber");
if (el) {
    console.log(el.tagName);
} else {
    console.warn("Element not found: #navber");
}

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


// typed text 
let typed = new Typed(".line", {
    strings: ["This is the key of success"],
    TypeSpeed: 99,
    loop: true

});
// typed text end


// index form of popup enroll
// const enroll = document.getElementById("enroll-form");

// window.addEventListener("scroll", function () {
//     if (window.pageYOffset > 33) {
//         // SHOW form


//         enroll.classList.remove("d-none");
//         enroll.classList.add("d-block");
//         enroll.style.width = "55%";
//         enroll.style.position = "absolute";
//         enroll.style.top = "66%";
//         enroll.style.left = "50%";
//         enroll.style.background = "blue";
//         enroll.style.transform = "translateX(-50%)";
//         enroll.style.zIndex = "999";f
//         console.log("work");

//     } else {
//         // HIDE form
//         enroll.classList.remove("d-block");
//         enroll.classList.add("d-none");
//         console.log("not work");
//     }
// });


// close button for from
