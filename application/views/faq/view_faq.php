<div class="content flex-column-fluid" id="kt_content">


    <div class="row">
        <div class="col-md-3">
            
            <div class="form-group">
                <a href="javascript:;" data-toggle="modal" data-target="#tambah-faq">
                    <div class="card card-body text-center">
                        <small>Frequently Asked Question</small><br>
                        <h3>Tambah</h3>
                    </div>
                </a>



                <!-- Modal-->
                <div class="modal fade" id="tambah-faq" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdrop" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-sm" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Tambah FAQ Baru</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <i aria-hidden="true" class="ki ki-close"></i>
                                </button>
                            </div>

                            <form action="<?php echo base_url('faq/proses_tambah') ?>" method="POST">
                            <div class="modal-body">
                                <div class="form-group">
                                    <label for="">Judul Pertanyaan</label>
                                    <input type="text" name="question" class="form-control" placeholder="..." />
                                    <small>Masukkan judul pertanyaan</small>
                                </div>
                                <div class="form-group">
                                    <label for="">Visible</label>
                                    <div class="radio-inline">
                                        <label class="radio">
                                            <input type="radio" name="visible" value="1" />
                                            <span></span>
                                            Ditampilkan
                                        </label>
                                        <label class="radio">
                                            <input type="radio" name="visible" value="0" />
                                            <span></span>
                                            DIsembunyikan
                                        </label>
                                    </div>
                                    <small>Status FAQ</small>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-light-primary font-weight-bold" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary font-weight-bold">Simpan</button>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            

            <?php foreach ( $faq AS $fq ) : ?>
            
            <a href="<?php echo base_url('faq/index?id_faq='. $fq['id_faq']) ?>">
            <div class="form-group">
                <div class="card card-body text-center">
                    <small>Frequently Asked Question</small>
                    <h4><?php echo $fq['question'] ?></h4>

                    <small>
                        <a href="javascript:;" data-toggle="modal" data-target="#sunting-faq-<?php echo $fq['id_faq'] ?>" class="btn btn-sm btn-light-warning">Sunting</a>
                        <a href="<?php echo base_url('faq/proses_hapus/'. $fq['id_faq']) ?>" class="btn btn-sm btn-light-warning">Hapus</a>
                    </small>
                </div>
            </div>
            </a>


                <!-- Modal-->
                <div class="modal fade" id="sunting-faq-<?php echo $fq['id_faq'] ?>" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdrop" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered modal-sm" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Sunting FAQ Baru</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <i aria-hidden="true" class="ki ki-close"></i>
                                    </button>
                                </div>

                                <form action="<?php echo base_url('faq/proses_edit/'. $fq['id_faq']) ?>" method="POST">
                                <div class="modal-body">
                                    <div class="form-group">
                                        <label for="">Judul Pertanyaan</label>
                                        <input type="text" name="question" class="form-control" value="<?php echo $fq['question'] ?>" placeholder="..." />
                                        <small>Masukkan judul pertanyaan</small>
                                    </div>
                                    <div class="form-group">
                                        <label for="">Visible</label>
                                        <div class="radio-inline">
                                            <label class="radio">
                                                <input type="radio" name="visible" value="1" <?php if ( $fq['visible'] == "1" ) { echo 'checked'; } ?> />
                                                <span></span>
                                                Ditampilkan
                                            </label>
                                            <label class="radio">
                                                <input type="radio" name="visible" value="0" <?php if ( $fq['visible'] == "0" ) { echo 'checked'; } ?> />
                                                <span></span>
                                                DIsembunyikan
                                            </label>
                                        </div>
                                        <small>Status FAQ</small>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-light-primary font-weight-bold" data-dismiss="modal">Batal</button>
                                    <button type="submit" class="btn btn-primary font-weight-bold">Simpan dan Perbarui</button>
                                </div>
                                </form>
                            </div>
                        </div>
                    </div>


            <?php endforeach; ?>

        </div>
        
        
        <div class="col-md-9">
            
            <?php 
            
            $id_faq = $this->input->get('id_faq');
            
            if ( $id_faq ) { ?>

            <div class="card card-body">
                <small>Frequently Asked Question</small>
                <h3><?php echo $faq_info['question'] ?></h3>

                <small>
                <button class="btn btn-light-info btn-sm" data-toggle="modal" data-target="#tambah-faq-detail">Tambah Penjelasan</button>
                </small>

                <hr>

                <table class="table table-hover">
                    <tbody>
                        <?php
            
                            

                            if ( $faq_detail->num_rows() > 0 ) {

                                foreach ( $faq_detail->result_array() AS $index => $fd ) :
                        ?>



                            <tr>
                                <td>
                                    <small>Urutan Jawaban <?php echo $index + 1 ?></small>
                                    <h4><?php echo $fd['answer'] ?></h4>
                                </td>
                                <td>
                                    <a href="javascript:;" data-toggle="modal" data-target="#sunting-faq-<?php echo $fd['id_faq_detail'] ?>" class="btn btn-sm btn-light-warning">Sunting</a>
                                    <a href="<?php echo base_url('faq/proses_hapus_detail/'.$id_faq.'/'.$fd['id_faq_detail']) ?>" onclick="return confirm('Apakah anda ingin menghapus data ini ?')" class="btn btn-sm btn-light-warning">Hapus</a>
                                </td>
                            </tr>
















                            <!-- Ubah FAQ Detail-->
                            <div class="modal fade" id="sunting-faq-<?php echo $fd['id_faq_detail'] ?>" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdrop" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-sm" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Tambah FAQ Baru</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <i aria-hidden="true" class="ki ki-close"></i>
                                            </button>
                                        </div>

                                        <form action="<?php echo base_url('faq/proses_ubah_detail/' . $id_faq.'/'. $fd['id_faq_detail']) ?>" method="POST">
                                        <div class="modal-body">
                                            <div class="form-group">
                                                <label for="">Tambahkan Jawaban</label>
                                                <input type="text" name="answer" class="form-control" value="<?php echo $fd['answer'] ?>" placeholder="..." />
                                                <small>Masukkan jawaban dari pertanyaan</small>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-light-primary font-weight-bold" data-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-primary font-weight-bold">Simpan</button>
                                        </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        



                        <?php endforeach; } else { ?>

                            <tr>
                                <td class="text-center">
                                    <h5>Penjelasan Kosong !</h5>
                                    <small>Tambahkan Penjelasan dengan menekan tombol diatas</small>
                                </td>
                            </tr>

                        <?php } ?>
                    </tbody>
                </table>

























                <!-- Tambah FAQ-->
                <div class="modal fade" id="tambah-faq-detail" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdrop" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-sm" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Tambah FAQ Baru</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <i aria-hidden="true" class="ki ki-close"></i>
                                </button>
                            </div>

                            <form action="<?php echo base_url('faq/proses_tambah_detail/' . $id_faq) ?>" method="POST">
                            <div class="modal-body">
                                <div class="form-group">
                                    <label for="">Tambahkan Jawaban</label>
                                    <input type="text" name="answer" class="form-control" placeholder="..." />
                                    <small>Masukkan jawaban dari pertanyaan</small>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-light-primary font-weight-bold" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary font-weight-bold">Simpan</button>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
                
                




            </div>
            
            <?php } else { ?>


                <div class="text-center">
                    <h3>Tambahkan Jawaban dari Pertanyaan</h3>
                    <small>Klik salah satu FAQ yang terbuat</small>
                </div>

            <?php } ?>
            
        </div>
        
    </div>

</div>