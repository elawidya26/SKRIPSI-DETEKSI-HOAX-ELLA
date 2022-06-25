<div class="content flex-column-fluid" id="kt_content">
								<!--begin::Card-->
								<?php echo $this->session->flashdata('msg') ?>
								<div class="card card-custom">
									<div class="card-header flex-wrap border-0 pt-6 pb-0">
										<div class="card-title">
											<h3 class="card-label">Data Profile
											<span class="d-block text-muted pt-2 font-size-sm">Menambahkan tim riset terkait labeleing hoax</span></h3>
										</div>
										<div class="card-toolbar">
											
											<!--begin::Button-->
											<a href="<?php echo base_url('profile/tambah') ?>" class="btn btn-primary font-weight-bolder">
											<span class="svg-icon svg-icon-md">
												<!--begin::Svg Icon | path:/metronic/theme/html/demo8/dist/assets/media/svg/icons/Design/Flatten.svg-->
												<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
													<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
														<rect x="0" y="0" width="24" height="24" />
														<circle fill="#000000" cx="9" cy="15" r="6" />
														<path d="M8.8012943,7.00241953 C9.83837775,5.20768121 11.7781543,4 14,4 C17.3137085,4 20,6.6862915 20,10 C20,12.2218457 18.7923188,14.1616223 16.9975805,15.1987057 C16.9991904,15.1326658 17,15.0664274 17,15 C17,10.581722 13.418278,7 9,7 C8.93357256,7 8.86733422,7.00080962 8.8012943,7.00241953 Z" fill="#000000" opacity="0.3" />
													
													</g>
													
												</svg>
												<!--end::Svg Icon-->

											</span>Tambah Data</a>
											
											<!--end::Button-->
										</div>
									</div>
									<div class="card-body">
										<!--begin: Search Form-->
										<!--begin::Search Form-->
										<div class="mb-7">
											<div class="row align-items-center">
												<div class="col-lg-9 col-xl-8">
													<div class="row align-items-center">
														<div class="col-md-4 my-2 my-md-0">
															<div class="input-icon">
																<input type="text" class="form-control" placeholder="Search..." id="kt_datatable_search_query" />
																<span>
																	<i class="flaticon2-search-1 text-muted"></i>
																</span>
															</div>
														</div>
														
														
													</div>
												</div>
											</div>
										</div>
										<!--end::Search Form-->
										<!--end: Search Form-->
										<!--begin: Datatable-->
										<table class="table table-stripe">
											<thead>
												<tr>
													<th title="Field #1">No</th>
													<th title="Field #2">username</th>
													<th title="Field #4">nama</th>
													<th title="Field #5">foto</th>
													<th title="Field #6">Opsi</th>
												</tr>
											</thead>
											<tbody>
												<?php 
												
												
												foreach ( $profile->result_array() AS $num => $ds ) : ?>
												<tr>
													<td style="vertical-align: middle"><?php echo $num + 1 ?></td>
													<td>
														<?php
															$filename = "https://media3.giphy.com/avatars/default3.gif";
															if ( !empty($ds['url']) ) {

																$filename = $ds['url'];
															}
														
														?>
														<img src="<?php echo $filename ?>" alt="" srcset="" style="width: 50px; height: 50px; object-fit: cover; border-radius: 50px">
													</td>												
													<td style="vertical-align: middle"><?php echo $ds['username'] ?></td>
													<td style="vertical-align: middle"><?php echo $ds['nama'] ?></td>
													
													<td style="vertical-align: middle">
														<a href="<?php echo base_url('profile/proseshapus/'. $ds['id_profile']) ?>" onclick="return confirm('Apakah anda yakin ingin menghapus profile ini ?')" class="btn btn-sm btn-danger">Hapus</a>
														<a href="<?php echo base_url('profile/update/'. $ds['id_profile']) ?>" class="btn btn-sm btn-warning">Update</a>
													</td>
												</tr>
												<?php endforeach; ?>
											</tbody>
										</table>
										<!--end: Datatable-->
									</div>
								</div>
								<!--end::Card-->
							</div>