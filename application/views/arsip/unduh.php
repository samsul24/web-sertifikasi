<div class="container-fluid">
    <div class="row mt-3">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <?php if ($this->session->flashdata('result') != '') { ?>
                        <div class="alert alert-dark alert-dismissible fade show">
                            <button type="button" class="close" data-dismiss="alert">&times;</button>
                            <?php echo $this->session->flashdata('result'); ?>
                        </div>
                    <?php
                    }
                    ?>
                    <h2 class="text-center">Latihan Soal</h2><br>
                    <p><b>Pilihlah salah satu jawaban yang paling benar dengan menuliskan huruf a,b,c atau d!</b> </p>
                        <?php 
                        $i=1;
                        foreach ($surat as $rows) : ?>
                                
                                    <a><?php echo $i ;?>).&nbsp;</a>
                                    <a>&emsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;a. <?php echo $rows->no_surat; ?></a><br>
                                    <a>&emsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;b. <?php echo $rows->judul; ?></a><br>
                                    <a>&emsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;c. <?php echo $rows->kategori; ?></a><br>
                                    <a>&emsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;d. <?php echo $rows->waktu; ?></a><br><bR>
                                    <!-- <td><?php echo $rows->jawaban; ?></td> -->
                            <?php
                        $i++;
                        endforeach; ?>
</table>
                        <script type="text/javascript">
                            window.print();
                        </script>
                             

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>