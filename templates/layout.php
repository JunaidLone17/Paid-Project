<!-- <?php
require_once '../classes/table.php';
?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title><?php echo $title ?></title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="robots" content="all,follow">
  <-- Bootstrap CSS-->
  <link rel="stylesheet" href="../vendor/bootstrap/css/bootstrap.min.css">
  <!-- Google fonts-->
  <!-- <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,700"> -->
  <!-- Icon fonts-->
  <link rel="stylesheet" href="../css/pe-icon-7-stroke.css">
  <!-- Lightbox CSS-->
  <link rel="stylesheet" href="../vendor/lightbox2/css/lightbox.min.css">
  <!-- Leaflet CSS-->
  <link rel="stylesheet" href="../vendor/leaflet/leaflet.css">
  <!-- theme stylesheet-->
  <link rel="stylesheet" href="../css/style.green.css" id="theme-stylesheet">
  <!-- Custom stylesheet - for your changes-->
  <link rel="stylesheet" href="../css/custom.css">
  <!-- Favicon-->
  <link rel="shortcut icon" href="../img/favicon.png">
  <!-- Tweaks for older IEs-->
  <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
</head>

<body>
  <!-- navbar-->
  <header class="header">
    <nav class="navbar navbar-expand-lg bg-header navbar-dark py-lg-0">
      <div class="container-fluid">
       
        <button type="button" id="navar-toggle-button" data-toggle="collapse" data-target="#navbarSupportedContent" class="navbar-toggler navbar-toggler-right small"><span class="text-uppercase text-white mr-2">Menu</span><i class="fas fa-bars"></i></button>
        <div id="navbarSupportedContent" class="collapse navbar-collapse">
          <ul class="navbar-nav ml-auto d-lg-flex align-items-lg-center">
            <li class="nav-item"><a href="home" class="nav-link font-weight-bold px-lg-3 py-lg-4">Home </a>
            </li>
           
            <li class="nav-item dropdown">
              <a id="navbarDropdownMenuLink" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link font-weight-bold px-lg-3 py-lg-4 dropdown-toggle">Animals</a>
              <div aria-labelledby="navbarDropdownMenuLink" class="dropdown-menu mt-0">
                <?php
                $classTable = new Table('classifications');
                $classifications = $classTable->findInDatabase('class_archived', 'false');

                foreach ($classifications as $key => $class) { ?>
                  <a href="animals?class_id=<?= $class['class_id'] ?>" class="dropdown-item small text-uppercase"><?= $class['class_display_name'] ?></a>
                <?php } ?>
              </div>
            </li>
            <!-- show non sponsor only links -->
            <?php if (!(isset($_SESSION['user_type']) && $_SESSION['user_type'] == 'sponsor')) { ?>

              <li class="nav-item"><a href="ticket_page" class="nav-link font-weight-bold px-lg-3 py-lg-4">Book Tickets </a>
              </li>
             
              <li class="nav-item"><a href="vacancies" class="nav-link font-weight-bold px-lg-3 py-lg-4">Vacancies </a>
              </li>
              <li class="nav-item"><a href="events" class="nav-link font-weight-bold px-lg-3 py-lg-4">Events </a>
              </li>
              <li class="nav-item"><a href="contact" class="nav-link font-weight-bold px-lg-3 py-lg-4">Contact Us </a>
              </li>
            <?php } else { //sponsor links 
            ?>
              <li class="nav-item"><a href="post_testimonial" class="nav-link font-weight-bold px-lg-3 py-lg-4">Add Testimonial</a>
              </li>
            <?php } ?>
            <?php if (!isset($_SESSION['authenticated'])) { ?>
              <li class="nav-item dropdown">
                <a href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link font-weight-bold px-lg-3 py-lg-4 dropdown-toggle">Register</a>
                <div class="dropdown-menu mt-0">
                  <a href="register_visitor" class="dropdown-item small text-uppercase">Visitor Registration</a>
                </div>
              </li>
            <?php } ?>
            <?php if (!isset($_SESSION['authenticated'])) { ?>
              <li class="nav-item mt-4 mt-lg-0">
                <a type="button" href="login" class="btn btn-outline-primary nav-btn btn-sm navbar-login-button text-white"> <i class="fas fa-sign-out-alt mr-2"></i>Login </a>
              </li>
            <?php } else { ?>
              <li class="nav-item dropdown pr-2">
                <a class="nav-link dropdown-toggle font-weight-bold text-light" href="#a" data-toggle="dropdown">
                  <img src="../img/user-default-2-min.png" style="width: 35px; border-radius:50%" alt="" />
                </a>
                <div class="dropdown-menu dropdown-menu-right">
                  <a href="logout" class="dropdown-item">Logout</a>
                  <?php if ($_SESSION['user_type'] == "visitor") { ?>
                    <a href="register_visitor?visitor_id=<?= $_SESSION['visitor_id'] ?>" class="dropdown-item">Update Profile</a>
                  <?php } ?>
                  <?php if ($_SESSION['user_type'] == "sponsor") { ?>
                    <a href="register_sponsor?sponsor_id=<?= $_SESSION['sponsor_id'] ?>" class="dropdown-item">Update Profile</a>
                  <?php } ?>
                </div>
              </li>
            <?php } ?>
          </ul>
        </div>
      </div>
    </nav>
  </header>

  <?php echo $content ?>


  <!-- JavaScript files-->
  <script src="../vendor/jquery/jquery.min.js"></script>
  <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../vendor/lightbox2/js/lightbox.min.js"></script>
  <script src="../vendor/leaflet/leaflet.js"></script>
  <script src="../js/front.js"></script>
  <!-- FontAwesome CSS - loading as last, so it doesn't block rendering-->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
</body>

</html> 