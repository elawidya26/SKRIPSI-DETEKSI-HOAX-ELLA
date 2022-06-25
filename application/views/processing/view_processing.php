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
								<div class="row">

									<div class="col-md-3">
										<div class="card card-custom">
											<div class="card-body">
												<form action="<?php echo base_url('processing/index') ?>" method="GET">
													<div class="form-group">
														<label for="">Threshold</label>
														<input type="number" name="threshold" value="50" class="form-control" placeholder=". . ." />
														<small>Atur data threshold</small>
													</div>


													<div class="row">
														<div class="col-md-6">
															<div class="form-group">
																<label for="">Training</label>
																<input type="number" name="training" value="80" class="form-control" placeholder=". . ." />
																<small>Atur data threshold</small>
															</div>
														</div>
														<div class="col-md-6">
															<div class="form-group">
																<label for="">Testing</label>
																<input type="number" name="testing" value="20" class="form-control" placeholder=". . ." />
																<small>Atur data threshold</small>
															</div>
														</div>
													</div>

													<div class="form-group">
														<label for="">Jumlah K-Fold</label>
														<input type="number" name="fold" class="form-control" placeholder=". . ." />
														<small>Atur data kfold</small>
													</div>


													<div class="form-group">
														<button type="submit" class="btn btn-primary btn-block">Naive Bayes</button>
														<small>Klik untuk memulai algoritma naive bayes</small>
													</div>
												</form>
											</div>
										</div>
									</div>
									<div class="col-md-9">
										<!--begin::Card-->
										<div class="card card-custom">
											<div class="card-header flex-wrap border-0 pt-6 pb-0">
												<div class="card-title">
													<h3 class="card-label">Tabel Processing 
													<span class="d-block text-muted pt-2 font-size-sm">Hasil dari processing yang telah diolah preprocessing</span></h3>
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
												

												<?php 
												
												if ( (count($result) != 0)) : 
												
													if ( count( $result['data'] ) > 0 ) :
												?>


												<div class="row">
													<div class="col-md-4">
														<small>Akurasi</small>
														<h2><?php echo number_format($result['avg_acc'] * 100, 2) ?> %</h2>
													</div>
													<div class="col-md-4">
														<small>Precision</small>
														<h2><?php echo number_format($result['avg_precision'] * 100, 2) ?> %</h2>
													</div>
													<div class="col-md-4">
														<small>Recall</small>
														<h2><?php echo number_format($result['avg_recall'] * 100, 2) ?> %</h2>
													</div>
												</div>

												<hr>
												

												<?php foreach ( $result['data'] AS $rs ) : ?>

													<h2>K-Fold <?php echo $rs['kfold'] ?></h2>
													<!--begin: Datatable-->
													<table class="table table-stripe">
														<thead>
															<tr>
																<th title="Field #1">Text</th>
																<th title="Field #2">Actual</th>
																<th title="Field #3">Prediksi</th>
															</tr>
														</thead>
														<tbody>

															<?php foreach ( $rs['model'] AS $isi ) : ?>
																<tr>

																	<td><?php echo $isi['text'] ?></td>
																	<td><?php echo $isi['actual'] ?></td>
																	<td><?php echo $isi['predict'] ?></td>
																</tr>

															<?php endforeach; ?>


															
															
														</tbody>
													</table>
													<?php endforeach; ?>
												<?php endif;
														endif; ?>
												
											</div>
										</div>
										<!--end::Card-->
									</div>
								</div>
							</div>