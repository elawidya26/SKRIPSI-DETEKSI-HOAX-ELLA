<div class="content flex-column-fluid" id="kt_content">
								<!--begin::Notice-->
								<div class="alert alert-custom alert-white alert-shadow gutter-b" role="alert">
									<div class="alert-icon">
										<span class="svg-icon svg-icon-primary svg-icon-xl">
											<!--begin::Svg Icon | path:/metronic/theme/html/demo8/dist/assets/media/svg/icons/Tools/Compass.svg-->
											<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
												<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
													<rect x="0" y="0" width="24" height="24" />
													<path d="M7.07744993,12.3040451 C7.72444571,13.0716094 8.54044565,13.6920474 9.46808594,14.1079953 L5,23 L4.5,18 L7.07744993,12.3040451 Z M14.5865511,14.2597864 C15.5319561,13.9019016 16.375416,13.3366121 17.0614026,12.6194459 L19.5,18 L19,23 L14.5865511,14.2597864 Z M12,3.55271368e-14 C12.8284271,3.53749572e-14 13.5,0.671572875 13.5,1.5 L13.5,4 L10.5,4 L10.5,1.5 C10.5,0.671572875 11.1715729,3.56793164e-14 12,3.55271368e-14 Z" fill="#000000" opacity="0.3" />
													<path d="M12,10 C13.1045695,10 14,9.1045695 14,8 C14,6.8954305 13.1045695,6 12,6 C10.8954305,6 10,6.8954305 10,8 C10,9.1045695 10.8954305,10 12,10 Z M12,13 C9.23857625,13 7,10.7614237 7,8 C7,5.23857625 9.23857625,3 12,3 C14.7614237,3 17,5.23857625 17,8 C17,10.7614237 14.7614237,13 12,13 Z" fill="#000000" fill-rule="nonzero" />
												</g>
											</svg>
											<!--end::Svg Icon-->
										</span>
									</div>
									<div class="alert-text">
									<p>dataset yang bersumber dari data postingan twitter dan data dari website turnbackhoax.id yang disimpan dalam bentuk excel. Pengambilan data dari twitter dengan menggunakan proses crawling. Proses crawling tersebut menggunakan library tweepy dari bahasa pemrograman Python, library ini berfungsi untuk mengambil data postingan pada twitter dengan menggunakan API Key yang didapatkan dari akun developer twitter. Sedangkan, data dari website turnbackhoax.id diambil menggunakan teknik scraping data . Dataset ini diambil pada rentang waktu tertentu dengan kata kunci #vaksincovid19.</p> 
									</div>
								</div>
								<!--end::Notice-->

								<?php echo $this->session->flashdata('pesan') ?>

								<!--begin::Card-->
								<div class="card card-custom">
									<div class="card-header flex-wrap border-0 pt-6 pb-0">
										<div class="card-title">
											<h3 class="card-label">Tabel Dataset 
											<span class="d-block text-muted pt-2 font-size-sm">Hasil data crawling dan scraping</span></h3>
										</div>
										<div class="card-toolbar">

											<a href="<?php echo base_url('dataset/truncate') ?>" class="btn btn-light-danger font-weight-bolder" onclick="return confirm('Apakah anda yakin ingin mengosongkan tabel ini ?')">
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

											</span>Truncate</a>
											<!--begin::Dropdown-->
											<div class="dropdown dropdown-inline mr-2">
												<a href="javascript:;" data-toggle="modal" data-target="#exampleModal" class="btn btn-light-primary font-weight-bolder">
												<span class="svg-icon svg-icon-md">
													<!--begin::Svg Icon | path:/metronic/theme/html/demo8/dist/assets/media/svg/icons/Design/PenAndRuller.svg-->
													<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
														<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
															<rect x="0" y="0" width="24" height="24" />
															<path d="M3,16 L5,16 C5.55228475,16 6,15.5522847 6,15 C6,14.4477153 5.55228475,14 5,14 L3,14 L3,12 L5,12 C5.55228475,12 6,11.5522847 6,11 C6,10.4477153 5.55228475,10 5,10 L3,10 L3,8 L5,8 C5.55228475,8 6,7.55228475 6,7 C6,6.44771525 5.55228475,6 5,6 L3,6 L3,4 C3,3.44771525 3.44771525,3 4,3 L10,3 C10.5522847,3 11,3.44771525 11,4 L11,19 C11,19.5522847 10.5522847,20 10,20 L4,20 C3.44771525,20 3,19.5522847 3,19 L3,16 Z" fill="#000000" opacity="0.3" />
															<path d="M16,3 L19,3 C20.1045695,3 21,3.8954305 21,5 L21,15.2485298 C21,15.7329761 20.8241635,16.200956 20.5051534,16.565539 L17.8762883,19.5699562 C17.6944473,19.7777745 17.378566,19.7988332 17.1707477,19.6169922 C17.1540423,19.602375 17.1383289,19.5866616 17.1237117,19.5699562 L14.4948466,16.565539 C14.1758365,16.200956 14,15.7329761 14,15.2485298 L14,5 C14,3.8954305 14.8954305,3 16,3 Z" fill="#000000" />
														</g>
													</svg>
													<!--end::Svg Icon-->
												</span>Import</a>


												<!-- Modal-->
												<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
													<div class="modal-dialog modal-dialog-centered modal-sm" role="document">
														<div class="modal-content">

															<form action="<?php echo base_url('dataset/import') ?>" method="post" enctype="multipart/form-data">
															<div class="modal-body">
																<button type="button" class="close" data-dismiss="modal" aria-label="Close">
																	<i aria-hidden="true" class="ki ki-close"></i>
																</button>

																<div class="form-group">
																	<h3>Import Excel</h3>
																	<a href="<?php echo base_url('dokumen/format-excel-versi2.xlsx') ?>">Unduh Template Excel</a>
																</div>

																<div class="form-group">
																	<label for="">Masukkan Excel</label>
																	<input type="file" name="userfile" />
																	<small>Sisipkan file excel dan pastikan sudah mengunduh template excel dari sistem</small>
																</div>
															</div>
															<div class="modal-footer">
																<button type="button" class="btn btn-light-primary font-weight-bold" data-dismiss="modal">Batal</button>
																<button type="submit" class="btn btn-primary font-weight-bold">Tambahkan</button>
															</div>
															</form>
														</div>
													</div>
												</div>

											</div>
											<!--end::Dropdown-->
											<!--begin::Button-->
											<a href="<?php echo base_url('dataset/crawling') ?>" class="btn btn-warning font-weight-bolder">
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

											</span>Crawling Data</a>
											
											<!--end::Button-->
											&emsp;
											
											<!--begin::Button-->
											<a href="<?php echo base_url('dataset/tambah') ?>" class="btn btn-primary font-weight-bolder">
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
										
										
										<!--begin: Datatable-->
										<table class="table table-stripe" id="kt_datatable">
											<thead>
												<tr>
													<th title="Field #1">No</th>
													<th title="Field #2">Penulis</th>
													<th title="Field #3">Isi</th>
													<th title="Field #4">Tanggal</th>
													<th title="Field #5">Sumber</th>
													<th title="Field #6">Label</th>
													
													<th title="Field #8">Opsi</th>
												</tr>
											</thead>
											<tbody>
												<?php 
												
												
												foreach ( $dataset->result_array() AS $num => $ds ) : ?>
												<tr>
													<td><?php echo $num + 1 ?></td>
													<td><?php echo $ds['penulis'] ?></td>
													<td><?php echo $ds['isi'] ?></td>
													<td><?php echo $ds['tanggal_dataset'] ?></td>
													<td><?php echo $ds['sumber'] ?></td>
													<td><?php 
													
														if ( $ds['label'] == "TRUE" ) {


															echo '<span class="label label-light-success label-pill label-inline">TRUE</span>';
														} else if ( $ds['label'] == "FAKE" ) {

															echo '<span class="label label-light-danger label-pill label-inline">FAKE</span>';
														}
													
													?></td>
													<td>
														<a href="<?php echo base_url('dataset/proseshapus/'. $ds['id_dataset']) ?>" onclick="return confirm('Apakah anda yakin ingin menghapus dataset ini ?')" class="btn btn-sm btn-danger">Hapus</a>
														<a href="<?php echo base_url('dataset/update/'. $ds['id_dataset']) ?>" class="btn btn-sm btn-warning">Update</a>
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