
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
                    <h3>Arsip Surat</h3>
                </div>
                <div class="col-12 col-md-6 order-md-2 order-first">
                    <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Arsip</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <section class="section">
            <div class="card">
                <div class="card-header">
                Berikut adalah surat-surat yang telah terbit dan diarsipkan<br>
                    Klik "Lihat" pada kolom aksi untuk menampilkan surat
                  <br>
                </div>
                <div class="card-body">
                    <?= $this->session->flashdata('message'); ?>

                    <div class="dataTable-container">
                        <table class="table table-striped " id="table1">
                            <thead>
                                <tr>
                                    <th data-sortable="" style="width: 11.7015%;"><a href="#" class="dataTable-sorter">No</a></th>
                                    <th data-sortable="" style="width: 11.7015%;"><a href="#" class="dataTable-sorter">No Surat</a></th>
                                    <th data-sortable="" style="width: 11.7015%;"><a href="#" class="dataTable-sorter">Kategori</a></th>
                                    <th data-sortable="" style="width: 11.7015%;"><a href="#" class="dataTable-sorter">Judul</a></th>
                                    <th data-sortable="" style="width: 18.9824%;"><a href="#" class="dataTable-sorter">Waktu Pengarsipan</a></th>
                                    <th data-sortable="" style="width: 11.4415%;"><a href="#" class="dataTable-sorter">Aksi</a></th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php
                                $i = 1;
                                foreach ($surat as $rows) : ?>
                                    <tr>
                                        <td><?php echo $i++; ?></td>
                                        <td><?php echo $rows->no_surat; ?></td>
                                        <td><?php echo $rows->kategori; ?></td>
                                        <td><?php echo $rows->judul; ?></td>
                                        <td><?php echo $rows->waktu; ?></td>
                                    <td>
                                        <a href="<?= base_url(); ?>AdminClient/delete/<?= $rows->id_surat; ?>" class="btn btn-danger" onClick="return confirm('yakin mau hapus');">
                                            <i class="bi bi-trash" aria-hidden="true"></i></a>
                                            <a href="<?php echo site_url(); ?>AdminClient/download/<?= $rows->id_surat; ?>" class="btn btn-warning">
                                                        <i class="bi bi-download" aria-hidden="true"></i></a>
                                            <a href="<?= base_url(); ?>AdminClient/viewpdf/<?= $rows->id_surat; ?>" class="btn btn-success">
                                                <i class="bi bi-book" aria-hidden="true"></i></a>    
                                        </td>    
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                        <div class='card-header' style="margin-left:-20px;">
                        <a class='btn btn-primary' href="<?php echo site_url(); ?>AdminClient/post/">
                            <i class="fa fa-plus"></i>
                            <span>
                                Arsipkan Surat
                            </span>
                        </a>
                        </a>
                        <br>
                    </div>
                    </div>

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