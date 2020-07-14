<?php 
if(isset($_POST['submit'])){ 
  if(empty($_POST['email'])) {
    echo 'Please add an email <br />';
  } else {
    $email = $_POST['email'];
    if(!filter_var($email, FILTER_VALIDATE-EMAIL)){
      echo 'email must be a valid email address <br />';
    }
    
  }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Odour-Detector-Inator</title>
  <link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700&family=Poppins:wght@700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="./assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="./assets/css/style.css">
</head>
<body>
<section class="container-fluid nav-hero px-3 px-md-5">
<nav class="navbar navbar-expand-lg py-2 px-0">
  <a class="navbar-brand" href="#"><img src="./assets/img/OD.svg" alt="" class="img-fluid"></a>
</nav>
<div class="row">
  <div class="col-12 col-md-6 py-5 my-md-3">
    <h1 class="brand-name text-white family-1">Your Safety Comes First</h1>
    <p class="brand-message text-white family-2">Introducing the <span>Odour- Detector- Inator</span> app that scans and detect health potential threat such as body, mouth or environmental odour from a range of 15 meters away from you!</p>
    <form action = "index.php" Method = "GET">
      <div class="form-row">
      <div class="form-group col-md-6">
      <input type="name" class="form-control input-field px-4" name = "email" placeholder ="Email address...">
      </div>
      <button type="submit" name = "submit" class="btn btn-primary">Join waiting list</button>
      </div>
    </form>
  </div>
  <div class="col-12 col-md-6">
   <img src="./assets/img/Humans.svg" alt="" class="img-fluid img-size pb-3">
  </div>
</div>
</section>
</body>
</html>