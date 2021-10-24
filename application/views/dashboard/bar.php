

<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard -  Admin Dashboard</title>

  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&amp;display=swap" rel="stylesheet">
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/super/assets/css/bootstrap.css">
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/super/assets/vendors/simple-datatables/style.css">
  <link href="https://unpkg.com/filepond/dist/filepond.css" rel="stylesheet">
  <link href="https://unpkg.com/filepond-plugin-image-preview/dist/filepond-plugin-image-preview.css" rel="stylesheet">
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/super/assets/vendors/iconly/bold.css">

  <link rel="stylesheet" href="<?php echo base_url() ?>assets/super/assets/vendors/perfect-scrollbar/perfect-scrollbar.css">
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/super/assets/vendors/bootstrap-icons/bootstrap-icons.css">
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/super/assets/css/app.css">
  <link rel="shortcut icon" href="<?php echo base_url() ?>assets/super/assets/images/favicon.svg" type="image/x-icon">
  <link rel="stylesheet" href="<?php echo base_url() ?>css/assets/css/style1.css">
</head>

<body>
  <div id="app">
    <div id="sidebar" class="active">
      <div class="sidebar-wrapper active ">
        <div class="sidebar-header">
          <div class="d-flex justify-content-between">
            <div class="logo">
              <a href="index.html">Dashboard</a>
            </div>
            <div class="toggler">
              <a href="#" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a>
            </div>
          </div>
        </div>
        <div class="sidebar-menu">
          <ul class="menu">
            <li class="sidebar-title">Menu</li> 
              <a href="<?php echo site_url(); ?>AdminClient/arsip" class="sidebar-link">
                <i class="bi bi-person-bounding-box"></i>
                <span>Arsip</span>
              </a>
            </li>

            <a href="<?php echo site_url(); ?>Homepage/about" class="sidebar-link">
                <i class="bi bi-person-bounding-box"></i>
                <span>About</span>
              </a>
            
            </li>
            <li class="sidebar-item active ">
              <a href="<?= base_url() . 'Login/out' ?>" onClick="return confirm('Logout sekarang ??');" class="sidebar-link">
                <i class="bi bi-door-closed-fill"></i>
                <span>Logout</span>
              </a>
            </li>
          </ul>
        </div>
        <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
        <!-- <div class="ps__rail-x" style="left: 0px; bottom: 0px;">
          <div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div>
        </div>
        <div class="ps__rail-y" style="top: 0px; height: 637px; right: 0px;">
          <div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 245px;"></div>
        </div> -->
      </div>
    </div>
    <div id="main" class='layout-navbar'>
      <header class="mb-3">
        <nav class="navbar navbar-expand navbar-light ">
          <div class="container-fluid">
            <a href="#" class="burger-btn d-block">
              <i class="bi bi-justify fs-3"></i>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item dropdown me-1">
                  <a class="nav-link active dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-expanded="false">
                    <!-- <i class="bi bi-envelope bi-sub fs-4 text-gray-600"></i> -->
                  </a>
                  <!-- <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton">
                    <li>
                      <h6 class="dropdown-header">Mail</h6>
                    </li>
                    <li><a class="dropdown-item" href="#">No new mail</a></li>
                  </ul> -->
                </li>
                <li class="nav-item dropdown me-3">
                  <a class="nav-link active dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-expanded="false">
                    <!-- <i class="bi bi-bell bi-sub fs-4 text-gray-600"></i> -->
                  </a>
                  <!-- <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton">
                    <li>
                      <h6 class="dropdown-header">Notifications</h6>
                    </li>
                    <li><a class="dropdown-item">No notification available</a></li>
                  </ul> -->
                </li>
              </ul>
              <div class="dropdown">
                <a href="#" data-bs-toggle="dropdown" aria-expanded="false">
                  <div class="user-menu d-flex">
                    <div class="user-name text-end me-3">
                      <h6 class="mb-0 text-gray-600"> <?= $this->session->userdata('nama') ?></h6>
                      <p class="mb-0 text-sm text-gray-600"><?= $this->session->userdata('nis') ?></p>
                    </div>
                    <div class="user-img d-flex align-items-center">
                      <div class="avatar avatar-md">
                        <img src="<?php echo base_url() ?>assets/super/assets/images/faces/1.jpg">
                      </div>
                    </div>
                  </div>
                </a>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton">
                  <li>
                    <h6 class="dropdown-header">Hello, <?= $this->session->userdata('nama') ?>!</h6>
                  </li>
                  <li><a class="dropdown-item" href="<?php echo site_url(); ?>AdminClient/Profile"><i class="icon-mid bi bi-person me-2"></i> My
                      Profile</a></li>
                  <li>
                    <hr class="dropdown-divider">
                  </li>
                  <li><a class="dropdown-item" href="<?= base_url() . 'Login/out' ?>" onClick="return confirm('Logout sekarang ??');"><i class="icon-mid bi bi-box-arrow-left me-2"></i> Logout</a></li>
                </ul>
              </div>
            </div>
          </div>
        </nav>
      </header>

      </header>
      <script src="https://unpkg.com/filepond-plugin-file-validate-size/dist/filepond-plugin-file-validate-size.js"></script>
      <script src="https://unpkg.com/filepond-plugin-file-validate-type/dist/filepond-plugin-file-validate-type.js"></script>

      <!-- image editor -->
      <script src="https://unpkg.com/filepond-plugin-image-exif-orientation/dist/filepond-plugin-image-exif-orientation.js"></script>
      <script src="https://unpkg.com/filepond-plugin-image-crop/dist/filepond-plugin-image-crop.js"></script>
      <script src="https://unpkg.com/filepond-plugin-image-filter/dist/filepond-plugin-image-filter.js"></script>
      <script src="https://unpkg.com/filepond-plugin-image-preview/dist/filepond-plugin-image-preview.js"></script>
      <script src="https://unpkg.com/filepond-plugin-image-resize/dist/filepond-plugin-image-resize.js"></script>