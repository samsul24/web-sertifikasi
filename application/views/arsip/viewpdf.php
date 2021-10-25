
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Literasi</title>

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&amp;display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/super/assets/css/bootstrap.css">

    <link rel="stylesheet" href="<?php echo base_url() ?>assets/super/assets/vendors/simple-datatables/style.css">

    <link rel="stylesheet" href="<?php echo base_url() ?>assets/super/assets/vendors/perfect-scrollbar/perfect-scrollbar.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/super/assets/vendors/bootstrap-icons/bootstrap-icons.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/super/assets/css/app.css">
    <link rel="shortcut icon" href="<?php echo base_url() ?>assets/super/assets/images/favicon.svg" type="image/x-icon">
    <link rel="stylesheet" href="<?php echo base_url() ?>css/assets/css/style1.css">



</head>
<div id="main-content">
    <div class="page-heading">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-6 order-md-1 order-last">
                    <h3>Arsip Surat >> Lihat</h3>
                </div>
                <div class="col-12 col-md-6 order-md-2 order-first">
                    <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Arsip</li>
                            <li class="breadcrumb-item active" aria-current="page">Lihat</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <section class="section">
            <div class="card">
                <div class="card-header">
                <?= $this->session->flashdata('message'); ?>

                <?php
                                $i = 1;
                                foreach ($surat as $rows) : ?>
                                    <div class="card-body">

                                        <h4 class="card-title text-dark">Nomor : <?php echo $rows->no_surat; ?></h4>
                                        <h5 class="card-title text-dark">Kategori : <?php echo $rows->kategori; ?></h5>
                                        <h5 class="card-title text-dark">Judul : <?php echo $rows->judul; ?></h5>
                                        <h5 class="card-title text-dark">Waktu Unggah : <?php echo  $rows->waktu; ?></h5>
                                        <tr>

                                            <td><iframe src="<?php echo base_url('file_pdf/' . $rows->pdf_file) ?>" width="900" height="900"></iframe></td>
                                        </tr>
                                        <br>
                                        <div class='card-header' style="margin-left:-20px;">
                        <a class='btn btn-primary' href="<?php echo site_url(); ?>AdminClient/arsip/">
                            <i class="fa fa-plus"></i>
                            <span>
                                Kembali
                            </span>
                        </a>
                        <a class='btn btn-success' href="<?php echo site_url(); ?>AdminClient/download/<?= $rows->id_surat; ?>">
                            <i class="fa fa-plus"></i>
                            <span>
                                Unduh
                            </span>
                        </a>
                        <a class='btn btn-warning' href="<?php echo site_url(); ?>AdminClient/put/<?= $rows->id_surat; ?>">
                            <i class="fa fa-plus"></i>
                            <span>
                                Edit/Ganti File
                            </span>
                        </a>
                    </div>
                <br>
                <br>
                <br>
                                    </div>
                                </div>
                                <?php endforeach; ?>
                </div>
                
             
            </div>

        </section>
    </div>

    <footer>
        <div class="footer clearfix mb-0 text-muted">
            <div class="float-start">
                <p>2021 © Arsip</p>
            </div>
            <div class="float-end">
            </div>
        </div>
    </footer>
</div>
</div>
<script src="<?php echo base_url() ?>assets/super/assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js"></script>
<script src="<?php echo base_url() ?>assets/super/assets/js/bootstrap.bundle.min.js"></script>

<script src="<?php echo base_url() ?>assets/super/assets/vendors/simple-datatables/simple-datatables.js"></script>


<script src="<?php echo base_url() ?>assets/super/assets/js/main.js"></script>
<script>
    // Simple Datatable
    let table1 = document.querySelector('#table1');
    let dataTable = new simpleDatatables.DataTable(table1);
</script>

<script src="<?php echo base_url() ?>assets/super/assets/js/main.js"></script>



</body>

</html>