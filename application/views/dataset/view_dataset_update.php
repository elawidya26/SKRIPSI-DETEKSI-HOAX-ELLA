<div class="content flex-column-fluid" id="kt_content">
								
                            
                            
                                <div class="row justify-content-center">
                                    <div class="col-md-7">

                                        <!--begin::Card-->
                                        <div class="card card-custom">
                                            
                                            <div class="card-body">

                                                <h4>Form Dataset</h4>

                                                <form action="<?php echo base_url('dataset/prosesupdate/'. $dataset['id_dataset']) ?>" method="POST">


                                                    <div class="form-group">
                                                        <label for="">Penulis</label>
                                                        <input type="text" name="penulis" class="form-control" value="<?php echo $dataset['penulis'] ?>" placeholder=". . ." required="" />
                                                        <small>Masukkan nama penulis</small>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="">Isi</label>
                                                        <textarea name="isi" class="form-control" placeholder=". . ." cols="30" rows="10"><?php echo $dataset['isi'] ?></textarea>
                                                        <small>Isi berita</small>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="">Tanggal</label>
                                                        <input type="date" name="tanggal" class="form-control" value="<?php echo date('Y-m-d', strtotime( $dataset['tanggal_dataset'] )) ?>" required="" />
                                                        <small>Pilih tanggal berita</small>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="">Sumber</label>
                                                        <input type="text" name="sumber" class="form-control" placeholder=". . ." required="" value="<?php echo $dataset['sumber'] ?>" />
                                                        <small>Masukkan link atau referensi dari label</small>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="">Label</label>
                                                        <div class="radio-inline">
                                                        	<label class="radio">
                                                        		<input type="radio" name="label" value="TRUE" <?php if ( $dataset['label'] == "TRUE" ) echo 'checked'; ?>/>
                                                        		<span></span>
                                                        		TRUE
                                                        	</label>
                                                        	<label class="radio">
                                                        		<input type="radio" name="label" value="FAKE" <?php if ( $dataset['label'] == "FAKE" ) echo 'checked'; ?>/>
                                                        		<span></span>
                                                        		FAKE
                                                        	</label>
                                                        </div>
                                                        <span class="form-text text-muted">Pilih label berita</span>
                                                    </div>


                                                    <div class="form-group text-right">
                                                        <a href="<?php echo base_url('dataset/index') ?>" class="btn btn-light-primary">Kembali</a>
                                                        <button class="btn btn-primary">Ubah dan Simpan</button>
                                                    </div>

                                                </form>
                                            </div>

                                        </div>
                                        <!--end::Card-->
                                    </div>
                                </div>   
                            
                            
                             
								
							</div>