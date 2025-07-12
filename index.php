<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Icore page</title>
    <link rel="stylesheet" href="css/assest.css">
    <link rel="stylesheet" href="css/style.css">
    <!-- Fonts link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

    <!-- google font -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">

</head>

<body>
    <?php include "layout/nav.php" ;?>

    <!-- sliders -->
    <div class="container-fluid p-0">
        <div id="carouselExampleInterval" class="carousel slide mt-5" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active" data-bs-interval="10000">
                    <img src="https://media.istockphoto.com/id/2148826378/photo/portrait-of-her-she-nice-well-dressed-attractive-lovely-luxury-pretty-cheerful-girl-isolated.jpg?s=1024x1024&amp;w=is&amp;k=20&amp;c=12fcSRHNMRHqkZUkS8cSOuVxVPaG67Pw5JBNhi3Q7Zs="
                        class="d-block w-100" alt="Img1">
                </div>
                <div class="carousel-item" data-bs-interval="2000">
                    <img src="https://media.istockphoto.com/id/1343499203/photo/lock-data-concept.jpg?s=1024x1024&w=is&k=20&c=gyh18XcZSgXHYlimy5EpH0iVro5oBqmIeybKbgcIXWk="
                        class="d-block w-100" alt="img2">
                </div>
                <div class="carousel-item">
                    <img src="https://media.istockphoto.com/id/1333222351/photo/4k-resolution-of-digital-eye-wave-lines-stock-background.jpg?s=1024x1024&w=is&k=20&c=cLwiYIxAWVBhagnq1pxKn4Xu6dcRZWD6LqjxOxP27t8="
                        class="d-block w-100" alt="img3">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>

    <!-- section -->

    <section class="header">
        <!-- This is the key of success -->
        <h2 class="line"></h2>
        <!-- <div class="wrapper">
            <div class="fixed text-light"> This is</div>
            <ul class="moving">
                <li> <span>youtube</span></li>
                <li> <span>Freelancer</span></li>
                <li> <span>Bloger</span></li>
            </ul>

        </div> -->
        <ul class="enroll">
            <li><button class="btn btn-primary">PRO ENROLL</button></li>
            <li><button class="btn border mx-5">Course Enroll</button></li>
        </ul>
    </section>


    <!-- course cards -->
    <h2 class="text-center mt-5">COURSES</h2>
    <div class="cards">
        <div class="card" style="width: 18rem;">
            <img src="https://media.istockphoto.com/id/1488105257/photo/chatbot-powered-by-ai-transforming-industries-and-customer-service-yellow-chatbot-icon-over.jpg?s=1024x1024&w=is&k=20&c=Q4raY3uxy-_J15PgbIfOzIhndHkCQ-UFSkxVDBitJcI="
                class="card-img-top" height="70%" alt="card1">
            <div class="card-body">
                <h5 class="card-title"><a href="course.php" class="text_style">Android Development</a></h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                    card’s content.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
        </div>

        <div class="card" style="width: 18rem;">
            <img src="https://media.istockphoto.com/id/1343499203/photo/lock-data-concept.jpg?s=1024x1024&w=is&k=20&c=gyh18XcZSgXHYlimy5EpH0iVro5oBqmIeybKbgcIXWk="
                class="card-img-top" alt="card2">
            <div class="card-body">
                <h5 class="card-title"><a href="course.php" class="text_style">Cyber Sequrity</a></h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                    card’s content.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
        </div>

        <div class="card" style="width: 18rem;">
            <img src="https://media.istockphoto.com/id/1448152453/vector/big-data-technology-and-data-science-illustration-data-flow-concept-querying-analysing.jpg?s=1024x1024&w=is&k=20&c=INMsT5od0nLuKgWn0y_1UkzhuJL_LDs7yF3aZh-_dqY="
                class="card-img-top" alt="card3">
            <div class="card-body">
                <h5 class="card-title"><a href="course.php" class="text_style">Data structure & Algorithm</a></h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                    card’s content.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
        </div>

        <div class="card" style="width: 18rem;">
            <img src="https://media.istockphoto.com/id/1500238408/photo/program-code-development-icon-on-a-digital-lcd-display-with-reflection.jpg?s=1024x1024&w=is&k=20&c=9k0ISvEy4At1nzoYrDP-pwOyN5qyvOWf_MruUHANUKc="
                class="card-img-top" alt="card4">
            <div class="card-body">
                <h5 class="card-title"><a href="course.php" class="text_style">HTML & CSS</a></h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                    card’s content.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
        </div>
    </div>
    <!-- again course -->

    <div class="cards">
        <div class="card" style="width: 18rem;">
            <img src="https://media.istockphoto.com/id/1488105257/photo/chatbot-powered-by-ai-transforming-industries-and-customer-service-yellow-chatbot-icon-over.jpg?s=1024x1024&w=is&k=20&c=Q4raY3uxy-_J15PgbIfOzIhndHkCQ-UFSkxVDBitJcI="
                class="card-img-top" height="70%" alt="card1">
            <div class="card-body">
                <h5 class="card-title"><a href="course.php" class="text_style">Android Development</a></h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                    card’s content.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
        </div>

        <div class="card" style="width: 18rem;">
            <img src="https://media.istockphoto.com/id/1343499203/photo/lock-data-concept.jpg?s=1024x1024&w=is&k=20&c=gyh18XcZSgXHYlimy5EpH0iVro5oBqmIeybKbgcIXWk="
                class="card-img-top" alt="card2">
            <div class="card-body">
                <h5 class="card-title"><a href="course.php" class="text_style">Cyber Sequrity</a></h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                    card’s content.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
        </div>

        <div class="card" style="width: 18rem;">
            <img src="https://media.istockphoto.com/id/1448152453/vector/big-data-technology-and-data-science-illustration-data-flow-concept-querying-analysing.jpg?s=1024x1024&w=is&k=20&c=INMsT5od0nLuKgWn0y_1UkzhuJL_LDs7yF3aZh-_dqY="
                class="card-img-top" alt="card3">
            <div class="card-body">
                <h5 class="card-title"><a href="course.php" class="text_style">Data structure & Algorithm</a></h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                    card’s content.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
        </div>

        <div class="card" style="width: 18rem;">
            <img src="https://media.istockphoto.com/id/1500238408/photo/program-code-development-icon-on-a-digital-lcd-display-with-reflection.jpg?s=1024x1024&w=is&k=20&c=9k0ISvEy4At1nzoYrDP-pwOyN5qyvOWf_MruUHANUKc="
                class="card-img-top" alt="card4">
            <div class="card-body">
                <h5 class="card-title"><a href="course.php" class="text_style">HTML & CSS</a></h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                    card’s content.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
        </div>
    </div>
    <!--  section for video -->
    <section class="secound py-5">
        <div class="container">
            <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">

                    <!-- Slide 1 -->
                    <div class="carousel-item active">
                        <div class="row align-items-center">
                            <div class="col-md-6">
                                <video controls autoplay muted class="w-100">
                                    <source
                                        src="https://media.istockphoto.com/id/2156653198/video/filing-documents-artificial-intelligence-digitization-file-folder-document-data-technology.mp4?s=mp4-640x640-is&k=20&c=BgksdA622FEm4myS_rip4fM5e5-q0FeF2pBUgbJuwtU="
                                        type="video/mp4">
                                </video>
                            </div>
                            <div class="col-md-6">
                                <h4>Your roll as a professionals 1</h4>
                                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Modi at temporibus ad fugit
                                    in sed molestias magni ipsa quidem. Molestiae!</p>
                                <div class="median-salary"><span><strong>₹457,170</strong>medium salary</span>
                                </div>
                                <div class="job"><span><strong>57,170</strong>Jobs available</span></div>
                                <a href="blog/b1.php"><button class="btn1 mt-3">Read More</button></a>
                            </div>
                        </div>
                    </div>

                    <!-- Slide 2 -->
                    <div class="carousel-item">
                        <div class="row align-items-center">
                            <div class="col-md-6">
                                <video controls autoplay muted class="w-100">
                                    <source
                                        src="https://media.istockphoto.com/id/1370809321/video/smiling-young-female-tutor-talking-to-web-camera-recording-vlog-online-video-conference-video.mp4?s=mp4-640x640-is&k=20&c=BJ_1Hi-vijmVEqmpfp1won62gaLDODmg8sVk3dZB6dc="
                                        type="video/mp4">
                                </video>
                            </div>
                            <div class="col-md-6">
                                <h4>Your roll as a professionals 2</h4>
                                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Enim, voluptatem!</p>
                                <div class="median-salary"><span><strong>₹457,170</strong>medium salary</span>
                                </div>
                                <div class="job"> <span><strong>7,170</strong>Jobs available</span></div>
                                <a href="blog/b2.php"><button class="btn1 mt-3">Read More</button></a>
                            </div>
                        </div>
                    </div>

                    <!-- Slide 3 -->
                    <div class="carousel-item">
                        <div class="row align-items-center">
                            <div class="col-md-6">
                                <video controls autoplay muted class="w-100">
                                    <source
                                        src="https://media.istockphoto.com/id/2171611706/video/hispanic-latin-american-woman-software-engineer-developer-use-computer-at-home-office-work-on.mp4?s=mp4-640x640-is&k=20&c=DKbWSK-NS3qUBq2Dj_FKmxDtrFV_qxnQ0LNxL8-DqiU="
                                        type="video/mp4">
                                </video>
                            </div>
                            <div class="col-md-6">
                                <h4>Your roll as a professionals 3</h4>
                                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Rerum, earum.</p>
                                <div class="median-salary"><span><strong>₹457,170</strong>medium salary</span>
                                </div>
                                <div class="job"><span><strong>67,170</strong>Jobs available</span></div>
                                <a href="blog/b3.php"><button class="btn1 mt-3">Read More</button></a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <section class="third">
        <div class="logos">
            <div class="logo_slide">
                <img src="images/8stH5QZQriowRdziYpK6SY-1200-80.jpg" alt="">
                <img src="images/6789bfcf0bc3d89440572aa6_FBalts-ezgif.com-png-to-webp-converter.webp" alt="">
                <img src="images/download.png" alt="">
                <img src="images/hm-logo-png_seeklogo-64496.png" alt="">
                <img src="images/image-58-1024x512.png" alt="">
                <img src="images/images.png" alt="">
                <img src="images/Infosys_logo.svg.png" alt="">
                <img src="images/tcs_logo_1200_020621101143.webp" alt="">
            </div>
            <!-- repet logo for infinite -->
            <div class="logo_slide">
                <img src="images/8stH5QZQriowRdziYpK6SY-1200-80.jpg" alt="">
                <img src="images/6789bfcf0bc3d89440572aa6_FBalts-ezgif.com-png-to-webp-converter.webp" alt="">
                <img src="images/download.png" alt="">
                <img src="images/hm-logo-png_seeklogo-64496.png" alt="">
                <img src="images/image-58-1024x512.png" alt="">
                <img src="images/images.png" alt="">
                <img src="images/Infosys_logo.svg.png" alt="">
                <img src="images/tcs_logo_1200_020621101143.webp" alt="">
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

    <!-- finish part -->
    <section class="forth">
        <div class="col-md-6">
            <h3 class="text-center mt-3"><strong>Take the next step toward your personal and professional goals with
                    Lcore.</strong></h3>
            <p class="brand_text text-center mx-5">Train teams with industry-leading experts and universities, enhanced
                by AI
                tools and
                recognized credentials.
                Join now to receive personalized recommendations from the full Coursera catalog.
                Join now to receive personalized recommendations from the full Coursera catalog.</p>
            <button class="brand_btn btn btn-primary">Join For Free</button>
        </div>
        <div class="col-md-6 mx-5">
            <img src="https://d3njjcbhbojbot.cloudfront.net/api/utilities/v1/imageproxy/https://coursera_assets.s3.amazonaws.com/front-page-rebrand/secondary-consumer-cta/Image-Next-Step.png?auto=format%2Ccompress&amp;dpr=1&amp;w=471&amp;h=330&amp;q=40"
                srcset="https://d3njjcbhbojbot.cloudfront.net/api/utilities/v1/imageproxy/https://coursera_assets.s3.amazonaws.com/front-page-rebrand/secondary-consumer-cta/Image-Next-Step.png?auto=format%2Ccompress&amp;dpr=2&amp;w=471&amp;h=330&amp;q=40 2x, https://d3njjcbhbojbot.cloudfront.net/api/utilities/v1/imageproxy/https://coursera_assets.s3.amazonaws.com/front-page-rebrand/secondary-consumer-cta/Image-Next-Step.png?auto=format%2Ccompress&amp;dpr=3&amp;w=471&amp;h=330&amp;q=40 3x"
                class="css-1asb01x" alt="A lady standing in front of a meeting table"
                style="max-width: 471px; max-height: 330px;" alt="employee">
        </div>
    </section>



    <!-- popup enroll form -->

    <!-- form  d-flex align-items-center gap-1-->
    <div class="formcontainer d-none">
        <!-- <button type="button" class="btn-primary" id="tfrom">Click form</button> -->
        <section class="form" id="enroll-form">
            <button type="button" id="close-form" class="btn btn-outline-danger btn-sm  mt-3 mx-3"
                style="position:relative;">
                <span class="bi bi-x-lg"></span>
            </button>
            <form action="#" method="post">
                <h3 class="text-center text-dark">Enrollment Box</h3>
                <div class="mb-3 mx-3">
                    <label for="email" class="form-label fw-bold">Email address</label>
                    <input type="email" class="form-control" name="email" placeholder="name@example.com"
                        autocomplete="off">
                </div>

                <div class="mb-3 mx-3">
                    <label for="text" class="form-label fw-bold">Enter password</label>
                    <input type="password" class="form-control" name="password" placeholder="password"
                        autocomplete="off">
                </div>

                <div class="mb-3 mx-3">
                    <label for="text" class="form-label fw-bold">Enter confirm password</label>
                    <input type="password" class="form-control" name="cpassword" placeholder="password"
                        autocomplete="off">
                </div>

                <div class="mb-3 mx-3">
                    <div class="row">
                        <div class="col-md-6">
                            <label for="mobile" class="form-label fw-bold">Mobile number</label>
                            <input type="text" class="form-control" id="mobile" name="mobile" placeholder="Mobile"
                                autocomplete="off">
                        </div>
                        <div class="col-md-6">
                            <label for="pin" class="form-label fw-bold">Pin code</label>
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
    </div>

    <!-- Footer -->
    <div class="footer mt-5">
        <?php include "layout/footer.php" ;?>
    </div>


    <!-- ****************************************For js & Bootstrap ********************************************************** -->
    <!-- jquery CDN -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script>
    $(document).ready(function() {
        // $("#tfrom").click(function() {


        let c = 0;
        console.log("from show");
        window.addEventListener("scroll", function() {
            if (c === 1) {
                $("#enroll-form").addClass("d-none");
                return;
            }
            const sl = window.pageYOffset;
            console.log("the scroll is:", sl);

            if (sl > 120) {

                $(".formcontainer").removeClass("d-none");

                $("#enroll-form ").slideDown().css({

                    'width': '40%',
                    'position': 'fixed',
                    'top': '50%',
                    'left': '50%',
                    'transform': 'translate(-50%, -57%)',
                    'background': 'white',
                    'padding': '20px',
                    'z-index': '9999',
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

        //close button
        $("#close-form").click(function() {

            console.log("close button is work");
            $("#enroll-form").slideUp().addClass("d-none");
             $(".formcontainer").addClass("d-none");
            c = 1;

        });
    });
    </script>
    <!-- Bootstrap js-->
    <script src="js/assest.js"></script>

    <!-- typed.js -->
    <script src="https://unpkg.com/typed.js@2.1.0/dist/typed.umd.js"></script>
    <script src="js/java.js"></script>







    <!-- // $("#enroll-form").removeClass("d-none"); -->
    <!-- //  $("#enroll-form").removeClass("form"); -->

</body>

</html>