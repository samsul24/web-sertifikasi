
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
                    <h3>Arsip Surat >> Unggah</h3>
                </div>
                <div class="col-12 col-md-6 order-md-2 order-first">
                    <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page">DataTable</li>
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
                </div>
                <br>
                <div class="card-body">
                    <?= $this->session->flashdata('message'); ?>

                    <div class="dataTable-container">
                    <form action="<?php echo site_url(); ?>AdminClient/post_process" class="needs-validation" method="POST" enctype="multipart/form-data" onload="setSelectBoxByText()">
                        <div class="form-group row">
                            <label for="floatingSelect">Nomor Surat</label>
                            
                            <input style="height:40px; width:547;" type="text" name="no_surat" class="form-control form-control-user" id="no_surat" required></input>
                            <span class="text-danger"></span>
                        </div>
                        <div class="form-group row">
                            <label for="kategori">Kategori</label>
                            <div class="col-sm-10">
                            <select style="height:40px; width:547;" class="form-control" name="kategori" id="kategori">
                                <option value=""></option>
                                <option value="undangan">Undangan</option>
                                <option value="pengumunan">Pengumuman</option>
                                <option value="notadinas">Nota Dinas</option>
                                <option value="pemberitahuan">Pemberitahuan</option>
                            </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="floatingSelect">Judul</label>
                            <input style="height:40px; width:547;" type="text" name="judul" class="form-control form-control-user" id="judul" required></input>
                            <span class="text-danger"></span>
                            
                        </div>
                        <div class="form-group">
                        <label for="floatingSelect">File Surat</label>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                <input type="file" size="32" class="form-control-file" placeholder="Choice Foto" name="pdf_file">
                            </div>
                            <div class="invalid-feedback">
                                <?php echo form_error('pdf_file') ?>
                            </div>
                        </div>
                         <div class="col-md-12 col-sm-12 col-xs-12">
                            <input type="hidden" class="form-control" name="waktu"id="waktu" placeholder="Tanggal ulasan" value="<?php echo date('Y-m-d / H:i:s'); ?>" required data-error="Please enter your message subject" readonly>
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group">
                            <input type="submit" name="" value="Tambahkan" style="height:40px; width:447;" class="btn btn-primary btn-user btn-block" />
                        </div>
                        
                        </form>
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