<div class="content flex-column-fluid" id="kt_content">
								
                            
                            
                                <div class="row justify-content-center">
                                    <div class="col-md-7">

                                        <!--begin::Card-->
                                        <div class="card card-custom">
                                            
                                            <div class="card-body">

                                                <h4>Form preprocessing</h4>

                                                <form action="<?php echo base_url('preprocessing/prosestambah') ?>" method="POST">


                                                    <div class="form-group">
                                                        <label for="">hasil</label>
                                                        <input type="text" name="hasil" class="form-control" placeholder=". . ." required="" />
                                                        <small>Masukkan hasil</small>
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


                                                    <div class="form-group text-right">
                                                        <a href="<?php echo base_url('preprocessing/index') ?>" class="btn btn-light-primary">Kembali</a>
                                                        <button class="btn btn-primary">Tambahkan dan Simpan</button>
                                                    </div>

                                                </form>
                                            </div>

                                        </div>
                                        <!--end::Card-->
                                    </div>
                                </div>   
                            
                            
                             
								
							</div>