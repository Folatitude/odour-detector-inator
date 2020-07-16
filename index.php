<?php 
if(isset($_POST['submit'])){ 
  if(empty($_POST['email'])) {
    echo 'Please add an email <br />'; } else { $email = $_POST['email'];
if(!filter_var($email, FILTER_VALIDATE-EMAIL)){ echo 'email must be a valid
email address <br />'; } } } ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Odour-Detector-Inator</title>
    <link
      href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700&family=Poppins:wght@500;700&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="./assets/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="./assets/slick/slick.css" />
    <link
      rel="stylesheet"
      type="text/css"
      href="./assets/slick/slick-theme.css"
    />
    <link rel="stylesheet" href="./assets/css/swiper-bundle.min.css" />
    <link rel="stylesheet" href="./assets/css/style.css" />
  </head>
  <body>
    <section class="container-fluid nav-hero px-3 px-md-5 mb-5">
      <img
        src="./assets/img/Ellipse 4.png"
        alt=""
        class="img-fluid ellipse-4"
      />
      <nav class="navbar navbar-expand-lg pt-4 px-0">
        <a class="navbar-brand px-5" href="#"
          ><img src="./assets/img/OD.svg" alt="" class="img-fluid logo"
        /></a>
      </nav>
      <div class="row py-0 px-5">
        <div
          class="col-12 col-md-6 py-3 pt-md-5 my-md-1 order-2 order-md-1 px-0 px-md-3"
        >
          <h1
            class="brand-name text-white family-1 text-center text-md-left mb-0"
          >
            Your Safety Comes First
          </h1>
          <div
            class="underline mt-0 offset-5 offset-sm-4 offset-md-3 offset-lg-2"
          ></div>
          <p
            class="brand-message text-white family-2 text-center text-md-left px-2 px-md-0"
          >
            Introducing the
            <span class="header-span">Odour- Detector- Inator</span> app that
            scans and detect health potential threat such as body, mouth or
            environmental odour from a range of 15 meters away from you!
          </p>
          <form action="index.php" method="GET" role="form" class="pb-md-5">
            <div class="form-row">
              <div class="form-group col-8 mx-0 mr-0">
                <input
                  type="name"
                  class="form-control input-field px-4 family-1"
                  name="email"
                  placeholder="Email address..."
                />
              </div>
              <div class="col-4 px-0">
                <button
                  type="submit"
                  name="submit"
                  id="main-btn"
                  class="btn text-white family-1"
                >
                  Join waiting list
                </button>
              </div>
            </div>
          </form>
        </div>
        <div class="col-12 col-md-6 mr-0 pr-0 order-1 order-md-2 text-right">
          <img
            src="./assets/img/Humans.svg"
            alt=""
            class="img-fluid img-size pb-2 pb-md-5 mb-md-3 px-0"
          />
        </div>
      </div>
    </section>
    <section class="container-fluid mt-1 m-0 px-0 mx-0">
      <div class="section-2-a pb-5 pb-md-0">
        <img
          src="./assets/img/Ellipse 1.png"
          alt=""
          class="img-fluid ellipse-1"
        />
        <img
          src="./assets/img/Ellipse 1.png"
          alt=""
          class="img-fluid ellipse-2 d-none d-md-block"
        />
        <img
          src="./assets/img/Ellipse 3.png"
          alt=""
          class="img-fluid ellipse-3"
        />
        <img
          src="./assets/img/Ellipse 5.svg"
          alt=""
          class="img-fluid ellipse-5"
        />
        <h1 class="brand-name text-white text-center family-1 pt-5 mb-0">
          App Features Include
        </h1>
        <div class="underline mt-0 mx-auto"></div>
        <div class="row mt-4">
          <div class="col-12 col-md-5 text-center text-md-right trouble">
            <img
              src="./assets/img/phone1-small.svg"
              alt=""
              class="img-fluid d-inline-block d-md-none"
            />
            <img
              src="./assets/img/Phone1.svg"
              alt=""
              class="img-fluid d-none d-md-inline-block"
            />
          </div>
          <img
            src="./assets/img/lines.png"
            alt=""
            class="img-fluid d-none d-md-block px-0 pt-4 line-size"
          />
          <!-- <div class="col-md-3 d-none d-md-block px-0 pt-4 mx-0 lines">
              
            </div> -->
          <div
            class="col-12 col-md-4 text-md-left px-0 pb-md-3 offset-3 offset-sm-3 offset-md-0"
          >
            <div class="icon d-flex" id="icon-positioning">
              <img
                src="./assets/img/Group2.svg"
                alt=""
                class="img-fluid icon-img"
              />
              <div class="text d-inline px-3">
                <h4 class="icon-header header-span family-2">
                  Automated GPS Tracker
                </h4>
                <p class="text-white icon-body family-2">
                  Tracker embeded with optimized GPS system to identify location
                  and possible threat with in 15 meter range.
                </p>
              </div>
            </div>

            <div class="icon d-flex" id="icon-positioning">
              <img
                src="./assets/img/Group2.svg"
                alt=""
                class="img-fluid icon-img"
              />
              <div class="text d-inline px-3">
                <h4 class="icon-header header-span">Automated GPS Tracker</h4>
                <p class="text-white icon-body">
                  Tracker embeded with optimized GPS system to identify location
                  and possible threat with in 15 meter range.
                </p>
              </div>
            </div>

            <div class="icon d-flex pb-5" id="icon-positioning">
              <img
                src="./assets/img/Group2.svg"
                alt=""
                class="img-fluid icon-img"
              />
              <div class="text d-inline px-3">
                <h4 class="icon-header header-span">Automated GPS Tracker</h4>
                <p class="text-white icon-body">
                  Tracker embeded with optimized GPS system to identify location
                  and possible threat with in 15 meter range.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- <section class="container-fluid my-0 my-md-5" id="slide">
      <div class="slider">
        <div>
          <a href=""
            ><img src="./assets/img/slider1.svg" alt="" class="img-fluid"
          /></a>
        </div>
        <div>
          <a href=""
            ><img src="./assets/img/slider1.svg" alt="" class="img-fluid"
          /></a>
        </div>
        <div>
          <a href=""
            ><img src="./assets/img/slider1.svg" alt="" class="img-fluid"
          /></a>
        </div>
        <div>
          <a href=""
            ><img src="./assets/img/slider1.svg" alt="" class="img-fluid"
          /></a>
        </div>
        <div>
          <a href=""
            ><img src="./assets/img/slider1.svg" alt="" class="img-fluid"
          /></a>
        </div>
      </div>
    </section> -->

    <section class="container">
      <div class="swiper-container row mx-auto">
        <div class="swiper-wrapper">
          <div class="swiper-slide">
            <img
              src="./assets/img/slider1.svg"
              alt=""
              class="mx-auto img-fluid"
            />
          </div>
          <div class="swiper-slide">
            <img
              src="./assets/img/slider2.svg"
              alt=""
              class="mx-auto img-fluid"
            />
          </div>
          <div class="swiper-slide">
            <img
              src="./assets/img/slider3.svg"
              alt=""
              class="mx-auto img-fluid"
            />
          </div>
          <div class="swiper-slide">
            <img
              src="./assets/img/slider4.svg"
              alt=""
              class="mx-auto img-fluid"
            />
          </div>
          <div class="swiper-slide">
            <img
              src="./assets/img/slider5.svg"
              alt=""
              class="mx-auto img-fluid"
            />
          </div>
        </div>
        <!-- Add Pagination -->
        <div class="swiper-pagination"></div>

        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>
      </div>
    </section>

    <footer class="footer-styles mb-0">
      <div class="row mx-3">
        <img
          src="./assets/img/Ellipse 3.png"
          alt=""
          class="img-fluid d-none d-md-block footer-ellipse"
        />
        <div
          class="col-12 col-md-5 order-3 order-md-1 text-center pt-md-5 pl-md-5"
        >
          <h3 class="text-white family-1 brand-name text-md-left">
            Be Part Of The First To Know When The App Is Out
          </h3>
          <p
            class="text-white brand-message family-2 text-md-left"
            id="footer-p-width"
          >
            We are currently working on
            <span class="header-span">Odour- Detector- Inator</span>. Kindly
            input your email below to get notification when app is launched.
          </p>
          <form
            action="index.php"
            method="GET"
            role="form"
            class="pb-md-5 pt-xl-4"
          >
            <div class="form-row">
              <div class="form-group col-8 mx-0 mr-0">
                <input
                  type="name"
                  class="form-control input-field px-4 family-1"
                  name="email"
                  placeholder="Email address..."
                />
              </div>
              <div class="col-4 px-0">
                <button
                  type="submit"
                  name="submit"
                  id="main-btn"
                  class="btn text-white family-1"
                >
                  Join waiting list
                </button>
              </div>
            </div>
          </form>
        </div>
        <div
          class="col-md-1 col-lg-2 col-xl-3 d-none d-md-block order-2 order-md-2 mx-md-0"
        ></div>
        <div
          class="col-12 col-md-4 order-1 order-md-2 pr-md-5 pt-md-0 pt-lg-5 pt-xl-4 pr-xl-4 pl-md-0 text-center"
        >
          <img src="./assets/img/footer-img.svg" alt="" class="img-lg-fluid" />
        </div>
      </div>
      <p class="copyright text-center text-white mb-0 family-2 py-3">
        Designed by @Fola, Coded by @Tmac
      </p>
    </footer>

    <script src="./assets/js/jquery.js"></script>
    <script
      type="text/javascript"
      src="//code.jquery.com/jquery-migrate-1.2.1.min.js"
    ></script>
    <script type="text/javascript" src="./assets/slick/slick.min.js"></script>
    <script src="./assets/js/swiper-bundle.min.js"></script>
    <script src="./assets/js/popper.js"></script>
    <script src="./assets/js/wow.min.js"></script>
    <script src="./assets/js/smooth-scroll.polyfills.min.js"></script>
    <script src="./assets/js/bootstrap.js"></script>
    <script src="./assets/js/app.js"></script>
  </body>
</html>
