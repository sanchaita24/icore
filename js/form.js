$(document).ready(function () {

    window.addEventListener("scroll", function () {
        if (window.pageYOffset > 33) {
            $(".form").removeClass("d-none");

            $("#enroll-form").css({
                'display':'block',
                'position': 'absolute',
                'top': '-166rem',
                'left': '66%',
                'background': 'aliceblue'

            });
            console.log("scroll work");
        }
        else {
            $(".form").css({
                'background-color': 'blue'
            });
        }

    });

});
