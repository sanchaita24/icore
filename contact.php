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

<body>
    <?php include "layout/nav.php" ;?>

    <!-- sliders -->

    <div class="container-fluid p-0" id="container">
        <div class="row">
            <div class="col-md-6">
                <div class="image mx-5">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS5eQYXSxI8fnvfL_ZUlWJS8rAuMc9MyI57ojl7VTqlDRp_8L3JRGhZuwNXReNgnL2HkL8&usqp=CAU"
                        class="d-block w-100" alt="img2">
                </div>
                <div class="text">
                    <h2 class="text-center">MAKE YOUR CAREEAR WITH US </h2>
                    <ul class="text-list">
                        <il><button class="btn btn-primary">CALL REQUEST</button></il>
                        <il><button class="btn btn-primary">ENROLL</button></il>
                    </ul>
                </div>
            </div>

            <div class="col-md-6">
                <!-- form -->
                <section class="form" id="contact-form">
                    <form action="#">
                        <h3 class="text-center text-light">Query Box</h3>
                        <div class="mb-3 mx-3">
                            <label for="email" class="form-label">Email address</label>
                            <input type="email" class="form-control" name="email" placeholder="name@example.com">
                        </div>

                        <div class="mb-3 mx-5">
                            <label for="text" class="form-label">Example textarea</label>
                            <textarea class="form-control" name="text" rows="3"></textarea>
                        </div>

                        <div class="mb-3 mx-3">
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="mobile" class="form-label">Mobile number</label>
                                    <input type="text" class="form-control" id="mobile" name="mobile"
                                        placeholder="Mobile">
                                </div>
                                <div class="col-md-6">
                                    <label for="pin" class="form-label">Pin code</label>
                                    <input type="text" class="form-control" id="pin" name="pin" placeholder="Pin code">
                                </div>
                            </div>
                        </div>
                        <div class="text-center" id="sbt">
                            <button type="submit" class="btn btn-light mb-3" id="sbt-btn">Submit</button>
                        </div>

                    </form>
                </section>
            </div>
        </div>

    </div>


    <!-- live location -->
    <section class="location mt-5" id="live-location">
        <div class="row">
            <div class="col-md-6">
                <div class="map-box text-center">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14631.262957086974!2d87.28670954704285!3d23.5391288287389!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39f771f93fbd934d%3A0x5726ef1ea24f3a69!2sCity%20Center%2C%20Durgapur%2C%20West%20Bengal%20713216!5e0!3m2!1sen!2sin!4v1750787238611!5m2!1sen!2sin"
                        width="600" height="440" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
            <div class="col-md-6">
                <h3 class="text-center text-light mt-5">Location Address</h3>
                <div class="address text-center text-light">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint repellat sapiente ea.
                    <div class="mno">
                        <strong>+91 12344-6789</strong>
                    </div>

                </div>
            </div>
        </div>


    </section>








    <div class="footer mt-5">
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