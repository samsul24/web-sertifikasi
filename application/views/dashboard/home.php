
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard - Mazer Admin Dashboard</title>

  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&amp;display=swap" rel="stylesheet">
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/super/assets/css/bootstrap.css">

  <link rel="stylesheet" href="<?php echo base_url() ?>assets/super/assets/vendors/iconly/bold.css">

  <link rel="stylesheet" href="<?php echo base_url() ?>assets/super/assets/vendors/perfect-scrollbar/perfect-scrollbar.css">
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/super/assets/vendors/bootstrap-icons/bootstrap-icons.css">
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/super/assets/css/app.css">
  <link rel="shortcut icon" href="<?php echo base_url() ?>assets/super/assets/images/favicon.svg" type="image/x-icon">
  <!-- <link rel="stylesheet" href="<?php echo base_url() ?>css/assets/css/style1.css"> -->



</head>

<div id="main-content">
      <div class="page-heading">
        <h3>Profile Statistics</h3>
      </div>
      <div class="page-content">
        <section class="row">
          <div class="col-12 col-lg-9">
            <div class="row">
              <div class="col-6 col-lg-3 col-md-6">
                <div class="card">
                  <div class="card-body px-3 py-4-5">
                    <div class="row">
                      <div class="col-md-4">
                        <div class="stats-icon purple">
                          <i class="iconly-boldShow"></i>
                        </div>
                      </div>
                       <div class="col-md-8">
                        <h6 class="text-muted font-semibold">Online </h6>
                        <h6 class="font-extrabold mb-0">
                      

                        </h6>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-6 col-lg-3 col-md-6">
                <div class="card">
                  <div class="card-body px-3 py-4-5">
                    <div class="row">
                      <div class="col-md-4">
                        <div class="stats-icon blue">
                          <i class="iconly-boldProfile"></i>
                        </div>
                      </div>
                      <div class="col-md-8">
                        <h6 class="text-muted font-semibold">User</h6>
                        <h6 class="font-extrabold mb-0">
                      
                        </h6>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-6 col-lg-3 col-md-6">
                <div class="card">
                  <div class="card-body px-3 py-4-5">
                    <div class="row">
                      <div class="col-md-4">
                        <div class="stats-icon green">
                          <i class="bi-file-earmark-medical-fill"></i>
                        </div>
                      </div>
                      <div class="col-md-8">
                        <h6 class="text-muted font-semibold">Buku</h6>
                        <h6 class="font-extrabold mb-0">
                        
                        </h6>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-6 col-lg-3 col-md-6">
                <div class="card">
                  <div class="card-body px-3 py-4-5">
                    <div class="row">
                      <div class="col-md-4">
                        <div class="stats-icon red">
                          <i class="bi-file-earmark-medical-fill"></i>
                        </div>
                      </div>
                      <div class="col-md-8">
                        <h6 class="text-muted font-semibold">Ulasan</h6>
                        <h6 class="font-extrabold mb-0">
                      
                     
                        </h6>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-header">
                                    </div>
                                    <div class="card-body">
                        <canvas id="bar">
                        </canvas>
                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
          
            </div>
          </div>
          <div class="col-12 col-lg-3">
            <div class="card">
              <div class="card-body py-4 px-5">
                <div class="d-flex align-items-center">
                  <div class="avatar avatar-xl">
                    <img src="<?php echo base_url() ?>assets/super/assets/images/faces/1.jpg" alt="Face 1">
                  </div>
                  <div class="ms-3 name">
                    <h5 class="font-bold"><?=$this->session->userdata('nama') ?></h5>
                    <h6 class="text-muted mb-0"><?=$this->session->userdata('nis') ?></h6>
                  </div>
                </div>
              </div>
            </div>
           
            <div class="card">
                            <div class="card-header">
                                <h4>Visitors Profile</h4>
                            </div>
                            <div class="card-body">
                                <div id="chart-visitors-profile"></div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>



      <footer>
        <div class="footer clearfix mb-0 text-muted">
          <div class="float-start">
            <p>2021 © Literasi</p>
          </div>
          <!-- <div class="float-end">
            <p>Crafted with <span class="text-danger"><i class="bi bi-heart"></i></span> by <a href="http://ahmadsaugi.com">Literasi</a></p>
          </div> -->
        </div>
      </footer>
    </div>
  </div>
  <script src="<?php echo base_url() ?>assets/super/assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js"></script>
  <script src="<?php echo base_url() ?>assets/super/assets/js/bootstrap.bundle.min.js"></script>
  <script src="<?php echo base_url() ?>assets/super/assets/js/pages/dashboard.js"></script>
  <script src="<?php echo base_url() ?>assets/super/assets/js/main.js"></script>


</body>

</html>
<!-- <script src="<?php echo base_url() ?>assets/super/assets/js/pages/ui-chartjs.js"></script> -->
