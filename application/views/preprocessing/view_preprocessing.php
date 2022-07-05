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
									<p> Preprocessing merupakan suatu proses pengubahan bentuk data teks yang tidak terstruktur sebagai bentuk yang terstruktur sesuai menggunakan kebutuhannya. Pada sistem yang dibangun, ada 5 tahap preprocessing yaitu Pertama Case Folding, Normalization , Tokenizing, Filtering , dan Stemming.</p>
									</div>
								</div>
								<!--end::Notice-->

								<?php echo $this->session->flashdata('pesan') ?>
								
								<!--begin::Card-->
								<div class="card card-custom">
									<div class="card-header flex-wrap border-0 pt-6 pb-0">
										<div class="card-title">
											<h3 class="card-label">Tabel Preprocessing 
											<span class="d-block text-muted pt-2 font-size-sm" id="pesan">Hasil dari dataset yang telah diolah preprocessing</span></h3>
										</div>
										<div class="card-toolbar">
											<!--begin::Dropdown-->
											<div class="dropdown dropdown-inline mr-2">
												
												<!--begin::Dropdown Menu-->
												<div class="dropdown-menu dropdown-menu-sm dropdown-menu-right">
													<!--begin::Navigation-->
													<ul class="navi flex-column navi-hover py-2">
														<li class="navi-header font-weight-bolder text-uppercase font-size-sm text-primary pb-2">Choose an option:</li>
														<li class="navi-item">
															<a href="#" class="navi-link">
																<span class="navi-icon">
																	<i class="la la-print"></i>
																</span>
																<span class="navi-text">Print</span>
															</a>
														</li>
														<li class="navi-item">
															<a href="#" class="navi-link">
																<span class="navi-icon">
																	<i class="la la-copy"></i>
																</span>
																<span class="navi-text">Copy</span>
															</a>
														</li>
														<li class="navi-item">
															<a href="#" class="navi-link">
																<span class="navi-icon">
																	<i class="la la-file-excel-o"></i>
																</span>
																<span class="navi-text">Excel</span>
															</a>
														</li>
														<li class="navi-item">
															<a href="#" class="navi-link">
																<span class="navi-icon">
																	<i class="la la-file-text-o"></i>
																</span>
																<span class="navi-text">CSV</span>
															</a>
														</li>
														<li class="navi-item">
															<a href="#" class="navi-link">
																<span class="navi-icon">
																	<i class="la la-file-pdf-o"></i>
																</span>
																<span class="navi-text">PDF</span>
															</a>
														</li>
													</ul>
													<!--end::Navigation-->
												</div>
												<!--end::Dropdown Menu-->
											</div>
											<!--end::Dropdown-->

											<!--begin::Button-->
											<a href="javasript:;" id="btn-proses" class="btn btn-success font-weight-bolder">
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

											</span>Lakukan Preprocessing</a>
											
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
												<div class="col-lg-3 col-xl-4 mt-5 mt-lg-0">
													<a href="#" class="btn btn-light-primary px-6 font-weight-bold">Search</a>
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
													<th title="Field #2">Hasil</th>
													<th title="Field #3">Label</th>
												</tr>
											</thead>
											<tbody id="konten-tabel">
												
											</tbody>
										</table>
										<!--end: Datatable-->
									</div>
								</div>
								<!--end::Card-->
							</div>



<script>
	$(function() {


		// tampil semua hasil data yang telah dilakukan preprocessing
		$.ajax({
			type: "GET",
			url: "<?php echo base_url('preprocessing/tampil') ?>",
			dataType: "json",
			beforeSend: function () {

				$('#konten-tabel').html(`
						<tr>
							<td colspan="3" align="center">
								<h5>Sedang Memproses data . . .</h5>
								<img src="https://i.gifer.com/origin/7f/7f2487e9bcf3b76eab3e9277f7beb6af_w200.gif">
							</td>
						</tr>
					`);
			},
			success: function (hasil) {

				$('#pesan').text(hasil.pesan);
				$('#konten-tabel').html(hasil.data);
			}

		})



		// tambahkan preprocessing baru
		$('#btn-proses').click(function() {

			$.ajax({
				type: "GET",
				url : "<?php echo base_url('preprocessing/hasil') ?>",
				dataType: "json",
				beforeSend: function() {

					$('#konten-tabel').html(`
						<tr>
							<td colspan="3" align="center">
								<h5>Sedang Memproses data . . .</h5>
								<img src="https://i.gifer.com/origin/7f/7f2487e9bcf3b76eab3e9277f7beb6af_w200.gif">
							</td>
						</tr>
					`);
				}, success: function( hasil ) {

					$('#pesan').text(hasil.pesan);
					$('#konten-tabel').html( hasil.data );
				}, error: function( er ) {

					console.log( er );
				}

			})
		})
	})
</script>


