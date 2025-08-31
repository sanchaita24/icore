<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/assest.css">
    <link rel="stylesheet" href="css/style.css">
    <!-- Fonts link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

    <!-- google font -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <title> Enroll Form</title>
</head>
<style>
#enroll-form .back {
    position: relative;
}

.back:after {
    content: " ";
    width: 100%;
    height: 100%;
    background: rgba(119, 114, 114, 0.72);
}
</style>

<body>
    <!-- popup enroll form -->

    <!-- form  d-flex align-items-center gap-1-->
    <section class="form  d-none" id="enroll-form">
        <button type="button" id="close-form" class="btn btn-outline-danger btn-sm  mt-3 mx-3"
            style="position:relative;">
            <span class="bi bi-x-lg"></span>
        </button>
        <form action="#" method="post">
            <h3 class="text-center text-dark">Enrollment Box</h3>
            <div class="mb-3 mx-3">
                <label for="email" class="form-label">Email address</label>
                <input type="email" class="form-control" name="email" placeholder="name@example.com" autocomplete="off">
            </div>

            <div class="mb-3 mx-3">
                <label for="text" class="form-label">Enter password</label>
                <input type="password" class="form-control" name="password" placeholder="password" autocomplete="off">
            </div>

            <div class="mb-3 mx-3">
                <label for="text" class="form-label">Enter confirm password</label>
                <input type="password" class="form-control" name="cpassword" placeholder="password" autocomplete="off">
            </div>

            <div class="mb-3 mx-3">
                <div class="row">
                    <div class="col-md-6">
                        <label for="mobile" class="form-label">Mobile number</label>
                        <input type="text" class="form-control" id="mobile" name="mobile" placeholder="Mobile"
                            autocomplete="off">
                    </div>
                    <div class="col-md-6">
                        <label for="pin" class="form-label">Pin code</label>
                        <input type="text" class="form-control" id="pin" name="pin" placeholder="Pin code"
                            autocomplete="off">
                    </div>
                </div>
            </div>
            <div class="text-center" id="sbt">
                <button type="submit" class="btn btn-primary mb-3" id="sbt-btn">Submit</button>
            </div>

        </form>
    </section>
    <!-- user section -->
    <section class="user">
        <div class="row align-items-center">
            <div class="col-md-4">
                <div class="card user_card" style="width: 18rem;">
                    <img src="https://d3njjcbhbojbot.cloudfront.net/api/utilities/v1/imageproxy/https://images.ctfassets.net/wp1lcwdav1p1/N4qrT1XIveNL5SMHSkjTH/b57854e9246bd3aa9fe9ebc51ce650d1/Circle_Kenia.png?auto=format%2Ccompress&amp;dpr=1&amp;w=202&amp;h=202&amp;q=40"
                        srcset="https://d3njjcbhbojbot.cloudfront.net/api/utilities/v1/imageproxy/https://images.ctfassets.net/wp1lcwdav1p1/N4qrT1XIveNL5SMHSkjTH/b57854e9246bd3aa9fe9ebc51ce650d1/Circle_Kenia.png?auto=format%2Ccompress&amp;dpr=2&amp;w=202&amp;h=202&amp;q=40 2x, https://d3njjcbhbojbot.cloudfront.net/api/utilities/v1/imageproxy/https://images.ctfassets.net/wp1lcwdav1p1/N4qrT1XIveNL5SMHSkjTH/b57854e9246bd3aa9fe9ebc51ce650d1/Circle_Kenia.png?auto=format%2Ccompress&amp;dpr=3&amp;w=202&amp;h=202&amp;q=40 3x"
                        class="_zdxht7 mx-5" alt="" style="max-width: 202px; max-height: 202px;" class="card-img-top"
                        alt="...">
                    <div class="card-body">
                        <h3 class="text-center text-primary mt-3">Sana</h3>
                        <p class="card-text text-center">Some quick example text to build on the card title and make up
                            the bulk of
                            the
                            card’s content.</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="row align-items-center">
            <div class="col-md-4">
                <div class="card user_card" style="width: 18rem;">
                    <img src="https://d3njjcbhbojbot.cloudfront.net/api/utilities/v1/imageproxy/https://images.ctfassets.net/wp1lcwdav1p1/66DwUMt1tQTmR4q1JaHPdV/71cbdd4415999eecfcd899283086260c/Circle_Ryan.png?auto=format%2Ccompress&amp;dpr=1&amp;w=202&amp;h=202&amp;q=40"
                        srcset="https://d3njjcbhbojbot.cloudfront.net/api/utilities/v1/imageproxy/https://images.ctfassets.net/wp1lcwdav1p1/66DwUMt1tQTmR4q1JaHPdV/71cbdd4415999eecfcd899283086260c/Circle_Ryan.png?auto=format%2Ccompress&amp;dpr=2&amp;w=202&amp;h=202&amp;q=40 2x, https://d3njjcbhbojbot.cloudfront.net/api/utilities/v1/imageproxy/https://images.ctfassets.net/wp1lcwdav1p1/66DwUMt1tQTmR4q1JaHPdV/71cbdd4415999eecfcd899283086260c/Circle_Ryan.png?auto=format%2Ccompress&amp;dpr=3&amp;w=202&amp;h=202&amp;q=40 3x"
                        class="_zdxht7 mx-5" alt="" style="max-width: 202px; max-height: 202px;" class="card-img-top"
                        alt="...">
                    <div class="card-body">
                        <h3 class="text-center text-primary mt-3">Kiyan</h3>
                        <p class="card-text text-center">Some quick example text to build on the card title and make up
                            the bulk of
                            the
                            card’s content.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row align-items-center">
            <div class="col-md-4">
                <div class="card user_card" style="width: 18rem;">
                    <img src="https://d3njjcbhbojbot.cloudfront.net/api/utilities/v1/imageproxy/https://images.ctfassets.net/wp1lcwdav1p1/28Nv1NZrGQsLf4kt8CXMdd/66d2002ee1d804a0a1a9729376648060/Vishal_Verma.png?auto=format%2Ccompress&amp;dpr=1&amp;w=202&amp;h=202&amp;q=40"
                        srcset="https://d3njjcbhbojbot.cloudfront.net/api/utilities/v1/imageproxy/https://images.ctfassets.net/wp1lcwdav1p1/28Nv1NZrGQsLf4kt8CXMdd/66d2002ee1d804a0a1a9729376648060/Vishal_Verma.png?auto=format%2Ccompress&amp;dpr=2&amp;w=202&amp;h=202&amp;q=40 2x, https://d3njjcbhbojbot.cloudfront.net/api/utilities/v1/imageproxy/https://images.ctfassets.net/wp1lcwdav1p1/28Nv1NZrGQsLf4kt8CXMdd/66d2002ee1d804a0a1a9729376648060/Vishal_Verma.png?auto=format%2Ccompress&amp;dpr=3&amp;w=202&amp;h=202&amp;q=40 3x"
                        class="_zdxht7 mx-5" alt="" style="max-width: 202px; max-height: 202px;" class="card-img-top"
                        alt="...">
                    <div class="card-body">
                        <h3 class="text-center text-primary mt-3">Nikhil</h3>
                        <p class="card-text text-center">Some quick example text to build on the card title and make up
                            the bulk of
                            the
                            card’s content.</p>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <!-- user section -->
    <section class="user">
        <div class="row align-items-center">
            <div class="col-md-4">
                <div class="card user_card" style="width: 18rem;">
                    <img src="https://d3njjcbhbojbot.cloudfront.net/api/utilities/v1/imageproxy/https://images.ctfassets.net/wp1lcwdav1p1/N4qrT1XIveNL5SMHSkjTH/b57854e9246bd3aa9fe9ebc51ce650d1/Circle_Kenia.png?auto=format%2Ccompress&amp;dpr=1&amp;w=202&amp;h=202&amp;q=40"
                        srcset="https://d3njjcbhbojbot.cloudfront.net/api/utilities/v1/imageproxy/https://images.ctfassets.net/wp1lcwdav1p1/N4qrT1XIveNL5SMHSkjTH/b57854e9246bd3aa9fe9ebc51ce650d1/Circle_Kenia.png?auto=format%2Ccompress&amp;dpr=2&amp;w=202&amp;h=202&amp;q=40 2x, https://d3njjcbhbojbot.cloudfront.net/api/utilities/v1/imageproxy/https://images.ctfassets.net/wp1lcwdav1p1/N4qrT1XIveNL5SMHSkjTH/b57854e9246bd3aa9fe9ebc51ce650d1/Circle_Kenia.png?auto=format%2Ccompress&amp;dpr=3&amp;w=202&amp;h=202&amp;q=40 3x"
                        class="_zdxht7 mx-5" alt="" style="max-width: 202px; max-height: 202px;" class="card-img-top"
                        alt="...">
                    <div class="card-body">
                        <h3 class="text-center text-primary mt-3">Sana</h3>
                        <p class="card-text text-center">Some quick example text to build on the card title and make up
                            the bulk of
                            the
                            card’s content.</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="row align-items-center">
            <div class="col-md-4">
                <div class="card user_card" style="width: 18rem;">
                    <img src="https://d3njjcbhbojbot.cloudfront.net/api/utilities/v1/imageproxy/https://images.ctfassets.net/wp1lcwdav1p1/66DwUMt1tQTmR4q1JaHPdV/71cbdd4415999eecfcd899283086260c/Circle_Ryan.png?auto=format%2Ccompress&amp;dpr=1&amp;w=202&amp;h=202&amp;q=40"
                        srcset="https://d3njjcbhbojbot.cloudfront.net/api/utilities/v1/imageproxy/https://images.ctfassets.net/wp1lcwdav1p1/66DwUMt1tQTmR4q1JaHPdV/71cbdd4415999eecfcd899283086260c/Circle_Ryan.png?auto=format%2Ccompress&amp;dpr=2&amp;w=202&amp;h=202&amp;q=40 2x, https://d3njjcbhbojbot.cloudfront.net/api/utilities/v1/imageproxy/https://images.ctfassets.net/wp1lcwdav1p1/66DwUMt1tQTmR4q1JaHPdV/71cbdd4415999eecfcd899283086260c/Circle_Ryan.png?auto=format%2Ccompress&amp;dpr=3&amp;w=202&amp;h=202&amp;q=40 3x"
                        class="_zdxht7 mx-5" alt="" style="max-width: 202px; max-height: 202px;" class="card-img-top"
                        alt="...">
                    <div class="card-body">
                        <h3 class="text-center text-primary mt-3">Kiyan</h3>
                        <p class="card-text text-center">Some quick example text to build on the card title and make up
                            the bulk of
                            the
                            card’s content.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row align-items-center">
            <div class="col-md-4">
                <div class="card user_card" style="width: 18rem;">
                    <img src="https://d3njjcbhbojbot.cloudfront.net/api/utilities/v1/imageproxy/https://images.ctfassets.net/wp1lcwdav1p1/28Nv1NZrGQsLf4kt8CXMdd/66d2002ee1d804a0a1a9729376648060/Vishal_Verma.png?auto=format%2Ccompress&amp;dpr=1&amp;w=202&amp;h=202&amp;q=40"
                        srcset="https://d3njjcbhbojbot.cloudfront.net/api/utilities/v1/imageproxy/https://images.ctfassets.net/wp1lcwdav1p1/28Nv1NZrGQsLf4kt8CXMdd/66d2002ee1d804a0a1a9729376648060/Vishal_Verma.png?auto=format%2Ccompress&amp;dpr=2&amp;w=202&amp;h=202&amp;q=40 2x, https://d3njjcbhbojbot.cloudfront.net/api/utilities/v1/imageproxy/https://images.ctfassets.net/wp1lcwdav1p1/28Nv1NZrGQsLf4kt8CXMdd/66d2002ee1d804a0a1a9729376648060/Vishal_Verma.png?auto=format%2Ccompress&amp;dpr=3&amp;w=202&amp;h=202&amp;q=40 3x"
                        class="_zdxht7 mx-5" alt="" style="max-width: 202px; max-height: 202px;" class="card-img-top"
                        alt="...">
                    <div class="card-body">
                        <h3 class="text-center text-primary mt-3">Nikhil</h3>
                        <p class="card-text text-center">Some quick example text to build on the card title and make up
                            the bulk of
                            the
                            card’s content.</p>
                    </div>
                </div>
            </div>
        </div>

    </section>
    
  
    <div class="footer mt-5">
        <?php include "layout/footer.php" ;?>
    </div>
    <script src="js/assest.js"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script>
    $(document).ready(function() {
        let c = 0;
        window.addEventListener("scroll", function() {
            if (c === 1) {
                $("#enroll-form").addClass("d-none");
                return;
            }
            const scrollY = window.pageYOffset;
            console.log("Current scrollY:", scrollY);
            if (scrollY > 45) {
                console.log("scroll work");


                $("#enroll-form").stop(true, true).slideDown().removeClass("form d-none").css({
                    'display': 'block',
                    'width': '50%',
                    'margin': '44px 77px',
                    'background': 'white',
                    'border': '1px solid red',
                    'position': 'fixed',
                    'z-index': '1'
                });
                

            } else {
                $("#enroll-form").css({
                    'background': 'blue'
                });
            }



        });
        $("#close-form").click(function() {

            console.log("close button is work");
            $("#enroll-form").slideUp().addClass("d-none");
            c = 1;

        });
    });
    </script>
    
    <!-- <script src="https://unpkg.com/typed.js@2.1.0/dist/typed.umd.js"></script> -->


    <script src="js/java.js"></script>
    <!-- // $("#enroll-form").removeClass("d-none"); -->
    <!-- //  $("#enroll-form").removeClass("form"); -->

</body>

</html>