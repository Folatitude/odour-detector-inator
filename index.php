<?php 
  $conn = mysqli_connect('eu-cdbr-west-03.cleardb.net', 'bfbcc486e9367e', 'b1f4951b', 'heroku_4f9d53a2e933baf');
  // mysql://bfbcc486e9367e:b1f4951b@eu-cdbr-west-03.cleardb.net/heroku_4f9d53a2e933baf?reconnect=true
    //check connection
  
    if(!$conn) {
      echo "connection error: " . mysqli_connect_error();
    }
  
      $email = "";
      $errors = array('email' => '');
      $success = "";
  
  
      if (isset($_POST['submit'])) {
            //check email
      if (empty($_POST['email'])) {
        $errors['email'] = "An email is required <br/>";
      } else {
        $email = $_POST['email'];
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
          $errors['email'] = "email must be a valid email address";
        }
          }
          
          if (array_filter($errors)) {
        //echo "there are errors in the form";
      } else {
              $email = mysqli_real_escape_string($conn, $_POST['email']);
              
                //create sql
              $sql = "INSERT INTO test_email_capture(email) VALUES('$email')";
  
              if (mysqli_query($conn, $sql)) {
          //success
                  echo "email registration was successful";
          header(('Location: index.php'));
        } else {
          //error
          echo 'query error: ' . mysqli_error($conn);
        }
  
  
        // echo "form is valid";
        
      }
      } //end of POST check
     ?>

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
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css"
    />
    <link rel="stylesheet" href="./assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="./assets/css/swiper-bundle.min.css" />
    <link rel="stylesheet" href="./assets/css/style.css" />
  </head>
  <body>
    <div class="loader-bg">
      <div class="loader"></div>
    </div>
    <section class="container-fluid nav-hero px-3 px-md-5">
      <img
        src="./assets/img/Ellipse 4.png"
        alt=""
        class="img-fluid ellipse-4 animate__shakeX animate__animated animate__delay-3s wow"
      />
      <nav class="navbar navbar-expand-lg pt-4 px-0">
        <a class="navbar-brand px-5" href="#"
          ><img src="./assets/img/OD.svg" alt="" class="img-fluid logo"
        /></a>
      </nav>
      <div class="row py-0 px-5">
      <ion-icon name="chevron-up-outline " class= "scroll-size"><img src="./assets/img/scroll.svg" alt=""></ion-icon>
        <div
          class="col-12 col-md-6 py-3 pt-md-5 my-md-1 order-2 order-md-1 px-0 px-md-3"
        >
          <h1
            class="brand-name text-white family-1 text-center text-md-left mb-0"
          >
            Your Safety Comes First
          </h1>
          <div
            class="underline mt-0 offset-5 offset-sm-4 offset-md-3 offset-lg-3"
          ></div>
          <p
            class="brand-message text-white family-2 text-center text-md-left px-2 px-md-0"
          >
            Introducing the
            <span class="header-span animate__zoomInDown animate__animated animate__delay-3s wow">Odour- Detector- Inator</span> app that
            scans and detect health potential threat such as body, mouth or
            environmental odour from a range of 15 meters away from you!
          </p>
          <form
            action="index.php"
            method="POST"
            class="pb-md-5 pt-xl-4 animate__zoomInDown animate__animated animate__delay-3s wow"
          >
            <div class="form-row">
              <div class="form-group col-12 col-md-8 mx-0 mr-0 mb-0 text-center mx-auto text-md-left">
                <input
                  type="name"
                  class="form-control input-field px-4 family-1 mx-auto mx-md-0"
                  name="email"
                  value="<?php echo htmlspecialchars($email) ?>"
                  placeholder="Email address..."
                />
              </div>
              <div class="col-12 col-md-4 px-0 py-0 text-center text-md-left">
                <button
                  type="submit"
                  name="submit"
                  id="main-btn"
                  class="btn text-white family-1 d-block d-lg-inline mx-auto"
                >
                  Join waiting list
                </button>
                
              </div>
            </div>
            <div class="text-danger"><?php echo $errors['email']; ?></div>
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
          class="img-fluid ellipse-1 animate__rubberBand animate__animated wow animate__slower"
        />
        <img
          src="./assets/img/Ellipse 1.png"
          alt=""
          class="img-fluid ellipse-2 d-none d-md-block animate__shakeX animate__animated wow"
        />
        <img
          src="./assets/img/Ellipse 3.png"
          alt=""
          class="img-fluid ellipse-3 animate__wobble animate__animated wow animate__slower"
        />
        <img
          src="./assets/img/Ellipse 5.svg"
          alt=""
          class="img-fluid ellipse-5 animate__heartBeat animate__animated wow animate__slower"
        />
        <h1 class="brand-name text-white text-center family-1 pt-5 mb-0">
          App Features Include
        </h1>
        <div class="underline mt-0 mx-auto"></div>
        <div class="row mt-4">
          <div class="col-12 col-md-5 text-center text-md-right">
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
            src="./assets/img/Group 14.png"
            alt=""
            class="img-fluid d-none d-md-block px-0 pt-3 line-size"
          />
        
          <div
            class="col-12 col-md-4 text-md-left px-0 pb-md-3 offset-2 offset-sm-3 offset-md-0"
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
                src="./assets/img/Group3.svg"
                alt=""
                class="img-fluid icon-img"
              />
              <div class="text d-inline px-3">
                <h4 class="icon-header header-span family-2">Threat Notification</h4>
                <p class="text-white icon-body family-2">
                Smart auto notification system to keep user informed. it comes with a vibration and ringing settings.
                </p>
              </div>
            </div>

            <div class="icon d-flex pb-5" id="icon-positioning">
              <img
                src="./assets/img/Group1.svg"
                alt=""
                class="img-fluid icon-img"
              />
              <div class="text d-inline px-3">
                <h4 class="icon-header header-span family-2">Theme Option
</h4>
                <p class="text-white icon-body family-2 ">
                Application comes with 2 theme option, which includes light and dark mode.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    
    <section class="container slider">
    <img
          src="./assets/img/Ellipse 5.png"
          alt=""
          class="img-fluid ellipse-5 d-none d-md-block"
        />
      <div class="swiper-container row mx-auto">
        <div class="swiper-wrapper">
          <div class="swiper-slide">
            <img
              src="./assets/img/slider1.png"
              alt=""
              class="mx-auto img-fluid"
            />
          </div>
          <div class="swiper-slide">
            <img
              src="./assets/img/slider2.png"
              alt=""
              class="mx-auto img-fluid"
            />
          </div>
          <div class="swiper-slide">
            <img
              src="./assets/img/slider3.png"
              alt=""
              class="mx-auto img-fluid"
            />
          </div>
          <div class="swiper-slide">
            <img
              src="./assets/img/slider4.png"
              alt=""
              class="mx-auto img-fluid"
            />
          </div>
          <div class="swiper-slide">
            <img
              src="./assets/img/slider5.png"
              alt=""
              class="mx-auto img-fluid"
            />
          </div>
        </div>
        <!-- Add Pagination -->
        <div class="swiper-pagination mt-5 pt-4"></div>

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
          class="col-12 col-md-5 order-3 order-md-1 text-center pt-md-5 pl-md-5 animate__pulse animate__animated wow animate__slower"
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
            method="POST"
            class="pb-md-5 pt-xl-4"
          >
            <div class="form-row">
              <div class="form-group col-12 col-md-8 mx-0 mr-0 mb-0 text-center mx-auto text-md-left">
                <input
                  type="name"
                  class="form-control input-field px-4 family-1 mx-auto"
                  name="email"
                  value="<?php echo htmlspecialchars($email) ?>"
                  placeholder="Email address..."
                />
              </div>
              <div class="text-danger"><?php echo $errors['email']; ?></div>
              <div class="col-12 col-md-4 px-0 py-0 text-center text-md-left">
                <button
                  type="submit"
                  name="submit"
                  id="main-btn"
                  class="btn text-white family-1 d-block d-lg-inline mx-auto"
                >
                  Join waiting list
                </button>
              </div>
            </div>
          </form>
        </div>
        <div
          class="col-md-1 col-lg-1 col-xl-2 d-none d-md-block order-2 order-md-2 mx-md-0"
        ></div>
        <div
          class="col-12 col-md-4 order-1 order-md-2 pr-md-5 pt-md-0 pt-lg-5 pt-xl-4 pr-xl-4 pl-md-0 text-left"
        >
          <img src="./assets/img/footer-img.svg" alt="" class="img-lg-fluid h-100 " />
        </div>
      </div>
      <p class="copyright text-center text-white mb-0 family-2 py-3">
        Designed by @Fola, Coded by @Tmac
      </p>
    </footer>

    <script src="./assets/js/jquery.js"></script>
    <script src="./assets/js/swiper-bundle.min.js"></script>
    <script src="./assets/js/popper.js"></script>
    <script src="./assets/js/wow.min.js"></script>
    <script src="https://unpkg.com/ionicons@5.1.2/dist/ionicons.js"></script>
    <script src="./assets/js/smooth-scroll.polyfills.min.js"></script>
    <script src="./assets/js/bootstrap.js"></script>
    <script src="./assets/js/app.js"></script>
  </body>
</html>
