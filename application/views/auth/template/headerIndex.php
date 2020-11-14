<!DOCTYPE html>
<html lang="en">

<head>
  <title>AzfaTiket</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAhQgSeUQM0IbankSjDAlV0sb9QdKVapuA&callback=initMap&libraries=&v=weekly" defer></script>


  <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:200,300,400,600,700,800,900" rel="stylesheet">


  <link rel="stylesheet" href="<?= base_url('assets/index/css/open-iconic-bootstrap.min.css') ?>">
  <link rel="stylesheet" href="<?= base_url('assets/index/css/animate.css') ?>">

  <link rel="stylesheet" href="<?= base_url('assets/index/css/owl.carousel.min.css') ?>">
  <link rel="stylesheet" href="<?= base_url('assets/index/css/owl.theme.default.min.css') ?>">
  <link rel="stylesheet" href="<?= base_url('assets/index/css/magnific-popup.css') ?>">

  <link rel="stylesheet" href="<?= base_url('assets/index/css/aos.css') ?>">

  <link rel="stylesheet" href="<?= base_url('assets/index/css/ionicons.min.css') ?>">

  <link rel="stylesheet" href="<?= base_url('assets/index/css/bootstrap-datepicker.css') ?>">
  <link rel="stylesheet" href="<?= base_url('assets/index/css/jquery.timepicker.css') ?>">


  <link rel="stylesheet" href="<?= base_url('assets/index/css/flaticon.css') ?>">
  <link rel="stylesheet" href="<?= base_url('assets/index/css/icomoon.css') ?>">
  <link rel="stylesheet" href="<?= base_url('assets/index/css/bootstrap.css') ?>">
  <script>
    // fungsi initialize untuk mempersiapkan peta
    function initMap() {
      const myLatLng = {
        lat: -7.9825833,
        lng: 112.6303961
      };
      const map = new google.maps.Map(document.getElementById("googleMap"), {
        zoom: 15,
        center: myLatLng,
      });
      new google.maps.Marker({
        position: myLatLng,
        map,
        title: "Azfa Tiket",
      });
    }
  </script>
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
      <a class="navbar-brand" href="<?= base_url(); ?>auth"><span>AzfaTiket</span></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="oi oi-menu"></span> Menu
      </button>

      <div class="collapse navbar-collapse" id="ftco-nav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active"><a href="<?= base_url(); ?>auth" class="nav-link">Home</a></li>
          <li class="nav-item active"><a href="<?= base_url(); ?>auth/about" class="nav-link">About</a></li>
          <li class="nav-item active"><a href="<?= base_url(); ?>auth/tiket" class="nav-link">Tiket</a></li>
          <li class="nav-item active"><a href="<?= base_url(); ?>auth/contact" class="nav-link">Contact</a></li>
          <?php if ($this->session->userdata('user')) { ?>
            <li class="nav-item dropdown active">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <?php echo $_SESSION['user'] ?>
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="<?= base_url(); ?>login/logout">Logout</a>
              </div>
            </li>
          <?php } else { ?>
            <li class="nav-item cta primary"><a href="<?= base_url(); ?>login/index" class="nav-link">Login</a></li>
          <?php } ?>
        </ul>
      </div>
    </div>
  </nav>