
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Literasi</title>

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&amp;display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/super/assets/css/bootstrap.css">

    <link href="https://unpkg.com/filepond/dist/filepond.css" rel="stylesheet">
    <link href="https://unpkg.com/filepond-plugin-image-preview/dist/filepond-plugin-image-preview.css" rel="stylesheet">
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
                <h3>Arsip Surat >> Edit Data Arsip</h3>
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Edit</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <section class="section">
        <div class="card">
            <div class="card-header">
            Unggah surat yang telah terbit pada form ini untuk diarsipkan<br>
                    Catatan:<BR>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- Gunakan file berformat PDF<br>
                    <br><br>
                <!-- Section Title Starts -->

                <!-- Section Title Ends -->
                <!-- Form Starts -->
                <form action="<?php echo site_url(); ?>AdminClient/put_process" class="needs-validation" method="POST" enctype="multipart/form-data" onload="setSelectBoxByText()">

                        <?php foreach ($surat as $rows) : ?>
                        <div class="form-group">
                            <label for="id_surat">ID :</label>
                            <input type="text" class="form-control" id="id_surat" value="<?php echo $rows->id_surat; ?>" name="id_surat" required readonly>
                        </div>
                          <div class="form-group" >
                            <label for="pdf_file">File </label>
                                <!-- <div style="background : black; width: 100px; height: 130px;"> -->
                                <div class="col-sm-3">
                                <iframe src="<?= base_url('file_pdf/') . $rows->pdf_file ?>" class="img-thumbnail"></iframe>
                                <div class="col-sm-9">
                                    <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="pdf_file" name="pdf_file" value="<?php echo $rows->pdf_file ; ?>" required>
                                    <input type="hidden" name="old_pdf_file" value="<?php echo $rows->pdf_file; ?>">
                                    <div class="invalid-feedback">
                                        <?php echo form_error('pdf_file') ?>
                                    </div>
                                </div>
                            </div>
                            <label  class="form-text" for="pdf_file" value=""> File Sebelumnya :<?php echo $rows->pdf_file; ?></label>
                        </div><br><br>
                        <div class="form-group">
                            <label for="no_surat">Nomor Surat :</label>
                            <input type="text" class="form-control" id="no_surat" value="<?php echo $rows->no_surat; ?>" name="no_surat" required>
                        </div>
                        <div class="form-group">
                            <label for="judul">Judul :</label>
                            <input type="text" class="form-control" id="judul" value="<?php echo $rows->judul; ?>" name="judul" required>
                        </div>
  
                        <div class="form-group row">
                            <label for="kategori">Kategori</label>
                            <div class="col-sm-10">
                            <select style="height:40px; width:547;" class="form-control" name="kategori" id="kategori" >
                                <option  value="<?php echo $rows->kategori; ?>" ><?php echo $rows->kategori; ?></option>
                                <option value="undangan" >Undangan</option>
                                <option value="pengumunan">Pengumuman</option>
                                <option value="notadinas">Nota Dinas</option>
                                <option value="pemberitahuan">Pemberitahuan</option>
                            </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="hidden" class="form-control" id="waktu" placeholder="Deskripsi" value="<?php echo $rows->waktu; ?>" name="waktu" required readonly>
                        </div>
                        <div class="form-group">
                          <input type="submit" name="Update" value="Update" class="btn btn-primary btn-user btn-block" />
                          </div>
                    <?php endforeach; ?>
                </form>
            </div>
        </div>
    </div>
    <footer>
    <div class="footer clearfix mb-0 text-muted">
        <div class="float-start">
            <p>2021 © Arsip</p>
        </div>
</div>
</footer>
</div>

<script src="<?php echo base_url() ?>assets/super/assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js"></script>
<script src="<?php echo base_url() ?>assets/super/assets/js/bootstrap.bundle.min.js"></script>

<script src="<?php echo base_url() ?>assets/super/assets/vendors/simple-datatables/simple-datatables.js"></script>
<script>
        // Simple Datatable
        let table1 = document.querySelector('#table1');
        let dataTable = new simpleDatatables.DataTable(table1);
    </script>

<script src="<?php echo base_url() ?>assets/super/assets/js/main.js"></script>


</body>

</html>
