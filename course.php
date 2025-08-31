 <!doctype html>
 <html lang="en">

 <head>
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <title>Icore page</title>
     <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous"> -->
     <link rel="stylesheet" href="css/assest.css">
     <link rel="stylesheet" href="css/style.css">
     <!-- Fonts link -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
     <!-- google font -->
     <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">

 </head>

 <style>
body {
    overflow-x: hidden;
}

.cards{
    margin:4rem;
}
.success{
    /* margin:2rem; */
}
.card {
    height: 25rem;
}


 </style>

 <body>
     <?php include "layout/nav.php" ;?>

     <!-- course buttons -->
     <div class="course-part mt-5">
         <h1>Explore Course</h1>
         <p class="para">Advance in your career with recognized credentials across levels.
         </p>
         <div class="course-btn">
             <span><button type="button" class="btn btn-light" id="all"><strong>All</strong></button></span>
             <span><button type="button" class="btn btn-light" id="tech"><strong>Technical</strong></button></span>
             <span><button type="button" class="btn btn-light" id="analy"><strong>Analatycal</strong></button></span>
             <span><button type="button" class="btn btn-light" id="buss"><strong>Business</strong></button></span>
             <span><button type="button" class="btn btn-light" id="buss"><strong>Sales &
                         Marketing</strong></button></span>
         </div>
     </div>

     <!-- course cards -->

     <div class="cards" id="technical">
         <!-- first -->
         <div class="row">
             <div class="col-md-3">
                 <div class="card  overflow-hidden rounded-5" style="width: 18rem;">
                     <img src="https://media.istockphoto.com/id/1488105257/photo/chatbot-powered-by-ai-transforming-industries-and-customer-service-yellow-chatbot-icon-over.jpg?s=1024x1024&w=is&k=20&c=Q4raY3uxy-_J15PgbIfOzIhndHkCQ-UFSkxVDBitJcI="
                         class="card-img-top" height="70%" alt="card1">
                     <div class="card-body">
                         <h5 class="card-title"><a href="course.php" class="text_style">Android Development</a></h5>
                         <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                             the
                             card’s content.</p>
                         <a href="#" class="btn btn-primary">Go somewhere</a>
                     </div>
                 </div>
             </div>
             <div class="col-md-3">
                 <div class="card  overflow-hidden rounded-5" style="width: 18rem;">
                     <img src="https://media.istockphoto.com/id/1343499203/photo/lock-data-concept.jpg?s=1024x1024&w=is&k=20&c=gyh18XcZSgXHYlimy5EpH0iVro5oBqmIeybKbgcIXWk="
                         class="card-img-top" alt="card2">
                     <div class="card-body">
                         <h5 class="card-title"><a href="course.php" class="text_style">Cyber Sequrity</a></h5>
                         <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                             the
                             card’s content.</p>
                         <a href="#" class="btn btn-primary">Go somewhere</a>
                     </div>
                 </div>
             </div>

             <div class="col-md-3">
                 <div class="card  overflow-hidden rounded-5" style="width: 18rem;">
                     <img src="https://media.istockphoto.com/id/1448152453/vector/big-data-technology-and-data-science-illustration-data-flow-concept-querying-analysing.jpg?s=1024x1024&w=is&k=20&c=INMsT5od0nLuKgWn0y_1UkzhuJL_LDs7yF3aZh-_dqY="
                         class="card-img-top" alt="card3">
                     <div class="card-body">
                         <h5 class="card-title"><a href="course.php" class="text_style">Data structure & Algorithm</a>
                         </h5>
                         <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                             the
                             card’s content.</p>
                         <a href="#" class="btn btn-primary">Go somewhere</a>
                     </div>
                 </div>
             </div>
             <div class="col-md-3">
                 <div class="card  overflow-hidden rounded-5" style="width: 18rem;">
                     <img src="https://media.istockphoto.com/id/1500238408/photo/program-code-development-icon-on-a-digital-lcd-display-with-reflection.jpg?s=1024x1024&w=is&k=20&c=9k0ISvEy4At1nzoYrDP-pwOyN5qyvOWf_MruUHANUKc="
                         class="card-img-top" alt="card4">
                     <div class="card-body">
                         <h5 class="card-title"><a href="course.php" class="text_style">HTML & CSS</a></h5>
                         <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                             the
                             card’s content.</p>
                         <a href="#" class="btn btn-primary">Go somewhere</a>
                     </div>
                 </div>
             </div>
         </div>
     </div>
     <!--secound part  -->
     <div class="cards" id="analytical">
         <div class="row">
             <div class="col-md-3">
                 <div class="card  overflow-hidden rounded-5" style="width: 18rem;">
                     <img src="https://media.istockphoto.com/id/1488105257/photo/chatbot-powered-by-ai-transforming-industries-and-customer-service-yellow-chatbot-icon-over.jpg?s=1024x1024&w=is&k=20&c=Q4raY3uxy-_J15PgbIfOzIhndHkCQ-UFSkxVDBitJcI="
                         class="card-img-top" height="70%" alt="card1">
                     <div class="card-body">
                         <h5 class="card-title"><a href="course.php" class="text_style">Android Development</a></h5>
                         <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                             the
                             card’s content.</p>
                         <a href="#" class="btn btn-primary">Go somewhere</a>
                     </div>
                 </div>
             </div>
             <div class="col-md-3">
                 <div class="card  overflow-hidden rounded-5" style="width: 18rem;">
                     <img src="https://media.istockphoto.com/id/1343499203/photo/lock-data-concept.jpg?s=1024x1024&w=is&k=20&c=gyh18XcZSgXHYlimy5EpH0iVro5oBqmIeybKbgcIXWk="
                         class="card-img-top" alt="card2">
                     <div class="card-body">
                         <h5 class="card-title"><a href="course.php" class="text_style">Cyber Sequrity</a></h5>
                         <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                             the
                             card’s content.</p>
                         <a href="#" class="btn btn-primary">Go somewhere</a>
                     </div>
                 </div>
             </div>

             <div class="col-md-3">
                 <div class="card  overflow-hidden rounded-5" style="width: 18rem;">
                     <img src="https://media.istockphoto.com/id/1448152453/vector/big-data-technology-and-data-science-illustration-data-flow-concept-querying-analysing.jpg?s=1024x1024&w=is&k=20&c=INMsT5od0nLuKgWn0y_1UkzhuJL_LDs7yF3aZh-_dqY="
                         class="card-img-top" alt="card3">
                     <div class="card-body">
                         <h5 class="card-title"><a href="course.php" class="text_style">Data structure & Algorithm</a>
                         </h5>
                         <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                             the
                             card’s content.</p>
                         <a href="#" class="btn btn-primary">Go somewhere</a>
                     </div>
                 </div>
             </div>
             <div class="col-md-3">
                 <div class="card  overflow-hidden rounded-5" style="width: 18rem;">
                     <img src="https://media.istockphoto.com/id/1500238408/photo/program-code-development-icon-on-a-digital-lcd-display-with-reflection.jpg?s=1024x1024&w=is&k=20&c=9k0ISvEy4At1nzoYrDP-pwOyN5qyvOWf_MruUHANUKc="
                         class="card-img-top" alt="card4">
                     <div class="card-body">
                         <h5 class="card-title"><a href="course.php" class="text_style">HTML & CSS</a></h5>
                         <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                             the
                             card’s content.</p>
                         <a href="#" class="btn btn-primary">Go somewhere</a>
                     </div>
                 </div>
             </div>
         </div>
     </div>


     <!-- third part -->
     <div class="cards" id="business">
         <div class="row">
             <div class="col-md-3">
                 <div class="card  overflow-hidden rounded-5" style="width: 18rem;">
                     <img src="https://media.istockphoto.com/id/1488105257/photo/chatbot-powered-by-ai-transforming-industries-and-customer-service-yellow-chatbot-icon-over.jpg?s=1024x1024&w=is&k=20&c=Q4raY3uxy-_J15PgbIfOzIhndHkCQ-UFSkxVDBitJcI="
                         class="card-img-top" height="70%" alt="card1">
                     <div class="card-body">
                         <h5 class="card-title"><a href="course.php" class="text_style">Android Development</a></h5>
                         <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                             the
                             card’s content.</p>
                         <a href="#" class="btn btn-primary">Go somewhere</a>
                     </div>
                 </div>
             </div>
             <div class="col-md-3">
                 <div class="card  overflow-hidden rounded-5" style="width: 18rem;">
                     <img src="https://media.istockphoto.com/id/1343499203/photo/lock-data-concept.jpg?s=1024x1024&w=is&k=20&c=gyh18XcZSgXHYlimy5EpH0iVro5oBqmIeybKbgcIXWk="
                         class="card-img-top" alt="card2">
                     <div class="card-body">
                         <h5 class="card-title"><a href="course.php" class="text_style">Cyber Sequrity</a></h5>
                         <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                             the
                             card’s content.</p>
                         <a href="#" class="btn btn-primary">Go somewhere</a>
                     </div>
                 </div>
             </div>

             <div class="col-md-3">
                 <div class="card  overflow-hidden rounded-5" style="width: 18rem;">
                     <img src="https://media.istockphoto.com/id/1448152453/vector/big-data-technology-and-data-science-illustration-data-flow-concept-querying-analysing.jpg?s=1024x1024&w=is&k=20&c=INMsT5od0nLuKgWn0y_1UkzhuJL_LDs7yF3aZh-_dqY="
                         class="card-img-top" alt="card3">
                     <div class="card-body">
                         <h5 class="card-title"><a href="course.php" class="text_style">Data structure & Algorithm</a>
                         </h5>
                         <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                             the
                             card’s content.</p>
                         <a href="#" class="btn btn-primary">Go somewhere</a>
                     </div>
                 </div>
             </div>
             <div class="col-md-3">
                 <div class="card  overflow-hidden rounded-5" style="width: 18rem;">
                     <img src="https://media.istockphoto.com/id/1500238408/photo/program-code-development-icon-on-a-digital-lcd-display-with-reflection.jpg?s=1024x1024&w=is&k=20&c=9k0ISvEy4At1nzoYrDP-pwOyN5qyvOWf_MruUHANUKc="
                         class="card-img-top" alt="card4">
                     <div class="card-body">
                         <h5 class="card-title"><a href="course.php" class="text_style">HTML & CSS</a></h5>
                         <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                             the
                             card’s content.</p>
                         <a href="#" class="btn btn-primary">Go somewhere</a>
                     </div>
                 </div>
             </div>
         </div>
     </div>

     <!-- success story -->

     <div class="success p-5">
         <h3 class="mb-3 mx-5">Success Storyes</h3>
         <div class="row">
             <div class="col-md-3">
                 <div class="card success-story" style="width: 18rem; height:22rem;">
                     <div class="csuser-img mx-3 mt-3"><img
                             src="https://d3njjcbhbojbot.cloudfront.net/api/utilities/v1/imageproxy/https://images.ctfassets.net/00atxywtfxvd/69BoexTdu34VSQSlrBSCsg/085800d62591bfe9fcd09d1ef35a092b/rachel-ux-design-cert.2e16d0ba.fill-450x450.format-webp.webp?auto=format%2Ccompress&amp;dpr=1&amp;w=64&amp;h=64&amp;fit=crop"
                             srcset="https://d3njjcbhbojbot.cloudfront.net/api/utilities/v1/imageproxy/https://images.ctfassets.net/00atxywtfxvd/69BoexTdu34VSQSlrBSCsg/085800d62591bfe9fcd09d1ef35a092b/rachel-ux-design-cert.2e16d0ba.fill-450x450.format-webp.webp?auto=format%2Ccompress&amp;dpr=2&amp;w=64&amp;h=64&amp;fit=crop 2x, https://d3njjcbhbojbot.cloudfront.net/api/utilities/v1/imageproxy/https://images.ctfassets.net/00atxywtfxvd/69BoexTdu34VSQSlrBSCsg/085800d62591bfe9fcd09d1ef35a092b/rachel-ux-design-cert.2e16d0ba.fill-450x450.format-webp.webp?auto=format%2Ccompress&amp;dpr=3&amp;w=64&amp;h=64&amp;fit=crop 3x"
                             class="rounded-circle" style="max-width:64px;max-height:64px" alt="">
                         <div>
                             <div class="css-1rlln5c"><strong>Rachel L.</strong></div>
                             <div class="css-vac8rf">Google UX Design Professional Certificate</div>
                         </div>
                     </div>
                     <div class="card-body">
                         <h5 class="card-title">Card title</h5>
                         <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                             the card’s content</p>
                         <a href="#" class="card-link">Card link</a>

                     </div>
                 </div>
             </div>

             <div class="col-md-3">
                 <div class="card success-story" style="width: 18rem; height:22rem;">
                     <div class="csuser-img mx-3 mt-3"><img
                             src="https://d3njjcbhbojbot.cloudfront.net/api/utilities/v1/imageproxy/https://images.ctfassets.net/00atxywtfxvd/69BoexTdu34VSQSlrBSCsg/085800d62591bfe9fcd09d1ef35a092b/rachel-ux-design-cert.2e16d0ba.fill-450x450.format-webp.webp?auto=format%2Ccompress&amp;dpr=1&amp;w=64&amp;h=64&amp;fit=crop"
                             srcset="https://d3njjcbhbojbot.cloudfront.net/api/utilities/v1/imageproxy/https://images.ctfassets.net/00atxywtfxvd/69BoexTdu34VSQSlrBSCsg/085800d62591bfe9fcd09d1ef35a092b/rachel-ux-design-cert.2e16d0ba.fill-450x450.format-webp.webp?auto=format%2Ccompress&amp;dpr=2&amp;w=64&amp;h=64&amp;fit=crop 2x, https://d3njjcbhbojbot.cloudfront.net/api/utilities/v1/imageproxy/https://images.ctfassets.net/00atxywtfxvd/69BoexTdu34VSQSlrBSCsg/085800d62591bfe9fcd09d1ef35a092b/rachel-ux-design-cert.2e16d0ba.fill-450x450.format-webp.webp?auto=format%2Ccompress&amp;dpr=3&amp;w=64&amp;h=64&amp;fit=crop 3x"
                             class="rounded-circle" style="max-width:64px;max-height:64px" alt="">
                         <div>
                             <div class="css-1rlln5c"><strong>LUC</strong></div>
                             <div class="css-vac8rf">Google UX Design Professional Certificate</div>
                         </div>
                     </div>
                     <div class="card-body">
                         <h5 class="card-title">Card title</h5>
                         <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                             the card’s content</p>
                         <a href="#" class="card-link">Card link</a>

                     </div>
                 </div>
             </div>

             <div class="col-md-3">
                 <div class="card success-story" style="width: 18rem; height:22rem;">
                     <div class="csuser-img mx-3 mt-3"><img
                             src="https://d3njjcbhbojbot.cloudfront.net/api/utilities/v1/imageproxy/https://images.ctfassets.net/00atxywtfxvd/2GzoqJoB4jZsOOmUM2anRV/5c5f2c1c3eb93b971b2eb15ff95d0717/luc-ux-design-certifi.2e16d0ba.fill-450x450.format-webp.webp?auto=format%2Ccompress&amp;dpr=1&amp;w=64&amp;h=64&amp;fit=crop"
                             srcset="https://d3njjcbhbojbot.cloudfront.net/api/utilities/v1/imageproxy/https://images.ctfassets.net/00atxywtfxvd/2GzoqJoB4jZsOOmUM2anRV/5c5f2c1c3eb93b971b2eb15ff95d0717/luc-ux-design-certifi.2e16d0ba.fill-450x450.format-webp.webp?auto=format%2Ccompress&amp;dpr=2&amp;w=64&amp;h=64&amp;fit=crop 2x, https://d3njjcbhbojbot.cloudfront.net/api/utilities/v1/imageproxy/https://images.ctfassets.net/00atxywtfxvd/2GzoqJoB4jZsOOmUM2anRV/5c5f2c1c3eb93b971b2eb15ff95d0717/luc-ux-design-certifi.2e16d0ba.fill-450x450.format-webp.webp?auto=format%2Ccompress&amp;dpr=3&amp;w=64&amp;h=64&amp;fit=crop 3x"
                             class="rounded-circle" style="max-width:64px;max-height:64px" alt=""">
                         <div>
                             <div class=" css-1rlln5c"><strong>LUC</strong></div>
                     <div class="css-vac8rf">Google UX Design Professional Certificate</div>
                 </div>
             </div>
             <div class="card-body">
                 <h5 class="card-title">Card title</h5>
                 <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                     the card’s content</p>
                 <a href="#" class="card-link">Card link</a>

             </div>
         </div>
     </div>

     <div class="col-md-3">
         <div class="card success-story" style="width: 18rem; height:22rem;">
             <div class="user-img mx-3 mt-3"><img
                     src="https://d3njjcbhbojbot.cloudfront.net/api/utilities/v1/imageproxy/https://images.ctfassets.net/00atxywtfxvd/69BoexTdu34VSQSlrBSCsg/085800d62591bfe9fcd09d1ef35a092b/rachel-ux-design-cert.2e16d0ba.fill-450x450.format-webp.webp?auto=format%2Ccompress&amp;dpr=1&amp;w=64&amp;h=64&amp;fit=crop"
                     srcset="https://d3njjcbhbojbot.cloudfront.net/api/utilities/v1/imageproxy/https://images.ctfassets.net/00atxywtfxvd/69BoexTdu34VSQSlrBSCsg/085800d62591bfe9fcd09d1ef35a092b/rachel-ux-design-cert.2e16d0ba.fill-450x450.format-webp.webp?auto=format%2Ccompress&amp;dpr=2&amp;w=64&amp;h=64&amp;fit=crop 2x, https://d3njjcbhbojbot.cloudfront.net/api/utilities/v1/imageproxy/https://images.ctfassets.net/00atxywtfxvd/69BoexTdu34VSQSlrBSCsg/085800d62591bfe9fcd09d1ef35a092b/rachel-ux-design-cert.2e16d0ba.fill-450x450.format-webp.webp?auto=format%2Ccompress&amp;dpr=3&amp;w=64&amp;h=64&amp;fit=crop 3x"
                     class="rounded-circle" style="max-width:64px;max-height:64px" alt="">
                 <div>
                     <div class="css-1rlln5c"><strong>Rachel L.</strong></div>
                     <div class="css-vac8rf">Google UX Design Professional Certificate</div>
                 </div>
             </div>
             <div class="card-body">
                 <h5 class="card-title">Card title</h5>
                 <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                     the card’s contentx</p>
                 <a href="#" class="card-link">Card link</a>

             </div>
         </div>
     </div>

     </div>
     </div>















     <div class="footer mb-0">
         <?php include "layout/footer.php" ;?>
     </div>

     <script src="js/assest.js"></script>
     <script src="js/java.js"></script>
     <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous">
    </script> -->
     <!-- <script src="https://unpkg.com/typed.js@2.1.0/dist/typed.umd.js"></script> -->

 </body>

 </html>