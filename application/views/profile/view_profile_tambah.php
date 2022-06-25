<div class="content flex-column-fluid" id="kt_content">
								
                            
                            
                                <div class="row justify-content-center">
                                    <div class="col-md-7">

                                        <!--begin::Card-->
                                        <div class="card card-custom">
                                            
                                            <div class="card-body">

                                                <h4>Form profile</h4>

                                                <form action="<?php echo base_url('profile/prosestambah') ?>" method="POST" enctype="multipart/form-data">


                                                    <div class="form-group">
                                                        <label for="">username</label>
                                                        <input type="text" name="username" class="form-control" placeholder=". . ." required="" />
                                                        <small>Masukkan username</small>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="">password</label>
                                                        <input type="text" name="password" class="form-control" placeholder=". . ." required="" />
                                                        <small>Masukkan password</small>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="">nama</label>
                                                        <input type="text" name="nama" class="form-control" placeholder=". . ." required="" />
                                                        <small>Masukkan nama</small>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="">foto</label>
                                                        <input type="file" name="userfile" />
                                                        <small>Unggah foto</small>
                                                    </div>
                                                    


                                                    <div class="form-group text-right">
                                                        <a href="<?php echo base_url('profile/index') ?>" class="btn btn-light-primary">Kembali</a>
                                                        <button class="btn btn-primary">Tambahkan dan Simpan</button>
                                                    </div>

                                                </form>
                                            </div>

                                        </div>
                                        <!--end::Card-->
                                    </div>
                                </div>   
                            
                            
                             
								
							</div>