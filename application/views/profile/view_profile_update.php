<div class="content flex-column-fluid" id="kt_content">
								
                            
                            
                                <div class="row justify-content-center">
                                    <div class="col-md-7">

                                        <!--begin::Card-->
                                        <div class="card card-custom">
                                            
                                            <div class="card-body">

                                                <h4>Form profile</h4>

                                                <form action="<?php echo base_url('profile/prosesupdate/'. $profile['id_profile']) ?>" method="POST">


                                                    <div class="form-group">
                                                        <label for="">username</label>
                                                        <input type="text" name="username" class="form-control" value="<?php echo $profile['username'] ?>" placeholder=". . ." required="" />
                                                        <small>Masukkan username</small>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="">password</label>
                                                        <input type="text" name="password" class="form-control" placeholder=". . ." required="" value="<?php echo $profile['password'] ?>" />
                                                        <small>Masukkan password</small>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="">nama</label>
                                                        <input type="text" name="nama" class="form-control" placeholder=". . ." required="" value="<?php echo $profile['nama'] ?>" />
                                                        <small>Masukkan nama</small>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="">foto</label>
                                                        <input type="text" name="foto" class="form-control" placeholder=". . ." required="" value="<?php echo $profile['foto'] ?>" />
                                                        <small>unggah foto</small>
                                                    </div>
                                                    

                                                    <div class="form-group text-right">
                                                        <a href="<?php echo base_url('profile/index') ?>" class="btn btn-light-primary">Kembali</a>
                                                        <button class="btn btn-primary">Ubah dan Simpan</button>
                                                    </div>

                                                </form>
                                            </div>

                                        </div>
                                        <!--end::Card-->
                                    </div>
                                </div>   
                            
                            
                             
								
							</div>