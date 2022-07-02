<div class="content flex-column-fluid" id="kt_content">
								
                            
                            
                                <div class="row justify-content-center">
                                    <div class="col-md-7">

                                        <!--begin::Card-->
                                        <div class="card card-custom">
                                            
                                            <div class="card-body">

                                                <h4>Form lapor_hoax</h4>

                                                <form action="<?php echo base_url('lapor_hoax/prosestambah') ?>" method="POST">


                                                    <div class="form-group">
                                                        <label for="">judul</label>
                                                        <input type="text" name="judul" class="form-control" placeholder=". . ." required="" />
                                                        <small>Masukkan nama penulis</small>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="">Isi</label>
                                                        <textarea name="isi" class="form-control" placeholder=". . ." cols="30" rows="10"></textarea>
                                                        <small>Isi berita</small>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="">Label</label>
                                                        <div class="radio-inline">
                                                        	<label class="radio">
                                                        		<input type="radio" name="label" value="TRUE" />
                                                        		<span></span>
                                                        		TRUE
                                                        	</label>
                                                        	<label class="radio">
                                                        		<input type="radio" name="label" value="FAKE" />
                                                        		<span></span>
                                                        		FAKE
                                                        	</label>
                                                        </div>
                                                        <span class="form-text text-muted">Pilih label berita</span>
                                                    </div>
                                                    
                                                    <div class="form-group">
                                                        <label for="">Sumber</label>
                                                        <input type="text" name="sumber" class="form-control" placeholder=". . ." required="" />
                                                        <small>Masukkan link atau referensi dari label</small>
                                                    </div>
                                                    
                                                    <div class="form-group">
                                                        <label for="">bukti</label>
                                                        <input type="text" name="bukti" class="form-control" placeholder=". . ." required="" />
                                                        <small>Masukkan link atau referensi dari label</small>
                                                    </div>
                                                    
                                                    <div class="form-group">
                                                        <label for="">nama</label>
                                                        <input type="text" name="nama" class="form-control" placeholder=". . ." required="" />
                                                        <small>Masukkan link atau referensi dari label</small>
                                                    </div>
                                                    
                                                    <div class="form-group">
                                                        <label for="">email</label>
                                                        <input type="email" name="email" class="form-control" placeholder=". . ." required="" />
                                                        <small>Masukkan link atau referensi dari label</small>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="">status</label>
                                                        <div class="radio-inline">
                                                        	<label class="radio">
                                                        		<input type="radio" name="status" value="Fakta" />
                                                        		<span></span>
                                                        		Fakta
                                                        	</label>
                                                        	<label class="radio">
                                                        		<input type="radio" name="status" value="Palsu" />
                                                        		<span></span>
                                                        		Palsu
                                                        	</label>
                                                        </div>
                                                        <span class="form-text text-muted">Pilih Status</span>
                                                    </div>
                                                    

                                                    <div class="form-group text-right">
                                                        <a href="<?php echo base_url('lapor_hoax/index') ?>" class="btn btn-light-primary">Kembali</a>
                                                        <button class="btn btn-primary">Tambahkan dan Simpan</button>
                                                    </div>

                                                </form>
                                            </div>

                                        </div>
                                        <!--end::Card-->
                                    </div>
                                </div>   
                            
                            
                             
								
							</div>