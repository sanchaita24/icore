window.addEventListener("load", function () {

  const icons = [
    '<i class="fab fa-facebook"></i>',
    '<i class="fab fa-twitter"></i>',
    '<i class="fab fa-instagram"></i>',
    '<i class="fab fa-youtube"></i>'
  ];


  document.querySelector(".main-site").style.display = "none";
  // Intro animation (on page load)
  let tl = gsap.timeline();

  document.querySelectorAll(".box").forEach((box, i) => {
    box.dataset.index = i;
  });

  tl.from(".box", {
    x: -800,
    duration: 2,
    rotate: 360,
    backgroundColor: "blue",
    stagger: {
      each: 1,
      onComplete: function () {
        let i = this.targets()[0].dataset.index;
        this.targets()[0].innerHTML = icons[i];
        this.targets()[0].style.background = "transparent";
      }
    }
  });



  // On scroll: hide .container11 and show the rest

  // window.addEventListener("scroll", function () {
  //   if (window.scrollY > 1) {
  //     gsap.to(".container11", {
  //       onComplete: () => {
  //         // reveal all other sections
  //         document.querySelector(".container11").style.display = "none";
  //         gsap.to(".main-site", {
  //           autoAlpha: 1,
  //           display: "block",
  //           duration: 3,
  //           delay: 0.1,
  //           ease: "power2.out"
  //         });

  //       }
  //     });
  //   }
  // });


  gsap.from(".head", {
    autoAlpha: 0,
    y: 400,
    duration: 2,
    delay: 1,
    color: "blue"

  })
  gsap.from("#coursebtn", {
    autoAlpha: 0,
    x: -300,
    duration: 4,
    delay: 3

  })


  // countup start


  const CountUp = window.countUp.CountUp;

  // Create instance
  const count = new CountUp("counter", 20000, {
    duration: 3,
    separator: ",",
    //prefix: "+",
    suffix: "+ Students"
  });

  if (!count.error) {
    count.start();
  } else {
    console.error(count.error);
  }
  // main_nav
  gsap.from(".main_navber", {
    autoAlpha: 0,
    y: 50,
    duration: 5,
    dealy: 3
  });


  // gsap.from(".image1", {
  //   autoAlpha: 0,
  //   y: -600,
  //   duration: 3,
  //   delay: 2,
  //   onComplete: () => {

  //   }

  // });


  gsap.from(".image1", {
    autoAlpha: 0,
    y: -400,
    duration: 3,
    delay: 2
  });

  // gsap.to(".box",{
  //  x:700,
  //  duration:3,
  //  delay:2,
  //  rotate:360,
  //  backgroundColor:"white",
  //   onComplete:()=>{
  //     gsap.set(".box",{
  //         display: "none"
  //     });
  //  },
  //  stagger:0.5,


  // });


});



// carousel h1 and p tag content

const carousel = document.getElementById("carouselExampleInterval");

  
  function animateCaption(el, direction = "left") {
    gsap.fromTo(el, 
      { autoAlpha: 0, x: direction === "left" ? "-100%" : "100%" }, 
      { autoAlpha: 1, x: "0%", duration: 1, ease: "power3.out" }
    );
  }

 
  carousel.addEventListener("slid.bs.carousel", () => {
    let activeSlide = carousel.querySelector(".carousel-item.active");
    let h1 = activeSlide.querySelector("h1");
    let p = activeSlide.querySelector("p");

    if (h1) animateCaption(h1, "left");   
    if (p) animateCaption(p, "right");   
  });

 
  window.addEventListener("load", () => {
    let firstSlide = carousel.querySelector(".carousel-item.active");
    let h1 = firstSlide.querySelector("h1");
    let p = firstSlide.querySelector("p");

    if (h1) animateCaption(h1, "left");
    if (p) animateCaption(p, "right");
  });


