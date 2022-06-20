                            <div class="content flex-column-fluid" id="kt_content">
								
                            
                            
                                <div class="row justify-content-center">
                                    <div class="col-md-7">

                                        <!--begin::Card-->
                                        <div class="card card-custom">
                                            
                                            <div class="card-body">

                                                <h4>Form Crawling</h4>

                                                <form action="<?php echo base_url('dataset/prosescrawling') ?>" method="POST">


                                                    <div class="form-group">
                                                        <label for="">Kata Kunci</label>
                                                        <input type="text" name="keyword" class="form-control" placeholder=". . ." required="" value="#vaksincovid19" />
                                                        <small>Masukkan kata kunci</small>
                                                    </div>
                                        
                                                    <div class="form-group">
                                                        <label for="">Jumlah</label>
                                                        <input type="number" name="jumlah" class="form-control" value="100" required="" />
                                                        <small>Pilih jumlah berita</small>
                                                    </div>


                                                    <div class="form-group text-right">
                                                        <a href="<?php echo base_url('dataset/index') ?>" class="btn btn-light-primary">Kembali</a>
                                                        <button class="btn btn-primary">Tambahkan dan Simpan</button>
                                                    </div>

                                                </form>
                                            </div>

                                        </div>
                                        <!--end::Card-->
                                    </div>
                                </div>   
                            
                            
                             
								
							</div>