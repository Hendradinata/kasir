
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Aplikasi Kasir</title>
    <link rel="icon" href="favicon.ico">
    <link rel="icon" href="favicon.ico" type="image/ico">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
    <link href="assets/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
  <link href="assets/vendor/datatables/responsive.bootstrap4.min.css" rel="stylesheet">
</head>

<body style="background: #D9FDD3;">
<header style="background: #096623; height:45px;">
<button class="btn btn-danger btn-sm border-0 float-right" type="button" data-toggle="modal" style="margin-top:7px; margin-right:20px;">Keluar</button>
</header>
<div class="page-wrapper chiller-theme toggled">
  <a id="show-sidebar" class="btn btn-sm btn-primary border-0" href="#">
    <i class="fas fa-bars"></i>
  </a>
  <nav id="sidebar" class="sidebar-wrapper" style="background: #40BA2C;">
    <div class="sidebar-content">
      <div class="sidebar-brand" style="background: #096623;">
        <a href="./"><i ></i>PT. SIDHI SARI FARMA</a>
        
      </div>
      <div class="sidebar-header">
        <div class="user-pic" style="height:80px;width:80px;">
          <img class="img-responsive img-rounded" src="assets/images/LOGO AJ.png"
            alt="User picture">
        </div>
        <div class="user-info">
          <span class="user-name">Hendra
          </span>
          <span class="user-role" style="color:black"><b>Administrator</b></span>
          <span class="user-status">
            <i class="fa fa-chec" style="color:black"></i>
            <span style="color:black">Online</span>
          </span>
        </div>
      </div>
      <!-- sidebar-header  -->

      <div class="sidebar-menu">
        <ul>
          <li class="header-menu">
            <span>Menu</span>
          </li>
          <li>
            <a href="index.php">
              <i class="fas fa-desktop"></i>
              <span><b>Kasir</b></span>
            </a>
          </li>
          <li>
            <a href="obat.php">
            <i class="fas fa-medkit"></i>
              <span><b>Obat</b></span>
            </a>
          </li>
          <li>
            <a href="laporan.php">
              <i class="fas fa-file"></i>
              <span>Laporan</span>
            </a>
          </li>
          <li>
            <a href="pengaturan.php">
              <i class="fa fa-cog"></i>
              <span>Pengaturan</span>
            </a>
          </li>
          <li>
            <a href="#Exit" data-toggle="modal">
              <i class="fa fa-arrow-circle-left"></i>
              <span>Keluar</span>
            </a>
          </li>
        </ul>
      </div>
      <!-- sidebar-menu  -->
    </div>
    <div class="sidebar-footer" style="background: #096623;">

    </div>
  </nav>
  <!-- sidebar-wrapper  -->
  <main class="page-content" >
    <div class="container-fluid">

    <div class="d-block d-sm-block d-md-none d-lg-none py-2"></div>