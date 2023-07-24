<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>

    <!-- swiper css link  -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- custom css file link -->
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <!-- header section starts  -->
    <section class="header">
        <a href="home.php" class="logo">Travel</a>

        <nav class="navbar">
            <a href="home.php">Home</a>
            <a href="about.php">About</a>
            <a href="package.php">Package</a>
            <a href="book.php">Book</a>
        </nav>

        <div id="menu-btn" class="fas fa-bars"></div>
    </section>

    <!-- header section ends  -->


    <!-- home section starts  -->
    <section class="home">
        <div class="swiper home-slider">
            <div class="swiper-wrapper">
                <div class="swiper-slide slide" style="background-image:url(images/home-slide-3.jpg); ">
                    <div class="content">
                        <span>exploer, discover, travel</span>
                        <h3>travel around the world</h3>
                        <a href="package.php" class="btn">discover more</a>
                    </div>
                    <div class="swiper-wrapper-bottom">
                        <svg id="wave" style="transform:rotate(0deg); transition: 0.3s" viewBox="0 0 1440 280"
                            version="1.1" xmlns="http://www.w3.org/2000/svg">
                            <defs>
                                <linearGradient id="sw-gradient-0" x1="0" x2="0" y1="1" y2="0">
                                    <stop stop-color="rgba(255, 255, 255, 1)" offset="0%"></stop>
                                    <stop stop-color="rgba(236.245, 236.245, 236.245, 1)" offset="100%"></stop>
                                </linearGradient>
                            </defs>
                            <path style="transform:translate(0, 0px); opacity:1" fill="url(#sw-gradient-0)"
                                d="M0,84L30,112C60,140,120,196,180,224C240,252,300,252,360,238C420,224,480,196,540,191.3C600,187,660,205,720,205.3C780,205,840,187,900,186.7C960,187,1020,205,1080,200.7C1140,196,1200,168,1260,130.7C1320,93,1380,47,1440,42C1500,37,1560,75,1620,93.3C1680,112,1740,112,1800,112C1860,112,1920,112,1980,102.7C2040,93,2100,75,2160,60.7C2220,47,2280,37,2340,51.3C2400,65,2460,103,2520,121.3C2580,140,2640,140,2700,121.3C2760,103,2820,65,2880,79.3C2940,93,3000,159,3060,177.3C3120,196,3180,168,3240,154C3300,140,3360,140,3420,158.7C3480,177,3540,215,3600,200.7C3660,187,3720,121,3780,112C3840,103,3900,149,3960,144.7C4020,140,4080,84,4140,74.7C4200,65,4260,103,4290,121.3L4320,140L4320,280L4290,280C4260,280,4200,280,4140,280C4080,280,4020,280,3960,280C3900,280,3840,280,3780,280C3720,280,3660,280,3600,280C3540,280,3480,280,3420,280C3360,280,3300,280,3240,280C3180,280,3120,280,3060,280C3000,280,2940,280,2880,280C2820,280,2760,280,2700,280C2640,280,2580,280,2520,280C2460,280,2400,280,2340,280C2280,280,2220,280,2160,280C2100,280,2040,280,1980,280C1920,280,1860,280,1800,280C1740,280,1680,280,1620,280C1560,280,1500,280,1440,280C1380,280,1320,280,1260,280C1200,280,1140,280,1080,280C1020,280,960,280,900,280C840,280,780,280,720,280C660,280,600,280,540,280C480,280,420,280,360,280C300,280,240,280,180,280C120,280,60,280,30,280L0,280Z">
                            </path>
                        </svg>
                    </div>
                </div>
                <div class="swiper-slide slide" style="background-image: url(images/home-slide-1.jpg) ">
                    <div class="content">
                        <span>exploer, discover, travel</span>
                        <h3>discover the new places</h3>
                        <a href="package.php" class="btn">discover more</a>
                    </div>
                    <div class="swiper-wrapper-bottom">
                        <svg id="wave" style="transform:rotate(0deg); transition: 0.3s" viewBox="0 0 1440 280"
                            version="1.1" xmlns="http://www.w3.org/2000/svg">
                            <defs>
                                <linearGradient id="sw-gradient-0" x1="0" x2="0" y1="1" y2="0">
                                    <stop stop-color="rgba(255, 255, 255, 1)" offset="0%"></stop>
                                    <stop stop-color="rgba(236.245, 236.245, 236.245, 1)" offset="100%"></stop>
                                </linearGradient>
                            </defs>
                            <path style="transform:translate(0, 0px); opacity:1" fill="url(#sw-gradient-0)"
                                d="M0,84L30,112C60,140,120,196,180,224C240,252,300,252,360,238C420,224,480,196,540,191.3C600,187,660,205,720,205.3C780,205,840,187,900,186.7C960,187,1020,205,1080,200.7C1140,196,1200,168,1260,130.7C1320,93,1380,47,1440,42C1500,37,1560,75,1620,93.3C1680,112,1740,112,1800,112C1860,112,1920,112,1980,102.7C2040,93,2100,75,2160,60.7C2220,47,2280,37,2340,51.3C2400,65,2460,103,2520,121.3C2580,140,2640,140,2700,121.3C2760,103,2820,65,2880,79.3C2940,93,3000,159,3060,177.3C3120,196,3180,168,3240,154C3300,140,3360,140,3420,158.7C3480,177,3540,215,3600,200.7C3660,187,3720,121,3780,112C3840,103,3900,149,3960,144.7C4020,140,4080,84,4140,74.7C4200,65,4260,103,4290,121.3L4320,140L4320,280L4290,280C4260,280,4200,280,4140,280C4080,280,4020,280,3960,280C3900,280,3840,280,3780,280C3720,280,3660,280,3600,280C3540,280,3480,280,3420,280C3360,280,3300,280,3240,280C3180,280,3120,280,3060,280C3000,280,2940,280,2880,280C2820,280,2760,280,2700,280C2640,280,2580,280,2520,280C2460,280,2400,280,2340,280C2280,280,2220,280,2160,280C2100,280,2040,280,1980,280C1920,280,1860,280,1800,280C1740,280,1680,280,1620,280C1560,280,1500,280,1440,280C1380,280,1320,280,1260,280C1200,280,1140,280,1080,280C1020,280,960,280,900,280C840,280,780,280,720,280C660,280,600,280,540,280C480,280,420,280,360,280C300,280,240,280,180,280C120,280,60,280,30,280L0,280Z">
                            </path>
                        </svg>
                    </div>
                </div>

                <div class="swiper-slide slide" style="background-image: url(images/home-slide-2.jpg) ">
                    <div class="content">
                        <span>exploer, discover, travel</span>
                        <h3>make your tour worthwile</h3>
                        <a href="package.php" class="btn">discover more</a>
                    </div>
                    <div class="swiper-wrapper-bottom">
                        <svg id="wave" style="transform:rotate(0deg); transition: 0.3s" viewBox="0 0 1440 280"
                            version="1.1" xmlns="http://www.w3.org/2000/svg">
                            <defs>
                                <linearGradient id="sw-gradient-0" x1="0" x2="0" y1="1" y2="0">
                                    <stop stop-color="rgba(255, 255, 255, 1)" offset="0%"></stop>
                                    <stop stop-color="rgba(236.245, 236.245, 236.245, 1)" offset="100%"></stop>
                                </linearGradient>
                            </defs>
                            <path style="transform:translate(0, 0px); opacity:1" fill="url(#sw-gradient-0)"
                                d="M0,84L30,112C60,140,120,196,180,224C240,252,300,252,360,238C420,224,480,196,540,191.3C600,187,660,205,720,205.3C780,205,840,187,900,186.7C960,187,1020,205,1080,200.7C1140,196,1200,168,1260,130.7C1320,93,1380,47,1440,42C1500,37,1560,75,1620,93.3C1680,112,1740,112,1800,112C1860,112,1920,112,1980,102.7C2040,93,2100,75,2160,60.7C2220,47,2280,37,2340,51.3C2400,65,2460,103,2520,121.3C2580,140,2640,140,2700,121.3C2760,103,2820,65,2880,79.3C2940,93,3000,159,3060,177.3C3120,196,3180,168,3240,154C3300,140,3360,140,3420,158.7C3480,177,3540,215,3600,200.7C3660,187,3720,121,3780,112C3840,103,3900,149,3960,144.7C4020,140,4080,84,4140,74.7C4200,65,4260,103,4290,121.3L4320,140L4320,280L4290,280C4260,280,4200,280,4140,280C4080,280,4020,280,3960,280C3900,280,3840,280,3780,280C3720,280,3660,280,3600,280C3540,280,3480,280,3420,280C3360,280,3300,280,3240,280C3180,280,3120,280,3060,280C3000,280,2940,280,2880,280C2820,280,2760,280,2700,280C2640,280,2580,280,2520,280C2460,280,2400,280,2340,280C2280,280,2220,280,2160,280C2100,280,2040,280,1980,280C1920,280,1860,280,1800,280C1740,280,1680,280,1620,280C1560,280,1500,280,1440,280C1380,280,1320,280,1260,280C1200,280,1140,280,1080,280C1020,280,960,280,900,280C840,280,780,280,720,280C660,280,600,280,540,280C480,280,420,280,360,280C300,280,240,280,180,280C120,280,60,280,30,280L0,280Z">
                            </path>
                        </svg>
                    </div>
                </div>



            </div>

            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>
    </section>

    <!-- home section starts  -->

    <!-- services section starts -->
    <section class="services">
        <h1 class="heading-title">our services</h1>
        <div class="box-container">
            <div class="box">
                <img src="images/icon-1.png" alt="">
                <h3>adventure</h3>
            </div>

            <div class="box">
                <img src="images/icon-2.png" alt="">
                <h3>tour guide</h3>
            </div>

            <div class="box">
                <img src="images/icon-3.png" alt="">
                <h3>trekking</h3>
            </div>

            <div class="box">
                <img src="images/icon-4.png" alt="">
                <h3>camp fire</h3>
            </div>

            <div class="box">
                <img src="images/icon-5.png" alt="">
                <h3>off road</h3>
            </div>

            <div class="box">
                <img src="images/icon-6.png" alt="" style="background-color:'\\'">
                <h3>camping</h3>
            </div>
        </div>
    </section>
    <!-- services section ends -->
    <!-- home about section starts  -->
    <section class="home-about">
        <div class="image">
            <img src="images/about-us.jpg" alt="">
        </div>
        <div class="content">
            <h3>about us</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique dolorem dolores voluptas id hic. Cum
                fugiat, quidem reiciendis deleniti fugit neque libero. Aut labore facilis optio cupiditate facere
                repudiandae commodi magni assumenda natus doloremque. Adipisci esse eaque eius ducimus quidem.</p>
            <a href="about.php" class="btn">read more</a>
        </div>
    </section>
    <!-- home about section ends -->


    <!-- home package section starts  -->
    <section class="home-package">
        <h1 class="heading-title">our packages</h1>
        <div class="box-container">
            <div class="box">
                <div class="image">
                    <img src="images/img-1.jpg" alt="">
                </div>
                <div class="content">
                    <h3>adventure & tour</h3>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Doloribus ullam expedita voluptatum
                        ratione iste? Eos.</p>
                    <a href="book.php" class="btn">book now</a>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="images/img-2.jpg" alt="">
                </div>
                <div class="content">
                    <h3>adventure & tour</h3>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Doloribus ullam expedita voluptatum
                        ratione iste? Eos.</p>
                    <a href="book.php" class="btn">book now</a>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="images/img-3.jpg" alt="">
                </div>
                <div class="content">
                    <h3>adventure & tour</h3>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Doloribus ullam expedita voluptatum
                        ratione iste? Eos.</p>
                    <a href="book.php" class="btn">book now</a>
                </div>
            </div>

        </div>

        <!-- dont touch it -->
        <div class="home-package-shape">
            <svg id="wave" style="transform:rotate(0deg); transition: 0.3s" viewBox="0 0 1440 280" version="1.1"
                xmlns="http://www.w3.org/2000/svg">
                <defs>
                    <linearGradient id="sw-gradient-0" x1="0" x2="0" y1="1" y2="0">
                        <stop stop-color="rgba(255, 255, 255, 1)" offset="0%"></stop>
                        <stop stop-color="rgba(236.245, 236.245, 236.245, 1)" offset="100%"></stop>
                    </linearGradient>
                </defs>
                <path style="transform:translate(0, 0px); opacity:1" fill="url(#sw-gradient-0)"
                    d="M0,84L30,112C60,140,120,196,180,224C240,252,300,252,360,238C420,224,480,196,540,191.3C600,187,660,205,720,205.3C780,205,840,187,900,186.7C960,187,1020,205,1080,200.7C1140,196,1200,168,1260,130.7C1320,93,1380,47,1440,42C1500,37,1560,75,1620,93.3C1680,112,1740,112,1800,112C1860,112,1920,112,1980,102.7C2040,93,2100,75,2160,60.7C2220,47,2280,37,2340,51.3C2400,65,2460,103,2520,121.3C2580,140,2640,140,2700,121.3C2760,103,2820,65,2880,79.3C2940,93,3000,159,3060,177.3C3120,196,3180,168,3240,154C3300,140,3360,140,3420,158.7C3480,177,3540,215,3600,200.7C3660,187,3720,121,3780,112C3840,103,3900,149,3960,144.7C4020,140,4080,84,4140,74.7C4200,65,4260,103,4290,121.3L4320,140L4320,280L4290,280C4260,280,4200,280,4140,280C4080,280,4020,280,3960,280C3900,280,3840,280,3780,280C3720,280,3660,280,3600,280C3540,280,3480,280,3420,280C3360,280,3300,280,3240,280C3180,280,3120,280,3060,280C3000,280,2940,280,2880,280C2820,280,2760,280,2700,280C2640,280,2580,280,2520,280C2460,280,2400,280,2340,280C2280,280,2220,280,2160,280C2100,280,2040,280,1980,280C1920,280,1860,280,1800,280C1740,280,1680,280,1620,280C1560,280,1500,280,1440,280C1380,280,1320,280,1260,280C1200,280,1140,280,1080,280C1020,280,960,280,900,280C840,280,780,280,720,280C660,280,600,280,540,280C480,280,420,280,360,280C300,280,240,280,180,280C120,280,60,280,30,280L0,280Z">
                </path>
            </svg>
        </div>
        <!-- dont touch it -->

        <div class="load-more"> <a href="package.php" class="btn">load more</a></div>
    </section>

    <!-- home package section ends -->


    <!-- home offer section starts  -->

    <section class="home-offer">
        <div class="content">
            <h3>up to 50% off</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fuga distinctio architecto quod cupiditate
                cumque sint consequatur. Quisquam unde excepturi a veritatis!</p>
            <a href="book.php" class="btn">book now</a>
        </div>
    </section>
    <!-- home offer section ends -->






















    <!-- footer section starts  -->
    <section class="footer">
        <div class="box-container">
            <div class="box">
                <h3>Quick links</h3>
                <a href="home.php"><i class="fas fa-angle-right"></i>Home</a>
                <a href="about.php"><i class="fas fa-angle-right"></i>About</a>
                <a href="package.php"><i class="fas fa-angle-right"></i>Package</a>
                <a href="book.php"><i class="fas fa-angle-right"></i>Book</a>

            </div>
            <div class="box">
                <h3>Extra links</h3>
                <a href="#"><i class="fas fa-angle-right"></i>Ask questions</a>
                <a href="#"><i class="fas fa-angle-right"></i>About us</a>
                <a href="#"><i class="fas fa-angle-right"></i>Privacy policy</a>
                <a href="#"><i class="fas fa-angle-right"></i>Term of use</a>

            </div>
            <div class="box">
                <h3>contact info</h3>
                <a href="#"><i class="fas fa-phone"></i>+998911051722</a>
                <a href="#"><i class="fas fa-phone"></i>+998939999636</a>
                <a href="#"><i class="fas fa-envelope"></i>211694H@jdu.uz</a>
                <a href="#"><i class="fas fa-map"></i>uzbekistan | tashkent</a>

            </div>
            <div class="box">
                <h3>Follow us</h3>
                <a href="https://www.facebook.com/+998911051722"><i class="fab fa-facebook-f"></i>facebook</a>
                <a href="https://t.me/ObidjonovH"><i class="fab fa-telegram"></i>Telegram</a>
                <a href="https://www.instagram.com/obidjonov_hikmatillo4/"><i class="fab fa-instagram"></i>instagram</a>
            </div>

        </div>
        <div class="credit">created by <span>5-group</span> | all rights reserved!</div>
    </section>
    <!-- footer section ends -->



    <!-- swiper js link  -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>

    <!-- custom js file link  -->
    <script src="js/script.js"></script>
</body>

</html>