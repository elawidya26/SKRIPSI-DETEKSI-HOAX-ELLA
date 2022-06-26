<div class="row">
<!-- isi preprocessing -->
	<div class="col-md-12">
		<div class="card mb-8">
			<div class="card-body">
				<div class="p-6">
					<h2 class="text-dark">Preprocesing</h2>
					<p class="mb-8">Bagaimana caranya preprocessing ini bisa berjalan ?</p>
					<div class="text-center">
						<img src="<?php echo base_url('assets/media/preprocessing.png') ?>" style="width: 800px">
						<small></small>
					</div>
					<!--begin::Accordion-->
					<div class="accordion accordion-light accordion-light-borderless accordion-svg-toggle"
						id="accordionExample7">
						<!--begin::Item-->
						<div class="card">
							<!--begin::Header-->
							<div class="card-header" id="headingOne7">
								<div class="card-title" data-toggle="collapse" data-target="#collapseOne7"
									aria-expanded="true" role="button">
									<span class="svg-icon svg-icon-primary">
										<!--begin::Svg Icon | path:/metronic/theme/html/demo12/dist/assets/media/svg/icons/Navigation/Angle-double-right.svg-->
										<svg xmlns="http://www.w3.org/2000/svg"
											xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px"
											viewBox="0 0 24 24" version="1.1">
											<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
												<polygon points="0 0 24 0 24 24 0 24" />
												<path
													d="M12.2928955,6.70710318 C11.9023712,6.31657888 11.9023712,5.68341391 12.2928955,5.29288961 C12.6834198,4.90236532 13.3165848,4.90236532 13.7071091,5.29288961 L19.7071091,11.2928896 C20.085688,11.6714686 20.0989336,12.281055 19.7371564,12.675721 L14.2371564,18.675721 C13.863964,19.08284 13.2313966,19.1103429 12.8242777,18.7371505 C12.4171587,18.3639581 12.3896557,17.7313908 12.7628481,17.3242718 L17.6158645,12.0300721 L12.2928955,6.70710318 Z"
													fill="#000000" fill-rule="nonzero" />
												<path
													d="M3.70710678,15.7071068 C3.31658249,16.0976311 2.68341751,16.0976311 2.29289322,15.7071068 C1.90236893,15.3165825 1.90236893,14.6834175 2.29289322,14.2928932 L8.29289322,8.29289322 C8.67147216,7.91431428 9.28105859,7.90106866 9.67572463,8.26284586 L15.6757246,13.7628459 C16.0828436,14.1360383 16.1103465,14.7686056 15.7371541,15.1757246 C15.3639617,15.5828436 14.7313944,15.6103465 14.3242754,15.2371541 L9.03007575,10.3841378 L3.70710678,15.7071068 Z"
													fill="#000000" fill-rule="nonzero" opacity="0.3"
													transform="translate(9.000003, 11.999999) rotate(-270.000000) translate(-9.000003, -11.999999)" />
											</g>
										</svg>
										<!--end::Svg Icon-->
									</span>
									<div class="card-label text-dark pl-4">Case Folding</div>
								</div>
							</div>
							<!--end::Header-->
							<!--begin::Body-->
							<div id="collapseOne7" class="collapse show" aria-labelledby="headingOne7"
								data-parent="#accordionExample7">
								<div class="card-body text-dark-50 font-size-lg pl-12">
									<div class="row">
										<div class="col-md-3">
											<?php echo acquisition() ?>
										</div>
										<div class="col-md-9">
											<div style="vertical-align: middle !important;">
											Case Folding adalah proses mengubah semua huruf pada teks menjadi huruf kecil supaya seragam. 
											Karakter selain huruf a-z dihilangkan dan dianggap delimiter.
											</div>

										</div>
									</div>
								</div>
							</div>
							<!--end::Body-->
						</div>
						<!--end::Item-->
						<!--begin::Item-->
						<div class="card">
							<!--begin::Header-->
							<div class="card-header" id="headingTwo7">
								<div class="card-title collapsed" data-toggle="collapse" data-target="#collapseTwo7"
									aria-expanded="true" role="button">
									<span class="svg-icon svg-icon-primary">
										<!--begin::Svg Icon | path:/metronic/theme/html/demo12/dist/assets/media/svg/icons/Navigation/Angle-double-right.svg-->
										<svg xmlns="http://www.w3.org/2000/svg"
											xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px"
											viewBox="0 0 24 24" version="1.1">
											<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
												<polygon points="0 0 24 0 24 24 0 24" />
												<path
													d="M12.2928955,6.70710318 C11.9023712,6.31657888 11.9023712,5.68341391 12.2928955,5.29288961 C12.6834198,4.90236532 13.3165848,4.90236532 13.7071091,5.29288961 L19.7071091,11.2928896 C20.085688,11.6714686 20.0989336,12.281055 19.7371564,12.675721 L14.2371564,18.675721 C13.863964,19.08284 13.2313966,19.1103429 12.8242777,18.7371505 C12.4171587,18.3639581 12.3896557,17.7313908 12.7628481,17.3242718 L17.6158645,12.0300721 L12.2928955,6.70710318 Z"
													fill="#000000" fill-rule="nonzero" />
												<path
													d="M3.70710678,15.7071068 C3.31658249,16.0976311 2.68341751,16.0976311 2.29289322,15.7071068 C1.90236893,15.3165825 1.90236893,14.6834175 2.29289322,14.2928932 L8.29289322,8.29289322 C8.67147216,7.91431428 9.28105859,7.90106866 9.67572463,8.26284586 L15.6757246,13.7628459 C16.0828436,14.1360383 16.1103465,14.7686056 15.7371541,15.1757246 C15.3639617,15.5828436 14.7313944,15.6103465 14.3242754,15.2371541 L9.03007575,10.3841378 L3.70710678,15.7071068 Z"
													fill="#000000" fill-rule="nonzero" opacity="0.3"
													transform="translate(9.000003, 11.999999) rotate(-270.000000) translate(-9.000003, -11.999999)" />
											</g>
										</svg>
										<!--end::Svg Icon-->
									</span>
									<div class="card-label text-dark pl-4">Normalization</div>
								</div>
							</div>
							<!--end::Header-->
							<!--begin::Body-->
							<!--begin::Body-->
							<div id="collapseTwo7" class="collapse show" aria-labelledby="headingTwo7"
								data-parent="#accordionExample7">
								<div class="card-body text-dark-50 font-size-lg pl-12">
									<div class="row">
										<div class="col-md-3">
											<?php echo acquisition() ?>
										</div>
										<div class="col-md-9">
											<div style="vertical-align: middle !important;">
											proses untuk penghapusan url, mention, hastag, tanda baca dan angka pada tweet agar dapat dibaca oleh komputer. 
											</div>

										</div>
									</div>
								</div>
							</div>
							<!--end::Body-->
							<!--end::Body-->
						</div>
						<!--end::Item-->
						<!--begin::Item-->
						<div class="card">
							<!--begin::Header-->
							<div class="card-header" id="headingThree7">
								<div class="card-title collapsed" data-toggle="collapse" data-target="#collapseThree7"
									aria-expanded="true" role="button">
									<span class="svg-icon svg-icon-primary">
										<!--begin::Svg Icon | path:/metronic/theme/html/demo12/dist/assets/media/svg/icons/Navigation/Angle-double-right.svg-->
										<svg xmlns="http://www.w3.org/2000/svg"
											xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px"
											viewBox="0 0 24 24" version="1.1">
											<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
												<polygon points="0 0 24 0 24 24 0 24" />
												<path
													d="M12.2928955,6.70710318 C11.9023712,6.31657888 11.9023712,5.68341391 12.2928955,5.29288961 C12.6834198,4.90236532 13.3165848,4.90236532 13.7071091,5.29288961 L19.7071091,11.2928896 C20.085688,11.6714686 20.0989336,12.281055 19.7371564,12.675721 L14.2371564,18.675721 C13.863964,19.08284 13.2313966,19.1103429 12.8242777,18.7371505 C12.4171587,18.3639581 12.3896557,17.7313908 12.7628481,17.3242718 L17.6158645,12.0300721 L12.2928955,6.70710318 Z"
													fill="#000000" fill-rule="nonzero" />
												<path
													d="M3.70710678,15.7071068 C3.31658249,16.0976311 2.68341751,16.0976311 2.29289322,15.7071068 C1.90236893,15.3165825 1.90236893,14.6834175 2.29289322,14.2928932 L8.29289322,8.29289322 C8.67147216,7.91431428 9.28105859,7.90106866 9.67572463,8.26284586 L15.6757246,13.7628459 C16.0828436,14.1360383 16.1103465,14.7686056 15.7371541,15.1757246 C15.3639617,15.5828436 14.7313944,15.6103465 14.3242754,15.2371541 L9.03007575,10.3841378 L3.70710678,15.7071068 Z"
													fill="#000000" fill-rule="nonzero" opacity="0.3"
													transform="translate(9.000003, 11.999999) rotate(-270.000000) translate(-9.000003, -11.999999)" />
											</g>
										</svg>
										<!--end::Svg Icon-->
									</span>
									<div class="card-label text-dark pl-4">Tokenizing</div>
								</div>
							</div>
							<!--end::Header-->
							<!--begin::Body-->
							<div id="collapseThree7" class="collapse show" aria-labelledby="headingThree7"
								data-parent="#accordionExample7">
								<div class="card-body text-dark-50 font-size-lg pl-12">
									<div class="row">
										<div class="col-md-3">
											<?php echo acquisition() ?>
										</div>
										<div class="col-md-9">
											<div style="vertical-align: middle !important;">
											Proses tokenizing adalah suatu pengolahan pemotongan string/kata dalam suatu kalimat dan seluruh tanda baca dan tanda hubung akan dihilangkan. 
											Proses ini bertujuan buat memisahkan tiap kata supaya bisa membedakan karakter-karakter tertentu yang diperlakukan menjadi pemisah kata atau bukan.
											Tokenizing bertujuan untuk memisahkan teks menjadi potongan kata – kata.
											</div>

										</div>
									</div>
								</div>
							</div>
							<!--end::Body-->
						</div>
						<!--end::Item-->
						<!--begin::Item-->
						<div class="card">
							<!--begin::Header-->
							<div class="card-header" id="headingFour7">
								<div class="card-title collapsed" data-toggle="collapse" data-target="#collapseFour7"
									aria-expanded="true" role="button">
									<span class="svg-icon svg-icon-primary">
										<!--begin::Svg Icon | path:/metronic/theme/html/demo12/dist/assets/media/svg/icons/Navigation/Angle-double-right.svg-->
										<svg xmlns="http://www.w3.org/2000/svg"
											xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px"
											viewBox="0 0 24 24" version="1.1">
											<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
												<polygon points="0 0 24 0 24 24 0 24" />
												<path
													d="M12.2928955,6.70710318 C11.9023712,6.31657888 11.9023712,5.68341391 12.2928955,5.29288961 C12.6834198,4.90236532 13.3165848,4.90236532 13.7071091,5.29288961 L19.7071091,11.2928896 C20.085688,11.6714686 20.0989336,12.281055 19.7371564,12.675721 L14.2371564,18.675721 C13.863964,19.08284 13.2313966,19.1103429 12.8242777,18.7371505 C12.4171587,18.3639581 12.3896557,17.7313908 12.7628481,17.3242718 L17.6158645,12.0300721 L12.2928955,6.70710318 Z"
													fill="#000000" fill-rule="nonzero" />
												<path
													d="M3.70710678,15.7071068 C3.31658249,16.0976311 2.68341751,16.0976311 2.29289322,15.7071068 C1.90236893,15.3165825 1.90236893,14.6834175 2.29289322,14.2928932 L8.29289322,8.29289322 C8.67147216,7.91431428 9.28105859,7.90106866 9.67572463,8.26284586 L15.6757246,13.7628459 C16.0828436,14.1360383 16.1103465,14.7686056 15.7371541,15.1757246 C15.3639617,15.5828436 14.7313944,15.6103465 14.3242754,15.2371541 L9.03007575,10.3841378 L3.70710678,15.7071068 Z"
													fill="#000000" fill-rule="nonzero" opacity="0.3"
													transform="translate(9.000003, 11.999999) rotate(-270.000000) translate(-9.000003, -11.999999)" />
											</g>
										</svg>
										<!--end::Svg Icon-->
									</span>
									<div class="card-label text-dark pl-4">Filtering</div>
								</div>
							</div>
							<!--end::Header-->
							<!--begin::Body-->
							<div id="collapseFour7" class="collapse show" aria-labelledby="headingFour7"
								data-parent="#accordionExample7">
								<div class="card-body text-dark-50 font-size-lg pl-12">
									<div class="row">
										<div class="col-md-3">
											<?php echo acquisition() ?>
										</div>
										<div class="col-md-9">
											<div style="vertical-align: middle !important;">
											proses pemilihan kata-kata penting atau proses membuang istilah-istilah yang tidak mempunyai makna, misalnya misalnya adalah “yang”, “apa”, “dengan”, dan lain se-bagainya. 
											Selanjutnya pada proses filtering masih ada menyimpan istilah yg dipercaya penting atau bisa masuk pada data yang digunakan sebagai perhitungan
												
											</div>

										</div>
									</div>
								</div>
							</div>
							<!--end::Body-->
						</div>
						<!--end::Item-->
						<!--begin::Item-->
						<div class="card">
							<!--begin::Header-->
							<div class="card-header" id="headingFive7">
								<div class="card-title collapsed" data-toggle="collapse" data-target="#collapseFive7"
									aria-expanded="true" role="button">
									<span class="svg-icon svg-icon-primary">
										<!--begin::Svg Icon | path:/metronic/theme/html/demo12/dist/assets/media/svg/icons/Navigation/Angle-double-right.svg-->
										<svg xmlns="http://www.w3.org/2000/svg"
											xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px"
											viewBox="0 0 24 24" version="1.1">
											<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
												<polygon points="0 0 24 0 24 24 0 24" />
												<path
													d="M12.2928955,6.70710318 C11.9023712,6.31657888 11.9023712,5.68341391 12.2928955,5.29288961 C12.6834198,4.90236532 13.3165848,4.90236532 13.7071091,5.29288961 L19.7071091,11.2928896 C20.085688,11.6714686 20.0989336,12.281055 19.7371564,12.675721 L14.2371564,18.675721 C13.863964,19.08284 13.2313966,19.1103429 12.8242777,18.7371505 C12.4171587,18.3639581 12.3896557,17.7313908 12.7628481,17.3242718 L17.6158645,12.0300721 L12.2928955,6.70710318 Z"
													fill="#000000" fill-rule="nonzero" />
												<path
													d="M3.70710678,15.7071068 C3.31658249,16.0976311 2.68341751,16.0976311 2.29289322,15.7071068 C1.90236893,15.3165825 1.90236893,14.6834175 2.29289322,14.2928932 L8.29289322,8.29289322 C8.67147216,7.91431428 9.28105859,7.90106866 9.67572463,8.26284586 L15.6757246,13.7628459 C16.0828436,14.1360383 16.1103465,14.7686056 15.7371541,15.1757246 C15.3639617,15.5828436 14.7313944,15.6103465 14.3242754,15.2371541 L9.03007575,10.3841378 L3.70710678,15.7071068 Z"
													fill="#000000" fill-rule="nonzero" opacity="0.3"
													transform="translate(9.000003, 11.999999) rotate(-270.000000) translate(-9.000003, -11.999999)" />
											</g>
										</svg>
										<!--end::Svg Icon-->
									</span>
									<div class="card-label text-dark pl-4">Stemming</div>
								</div>
							</div>
							<!--end::Header-->
							<!--begin::Body-->
							<div id="collapseFive7" class="collapse show" aria-labelledby="headingFive7"
								data-parent="#accordionExample7">
								<div class="card-body text-dark-50 font-size-lg pl-12">
									<div class="row">
										<div class="col-md-3">
											<?php echo acquisition() ?>
										</div>
										<div class="col-md-9">
											<div style="vertical-align: middle !important;">
											Teknik stemming dipakai untuk pengolahan mengambil kata dasar dari kata imbuhan. 
											Stemming mengambil kata dasar dari kata utuh yang meng-gabungkan banyak pengetahuan linguistik bergantung dalam ba-hasa yang dipakai. 
											</div>

										</div>
									</div>
								</div>
							</div>
							<!--end::Body-->
						</div>
						<!--end::Item-->
						
						
					</div>
					<!--end::Accordion-->
				</div>
			</div>
		</div>
	</div>



	<!-- isi metode -->
	<div class="col-md-12">
		<div class="card mb-8">
			<div class="card-body">
				<div class="p-6">
					<h2 class="text-dark">Metode</h2>
					<p class="mb-8">Bagaimana caranya metode penelitian ini bisa berjalan ?</p>
					<div class="text-center">
						<img src="<?php echo base_url('assets/media/metode.png') ?>" style="width: 800px">
						<small></small>
					</div>
					<!--begin::Accordion-->
					<div class="accordion accordion-light accordion-light-borderless accordion-svg-toggle"
						id="accordionExample7">
						<!--begin::Item-->
						<div class="card">
							<!--begin::Header-->
							<div class="card-header" id="headingOne7">
								<div class="card-title" data-toggle="collapse" data-target="#collapseOne7"
									aria-expanded="true" role="button">
									<span class="svg-icon svg-icon-primary">
										<!--begin::Svg Icon | path:/metronic/theme/html/demo12/dist/assets/media/svg/icons/Navigation/Angle-double-right.svg-->
										<svg xmlns="http://www.w3.org/2000/svg"
											xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px"
											viewBox="0 0 24 24" version="1.1">
											<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
												<polygon points="0 0 24 0 24 24 0 24" />
												<path
													d="M12.2928955,6.70710318 C11.9023712,6.31657888 11.9023712,5.68341391 12.2928955,5.29288961 C12.6834198,4.90236532 13.3165848,4.90236532 13.7071091,5.29288961 L19.7071091,11.2928896 C20.085688,11.6714686 20.0989336,12.281055 19.7371564,12.675721 L14.2371564,18.675721 C13.863964,19.08284 13.2313966,19.1103429 12.8242777,18.7371505 C12.4171587,18.3639581 12.3896557,17.7313908 12.7628481,17.3242718 L17.6158645,12.0300721 L12.2928955,6.70710318 Z"
													fill="#000000" fill-rule="nonzero" />
												<path
													d="M3.70710678,15.7071068 C3.31658249,16.0976311 2.68341751,16.0976311 2.29289322,15.7071068 C1.90236893,15.3165825 1.90236893,14.6834175 2.29289322,14.2928932 L8.29289322,8.29289322 C8.67147216,7.91431428 9.28105859,7.90106866 9.67572463,8.26284586 L15.6757246,13.7628459 C16.0828436,14.1360383 16.1103465,14.7686056 15.7371541,15.1757246 C15.3639617,15.5828436 14.7313944,15.6103465 14.3242754,15.2371541 L9.03007575,10.3841378 L3.70710678,15.7071068 Z"
													fill="#000000" fill-rule="nonzero" opacity="0.3"
													transform="translate(9.000003, 11.999999) rotate(-270.000000) translate(-9.000003, -11.999999)" />
											</g>
										</svg>
										<!--end::Svg Icon-->
									</span>
									<div class="card-label text-dark pl-4">Term Presence</div>
								</div>
							</div>
							<!--end::Header-->
							<!--begin::Body-->
							<div id="collapseOne7" class="collapse show" aria-labelledby="headingOne7"
								data-parent="#accordionExample7">
								<div class="card-body text-dark-50 font-size-lg pl-12">
									<div class="row">
										<div class="col-md-3">
											<?php echo acquisition() ?>
										</div>
										<div class="col-md-9">
											<div style="vertical-align: middle !important;">
												Term frequency (TF) adalah salah satu fitur pada pengelolahan teks.
												Untuk perhitungan TF dilakukan menggunakan menghitung jumlah atau
												frekuensi kemunculan yang ada di setiap kata pada sebuah dokumen.
												Pada perhitungan TF menggunakan salah satu jenis formula yaitu Bi-nary
												TF Biner.
												TF Biner berguna untuk memperhatikan kemunculan kata dengan memberi
												nilai 1 atau 0 tanpa mempedulikan jumlah kemunculan kata dalam dokumen.
											</div>

										</div>
									</div>
								</div>
							</div>
							<!--end::Body-->
						</div>
						<!--end::Item-->
						<!--begin::Item-->
						<div class="card">
							<!--begin::Header-->
							<div class="card-header" id="headingTwo7">
								<div class="card-title collapsed" data-toggle="collapse" data-target="#collapseTwo7"
									aria-expanded="true" role="button">
									<span class="svg-icon svg-icon-primary">
										<!--begin::Svg Icon | path:/metronic/theme/html/demo12/dist/assets/media/svg/icons/Navigation/Angle-double-right.svg-->
										<svg xmlns="http://www.w3.org/2000/svg"
											xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px"
											viewBox="0 0 24 24" version="1.1">
											<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
												<polygon points="0 0 24 0 24 24 0 24" />
												<path
													d="M12.2928955,6.70710318 C11.9023712,6.31657888 11.9023712,5.68341391 12.2928955,5.29288961 C12.6834198,4.90236532 13.3165848,4.90236532 13.7071091,5.29288961 L19.7071091,11.2928896 C20.085688,11.6714686 20.0989336,12.281055 19.7371564,12.675721 L14.2371564,18.675721 C13.863964,19.08284 13.2313966,19.1103429 12.8242777,18.7371505 C12.4171587,18.3639581 12.3896557,17.7313908 12.7628481,17.3242718 L17.6158645,12.0300721 L12.2928955,6.70710318 Z"
													fill="#000000" fill-rule="nonzero" />
												<path
													d="M3.70710678,15.7071068 C3.31658249,16.0976311 2.68341751,16.0976311 2.29289322,15.7071068 C1.90236893,15.3165825 1.90236893,14.6834175 2.29289322,14.2928932 L8.29289322,8.29289322 C8.67147216,7.91431428 9.28105859,7.90106866 9.67572463,8.26284586 L15.6757246,13.7628459 C16.0828436,14.1360383 16.1103465,14.7686056 15.7371541,15.1757246 C15.3639617,15.5828436 14.7313944,15.6103465 14.3242754,15.2371541 L9.03007575,10.3841378 L3.70710678,15.7071068 Z"
													fill="#000000" fill-rule="nonzero" opacity="0.3"
													transform="translate(9.000003, 11.999999) rotate(-270.000000) translate(-9.000003, -11.999999)" />
											</g>
										</svg>
										<!--end::Svg Icon-->
									</span>
									<div class="card-label text-dark pl-4">Bag Of Words</div>
								</div>
							</div>
							<!--end::Header-->
							<!--begin::Body-->
							<!--begin::Body-->
							<div id="collapseTwo7" class="collapse show" aria-labelledby="headingTwo7"
								data-parent="#accordionExample7">
								<div class="card-body text-dark-50 font-size-lg pl-12">
									<div class="row">
										<div class="col-md-3">
											<?php echo acquisition() ?>
										</div>
										<div class="col-md-9">
											<div style="vertical-align: middle !important;">
												Dalam masalah penjabaran teks, kata pada dokumen diberi bobot sesuai
												frekuensi pada dokumen & frekuensi pada antara dokumen berbeda.
												proses menghitung jumlah nilai 1 dan 0 pada tiap label yang sudah
												dihitung sebelumnya pada term presence.
											</div>

										</div>
									</div>
								</div>
							</div>
							<!--end::Body-->
							<!--end::Body-->
						</div>
						<!--end::Item-->
						<!--begin::Item-->
						<div class="card">
							<!--begin::Header-->
							<div class="card-header" id="headingThree7">
								<div class="card-title collapsed" data-toggle="collapse" data-target="#collapseThree7"
									aria-expanded="true" role="button">
									<span class="svg-icon svg-icon-primary">
										<!--begin::Svg Icon | path:/metronic/theme/html/demo12/dist/assets/media/svg/icons/Navigation/Angle-double-right.svg-->
										<svg xmlns="http://www.w3.org/2000/svg"
											xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px"
											viewBox="0 0 24 24" version="1.1">
											<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
												<polygon points="0 0 24 0 24 24 0 24" />
												<path
													d="M12.2928955,6.70710318 C11.9023712,6.31657888 11.9023712,5.68341391 12.2928955,5.29288961 C12.6834198,4.90236532 13.3165848,4.90236532 13.7071091,5.29288961 L19.7071091,11.2928896 C20.085688,11.6714686 20.0989336,12.281055 19.7371564,12.675721 L14.2371564,18.675721 C13.863964,19.08284 13.2313966,19.1103429 12.8242777,18.7371505 C12.4171587,18.3639581 12.3896557,17.7313908 12.7628481,17.3242718 L17.6158645,12.0300721 L12.2928955,6.70710318 Z"
													fill="#000000" fill-rule="nonzero" />
												<path
													d="M3.70710678,15.7071068 C3.31658249,16.0976311 2.68341751,16.0976311 2.29289322,15.7071068 C1.90236893,15.3165825 1.90236893,14.6834175 2.29289322,14.2928932 L8.29289322,8.29289322 C8.67147216,7.91431428 9.28105859,7.90106866 9.67572463,8.26284586 L15.6757246,13.7628459 C16.0828436,14.1360383 16.1103465,14.7686056 15.7371541,15.1757246 C15.3639617,15.5828436 14.7313944,15.6103465 14.3242754,15.2371541 L9.03007575,10.3841378 L3.70710678,15.7071068 Z"
													fill="#000000" fill-rule="nonzero" opacity="0.3"
													transform="translate(9.000003, 11.999999) rotate(-270.000000) translate(-9.000003, -11.999999)" />
											</g>
										</svg>
										<!--end::Svg Icon-->
									</span>
									<div class="card-label text-dark pl-4">Entropy</div>
								</div>
							</div>
							<!--end::Header-->
							<!--begin::Body-->
							<div id="collapseThree7" class="collapse show" aria-labelledby="headingThree7"
								data-parent="#accordionExample7">
								<div class="card-body text-dark-50 font-size-lg pl-12">
									<div class="row">
										<div class="col-md-3">
											<?php echo acquisition() ?>
										</div>
										<div class="col-md-9">
											<div style="vertical-align: middle !important;">
												Entropy digunakan untuk mengukur nilai ketidak mur-nian sekumpulan objek
												pada setiap cabang pada suatu atribut.<br>
												Rumus Entropy :

												<div class="text-center">
													<img src="<?php echo base_url('assets/media/entropy.png') ?>"
														style="width: 300px">
													<small></small>
												</div>


												Keterangan :
												C : Jumlah nilai yang ada pada atribut target ( jumlah kelas ) <br>
												Pi : Jumlah sampel kelas i

											</div>

										</div>
									</div>
								</div>
							</div>
							<!--end::Body-->
						</div>
						<!--end::Item-->
						<!--begin::Item-->
						<div class="card">
							<!--begin::Header-->
							<div class="card-header" id="headingFour7">
								<div class="card-title collapsed" data-toggle="collapse" data-target="#collapseFour7"
									aria-expanded="true" role="button">
									<span class="svg-icon svg-icon-primary">
										<!--begin::Svg Icon | path:/metronic/theme/html/demo12/dist/assets/media/svg/icons/Navigation/Angle-double-right.svg-->
										<svg xmlns="http://www.w3.org/2000/svg"
											xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px"
											viewBox="0 0 24 24" version="1.1">
											<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
												<polygon points="0 0 24 0 24 24 0 24" />
												<path
													d="M12.2928955,6.70710318 C11.9023712,6.31657888 11.9023712,5.68341391 12.2928955,5.29288961 C12.6834198,4.90236532 13.3165848,4.90236532 13.7071091,5.29288961 L19.7071091,11.2928896 C20.085688,11.6714686 20.0989336,12.281055 19.7371564,12.675721 L14.2371564,18.675721 C13.863964,19.08284 13.2313966,19.1103429 12.8242777,18.7371505 C12.4171587,18.3639581 12.3896557,17.7313908 12.7628481,17.3242718 L17.6158645,12.0300721 L12.2928955,6.70710318 Z"
													fill="#000000" fill-rule="nonzero" />
												<path
													d="M3.70710678,15.7071068 C3.31658249,16.0976311 2.68341751,16.0976311 2.29289322,15.7071068 C1.90236893,15.3165825 1.90236893,14.6834175 2.29289322,14.2928932 L8.29289322,8.29289322 C8.67147216,7.91431428 9.28105859,7.90106866 9.67572463,8.26284586 L15.6757246,13.7628459 C16.0828436,14.1360383 16.1103465,14.7686056 15.7371541,15.1757246 C15.3639617,15.5828436 14.7313944,15.6103465 14.3242754,15.2371541 L9.03007575,10.3841378 L3.70710678,15.7071068 Z"
													fill="#000000" fill-rule="nonzero" opacity="0.3"
													transform="translate(9.000003, 11.999999) rotate(-270.000000) translate(-9.000003, -11.999999)" />
											</g>
										</svg>
										<!--end::Svg Icon-->
									</span>
									<div class="card-label text-dark pl-4">Information Gain</div>
								</div>
							</div>
							<!--end::Header-->
							<!--begin::Body-->
							<div id="collapseFour7" class="collapse show" aria-labelledby="headingFour7"
								data-parent="#accordionExample7">
								<div class="card-body text-dark-50 font-size-lg pl-12">
									<div class="row">
										<div class="col-md-3">
											<?php echo acquisition() ?>
										</div>
										<div class="col-md-9">
											<div style="vertical-align: middle !important;">
												Information Gain adalah suatu teknik untuk mereduksi jumlah fitur yang
												sesuai atau relevan, kemudian mereduksi dimensi fitur dalam data yang
												akan dipakai.
												Information Gain bisa dipakai untuk membantu memilih peringkat fitur.
												Biasanya fitur menggunakan nilai Information Gain yang tinggi,
												wajib diberi peringkat lebih tinggi daripada fitur lainnya lantaran
												mempunyai kekuatan yang lebih kuat pada mengklasifikasikan data<br>
												Rumus Information Gain :


												<div class="text-center">
													<img src="<?php echo base_url('assets/media/informationgain.png') ?>"
														style="width: 300px">
													<small></small>
												</div>


												Keterangan :
												Dimana 𝐻(𝑆) adalah entropy dari kumpulan data yang diberikan dan 𝐴
												merupakan entropy dari subset ke-i yang dihasilkan dengan mempartisi 𝑆
												berdasarkan fitur 𝐴.

											</div>

										</div>
									</div>
								</div>
							</div>
							<!--end::Body-->
						</div>
						<!--end::Item-->
						<!--begin::Item-->
						<div class="card">
							<!--begin::Header-->
							<div class="card-header" id="headingFive7">
								<div class="card-title collapsed" data-toggle="collapse" data-target="#collapseFive7"
									aria-expanded="true" role="button">
									<span class="svg-icon svg-icon-primary">
										<!--begin::Svg Icon | path:/metronic/theme/html/demo12/dist/assets/media/svg/icons/Navigation/Angle-double-right.svg-->
										<svg xmlns="http://www.w3.org/2000/svg"
											xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px"
											viewBox="0 0 24 24" version="1.1">
											<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
												<polygon points="0 0 24 0 24 24 0 24" />
												<path
													d="M12.2928955,6.70710318 C11.9023712,6.31657888 11.9023712,5.68341391 12.2928955,5.29288961 C12.6834198,4.90236532 13.3165848,4.90236532 13.7071091,5.29288961 L19.7071091,11.2928896 C20.085688,11.6714686 20.0989336,12.281055 19.7371564,12.675721 L14.2371564,18.675721 C13.863964,19.08284 13.2313966,19.1103429 12.8242777,18.7371505 C12.4171587,18.3639581 12.3896557,17.7313908 12.7628481,17.3242718 L17.6158645,12.0300721 L12.2928955,6.70710318 Z"
													fill="#000000" fill-rule="nonzero" />
												<path
													d="M3.70710678,15.7071068 C3.31658249,16.0976311 2.68341751,16.0976311 2.29289322,15.7071068 C1.90236893,15.3165825 1.90236893,14.6834175 2.29289322,14.2928932 L8.29289322,8.29289322 C8.67147216,7.91431428 9.28105859,7.90106866 9.67572463,8.26284586 L15.6757246,13.7628459 C16.0828436,14.1360383 16.1103465,14.7686056 15.7371541,15.1757246 C15.3639617,15.5828436 14.7313944,15.6103465 14.3242754,15.2371541 L9.03007575,10.3841378 L3.70710678,15.7071068 Z"
													fill="#000000" fill-rule="nonzero" opacity="0.3"
													transform="translate(9.000003, 11.999999) rotate(-270.000000) translate(-9.000003, -11.999999)" />
											</g>
										</svg>
										<!--end::Svg Icon-->
									</span>
									<div class="card-label text-dark pl-4">Naive Bayes Multinomial</div>
								</div>
							</div>
							<!--end::Header-->
							<!--begin::Body-->
							<div id="collapseFive7" class="collapse show" aria-labelledby="headingFive7"
								data-parent="#accordionExample7">
								<div class="card-body text-dark-50 font-size-lg pl-12">
									<div class="row">
										<div class="col-md-3">
											<?php echo acquisition() ?>
										</div>
										<div class="col-md-9">
											<div style="vertical-align: middle !important;">
												merupakan tahap pengklasifikasian data uji.
												Metode ini memperhitungkan jumlah kata dalam dokumen dengan tidak
												mempertimbangkan konteks berita & urutan kata dalam dokumen.<br>
												Rumus Naive Bayes Multinomial :
												<br> 1. Untuk menentukan nilai probabilitas prior dari kelas c dapat
												dihitung dengan menggunakan rumus:
												<div class="text-center">
													<img src="<?php echo base_url('assets/media/naive1.png') ?>"
														style="width: 300px">
													<small></small>
												</div>
												<br> Keterangan :
												<br> N_c : jumlah kelas c pada seluruh dokumen.
												<br> 𝑁 : jumlah seluruh dokumen.

												<br> 2. Probabilitas kata ke – n pada kelas c dapat ditentukan dengan
												menggunakan teknik laplacian smoothing sebagai berikut :
												<div class="text-center">
													<img src="<?php echo base_url('assets/media/naive2.png') ?>"
														style="width: 300px">
													<small></small>
												</div>
												<br> Keterangan :
												<br> "count(" t_n c) : jumlah term 𝑡𝑛 yang ditemukan di seluruh data
												latih dengan kategori c. Ditambah dengan nilai 1 untuk menghindari nilai
												0.
												<br> 𝑐𝑜𝑢𝑛𝑡(𝑐) : jumlah term di seluruh data latih dengan kategori
												c.
												<br> 𝑉 : jumlah seluruh term pada data latih.

												<br> 3. Perkalian hasil maps.

												<div class="text-center">
													<img src="<?php echo base_url('assets/media/naive3.png') ?>"
														style="width: 500px">
													<small></small>
												</div>

												<br> Keterangan :
												<br> P_c : probabilitas prior dari kelas c
												<br> t_n : kata dokumen ke – n
												<br> 𝑃(𝑐|𝑡𝑒𝑟𝑚 𝑑𝑜𝑘𝑢𝑚𝑒𝑛 𝑑) : probabilitas suatu dokumen
												termasuk kelas c
												<br> P(t_(n|c) : probabilitas kata ke – n dengan diketahui kelas c


											</div>

										</div>
									</div>
								</div>
							</div>
							<!--end::Body-->
						</div>
						<!--end::Item-->
						<!--begin::Item-->
						<div class="card">
							<!--begin::Header-->
							<div class="card-header" id="headingSix7">
								<div class="card-title collapsed" data-toggle="collapse" data-target="#collapseSix7"
									aria-expanded="true" role="button">
									<span class="svg-icon svg-icon-primary">
										<!--begin::Svg Icon | path:/metronic/theme/html/demo12/dist/assets/media/svg/icons/Navigation/Angle-double-right.svg-->
										<svg xmlns="http://www.w3.org/2000/svg"
											xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px"
											viewBox="0 0 24 24" version="1.1">
											<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
												<polygon points="0 0 24 0 24 24 0 24" />
												<path
													d="M12.2928955,6.70710318 C11.9023712,6.31657888 11.9023712,5.68341391 12.2928955,5.29288961 C12.6834198,4.90236532 13.3165848,4.90236532 13.7071091,5.29288961 L19.7071091,11.2928896 C20.085688,11.6714686 20.0989336,12.281055 19.7371564,12.675721 L14.2371564,18.675721 C13.863964,19.08284 13.2313966,19.1103429 12.8242777,18.7371505 C12.4171587,18.3639581 12.3896557,17.7313908 12.7628481,17.3242718 L17.6158645,12.0300721 L12.2928955,6.70710318 Z"
													fill="#000000" fill-rule="nonzero" />
												<path
													d="M3.70710678,15.7071068 C3.31658249,16.0976311 2.68341751,16.0976311 2.29289322,15.7071068 C1.90236893,15.3165825 1.90236893,14.6834175 2.29289322,14.2928932 L8.29289322,8.29289322 C8.67147216,7.91431428 9.28105859,7.90106866 9.67572463,8.26284586 L15.6757246,13.7628459 C16.0828436,14.1360383 16.1103465,14.7686056 15.7371541,15.1757246 C15.3639617,15.5828436 14.7313944,15.6103465 14.3242754,15.2371541 L9.03007575,10.3841378 L3.70710678,15.7071068 Z"
													fill="#000000" fill-rule="nonzero" opacity="0.3"
													transform="translate(9.000003, 11.999999) rotate(-270.000000) translate(-9.000003, -11.999999)" />
											</g>
										</svg>
										<!--end::Svg Icon-->
									</span>
									<div class="card-label text-dark pl-4">K-Fold Cross Validation</div>
								</div>
							</div>
							<!--end::Header-->
							<!--begin::Body-->
							<div id="collapseSix7" class="collapse show" aria-labelledby="headingSix7"
								data-parent="#accordionExample7">
								<div class="card-body text-dark-50 font-size-lg pl-12">
									<div class="row">
										<div class="col-md-3">
											<?php echo acquisition() ?>
										</div>
										<div class="col-md-9">
											<div style="vertical-align: middle !important;">
												Cross validation adalah suatu metode tambahan dari teknik data mining
												yang bertujuan untuk memperoleh hasil akurasi yang maksimal.
												Metode ini sering juga disebut dengan k-fold cross validation dimana
												percobaan sebanyak k kali untuk satu model dengan parameter yang
												sama.<br> Fungsi :
												<br>1. Untuk mengetahui performa dari suatu model algoritma dengan
												melakukan percobaan sebanyak k kali
												<br>2. Untuk menningkatkan tingkat performansi dari model tersebut
												<br>3. Untuk mengolah data set dengan kelas yang seimbang


												<div class="text-center">
													<img src="<?php echo base_url('assets/media/validasi.png') ?>"
														style="width: 500px">
													<small></small>
												</div>

											</div>

										</div>
									</div>
								</div>
							</div>
							<!--end::Body-->
						</div>
						<!--end::Item-->
						<!--begin::Item-->
						<div class="card">
							<!--begin::Header-->
							<div class="card-header" id="headingSeven7">
								<div class="card-title collapsed" data-toggle="collapse" data-target="#collapseSeven7"
									aria-expanded="true" role="button">
									<span class="svg-icon svg-icon-primary">
										<!--begin::Svg Icon | path:/metronic/theme/html/demo12/dist/assets/media/svg/icons/Navigation/Angle-double-right.svg-->
										<svg xmlns="http://www.w3.org/2000/svg"
											xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px"
											viewBox="0 0 24 24" version="1.1">
											<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
												<polygon points="0 0 24 0 24 24 0 24" />
												<path
													d="M12.2928955,6.70710318 C11.9023712,6.31657888 11.9023712,5.68341391 12.2928955,5.29288961 C12.6834198,4.90236532 13.3165848,4.90236532 13.7071091,5.29288961 L19.7071091,11.2928896 C20.085688,11.6714686 20.0989336,12.281055 19.7371564,12.675721 L14.2371564,18.675721 C13.863964,19.08284 13.2313966,19.1103429 12.8242777,18.7371505 C12.4171587,18.3639581 12.3896557,17.7313908 12.7628481,17.3242718 L17.6158645,12.0300721 L12.2928955,6.70710318 Z"
													fill="#000000" fill-rule="nonzero" />
												<path
													d="M3.70710678,15.7071068 C3.31658249,16.0976311 2.68341751,16.0976311 2.29289322,15.7071068 C1.90236893,15.3165825 1.90236893,14.6834175 2.29289322,14.2928932 L8.29289322,8.29289322 C8.67147216,7.91431428 9.28105859,7.90106866 9.67572463,8.26284586 L15.6757246,13.7628459 C16.0828436,14.1360383 16.1103465,14.7686056 15.7371541,15.1757246 C15.3639617,15.5828436 14.7313944,15.6103465 14.3242754,15.2371541 L9.03007575,10.3841378 L3.70710678,15.7071068 Z"
													fill="#000000" fill-rule="nonzero" opacity="0.3"
													transform="translate(9.000003, 11.999999) rotate(-270.000000) translate(-9.000003, -11.999999)" />
											</g>
										</svg>
										<!--end::Svg Icon-->
									</span>
									<div class="card-label text-dark pl-4">Confusion Matrix</div>
								</div>
							</div>
							<!--end::Header-->
							<!--begin::Body-->
							<div id="collapseSeven7" class="collapse show" aria-labelledby="headingSeven7"
								data-parent="#accordionExample7">
								<div class="card-body text-dark-50 font-size-lg pl-12">
									<div class="row">
										<div class="col-md-3">
											<?php echo acquisition() ?>
										</div>
										<div class="col-md-9">
											<div style="vertical-align: middle !important;">
												Confusion Matrix merupakan tahap analisis & penilaian terhadap
												performansi sistem yang dirancang.
												Performansi diukur menggunakan nilai akurasi, precision, & recall.
												Confusion matrix merupakan suatu metode yang dipakai untuk melakukan
												perhitungan akurasi dalam konsep data mining.

												<div class="text-center">
													<img src="<?php echo base_url('assets/media/confusion1.png') ?>"
														style="width: 500px">
													<small></small>
												</div>

											</div>

										</div>
									</div>
								</div>
							</div>
							<!--end::Body-->
						</div>
						<!--end::Item-->
					</div>
					<!--end::Accordion-->
				</div>
			</div>
		</div>
	</div>
</div>







<?php

    function acquisition() {

        return '<svg style="width: 200px" xmlns="http://www.w3.org/2000/svg" data-name="Layer 1" viewBox="0 0 717.67004 544.56279" xmlns:xlink="http://www.w3.org/1999/xlink"><path d="M528.35053,230.24577c-8.74377,15.063,7.72065,40.4432-8.87275,45.71354l1.367-1.367c10.0162-12.32036-10.919-38.397-.90274-50.71737a30.10219,30.10219,0,0,0,3.97967-5.91559" transform="translate(-241.16498 -177.71861)" fill="#2f2e41"/><path d="M610.23656,451.23117a10.49546,10.49546,0,0,0-10.19069-12.456L578.43258,375.982l-11.96325,15.2489L589.321,449.904a10.55234,10.55234,0,0,0,20.91553,1.32714Z" transform="translate(-241.16498 -177.71861)" fill="#ffb8b8"/><path d="M515.23087,299.62387s-.67244-22.7304,19.65389-9.70908S599.46694,424.9139,599.46694,424.9139l-22.0235,11.9154L527.44685,325.20578Z" transform="translate(-241.16498 -177.71861)" fill="#6c63ff"/><polygon points="334.034 511.488 323.884 515.825 302.324 478.74 317.305 472.338 334.034 511.488" fill="#ffb6b6"/><path d="M588.0705,704.50277l-7.27882,3.11037-4.2358-6.31688-.391,8.294-19.30517,8.24944a4.71923,4.71923,0,0,1-5.84632-6.857l10.86679-17.235-2.96876-6.94743,16.62909-5.96133Z" transform="translate(-241.16498 -177.71861)" fill="#2f2e41"/><polygon points="174.924 524.067 163.9 523.528 160.731 480.749 177.003 481.544 174.924 524.067" fill="#ffb6b6"/><path d="M420.97453,721.17129l-7.9061-.38639-1.0464-7.53326-3.9791,7.28765-20.96886-1.0248a4.71924,4.71924,0,0,1-2.25849-8.72338l17.3103-10.74639.3688-7.54615,17.56156,1.91205Z" transform="translate(-241.16498 -177.71861)" fill="#2f2e41"/><path d="M740.917,694.96942a3.56386,3.56386,0,0,0,2.52393-6.20136c-.09328-.35631-.1602-.61214-.25341-.9685a9.57475,9.57475,0,0,1,17.74853-.33644c4.31772,9.84579,9.88142,20.02805,7.26661,30.94266,17.594-38.22733,11.03667-85.50773-15.81028-117.80021-7.37364-3.97084-13.38731-11.09312-15.01445-19.41415,3.642,1.19546,8.14-1.80049,5.37412-5.59841-1.197-1.45023-2.40544-2.88879-3.60237-4.33908,13.65013-14.81754,30.30051,8.10753,15.31045,28.074a114.26429,114.26429,0,0,1,13.024,19.95055,48.04331,48.04331,0,0,1,2.65565-22.34155c2.68222-6.64886,7.77474-12.27553,12.25158-18.044,5.443-7.02861,16.81306-3.91815,17.6387,4.92755-5.06867,1.71965-5.65929,9.07055.16646,10.02036-1.36654,16.48349-11.98172,31.72082-26.73177,39.08465a114.70968,114.70968,0,0,1,6.72483,47.88518c2.43494-19.011,22.77131-23.8125,36.94436-31.49419a5.54912,5.54912,0,0,1,8.516,5.53977,32.05186,32.05186,0,0,0-5.58948,3.01718,4.84411,4.84411,0,0,0,2.33454,8.8211c-7.01111,17.83933-25.46154,29.94946-44.52854,30.06384a117.92872,117.92872,0,0,1-7.70134,23.201l-28.29843.26948c-.10449-.31345-.19885-.63723-.29316-.95078a32.15277,32.15277,0,0,0,7.82585-.5411c-7.00816-8.139-12.40748-12.27406-8.48327-23.76706Z" transform="translate(-241.16498 -177.71861)" fill="#f2f2f2"/><path d="M443.93871,423.70394s-22.419,61.09728-22.78123,67.93447-6.75591,93.29728-12.11811,98.3209-21.75591,82.90815-9,89,53-4,53-4l14-92,4.75591-70.48371s14.4788,165.97637,40.7394,165.48819,58.2606-10.48819,58.2606-10.48819L534.03937,566.95931s.51968-118.99873-8-143S443.93871,423.70394,443.93871,423.70394Z" transform="translate(-241.16498 -177.71861)" fill="#2f2e41"/><path d="M510.46306,266.29342l-30.02424,2.75011-4.8369,14.84778s-25.12627,13.799-19.56255,20.068-1.24409,48.51629-1.24409,48.51629l1.53763,34.29291s-1.65173,23.75888-6.59468,29.233-17.87482,18.89736-8.73744,12.47537c32.03858-22.51755,88.03858-3.51755,88.03858-3.51755l-8-49s18.171-80.2247,11-87-13.937-7.63165-13.937-7.63165Z" transform="translate(-241.16498 -177.71861)" fill="#6c63ff"/><path d="M352.699,421.72134a10.49547,10.49547,0,0,0,7.899-14.02168l50.6395-42.96233-18.55467-5.60111L346.3317,401.75441a10.55234,10.55234,0,0,0,6.3673,19.96693Z" transform="translate(-241.16498 -177.71861)" fill="#ffb8b8"/><path d="M481.30457,309.34381s9.9774-20.43464-13.90837-16.944-114.46472,96.40252-114.46472,96.40252L368.09,408.733l91.544-81.11205Z" transform="translate(-241.16498 -177.71861)" fill="#6c63ff"/><path d="M442.4072,274.68222,347.70481,396.00816a10.08064,10.08064,0,0,0,1.74093,14.12657c21.99237,53.3988,87.78748,92.9964,165.1861,128.938a10.07423,10.07423,0,0,0,14.12658-1.741l94.70239-121.32594a10.07419,10.07419,0,0,0-1.741-14.12659c-64.952-36.67587-120.77823-79.16815-165.1861-128.93795A10.0806,10.0806,0,0,0,442.4072,274.68222Z" transform="translate(-241.16498 -177.71861)" fill="#e6e6e6"/><path d="M616.814,413.24549l-28.82644,36.93038a107.91279,107.91279,0,0,1-151.02282,18.612L356.18,405.73035a5.73345,5.73345,0,0,1-.99832-8.03743l91.51114-117.23753a5.73348,5.73348,0,0,1,8.03933-.983c40.86527,52.76917,95.56689,93.83378,161.09216,125.74238A5.728,5.728,0,0,1,616.814,413.24549Z" transform="translate(-241.16498 -177.71861)" fill="#fff"/><path d="M440.518,340.91459,421.74459,364.9657a3.05106,3.05106,0,0,1-4.81022-3.75468l18.77338-24.05111a3.05106,3.05106,0,1,1,4.81022,3.75468Z" transform="translate(-241.16498 -177.71861)" fill="#ccc"/><path d="M475.73121,323.07417l-41.22784,52.81817a3.05106,3.05106,0,0,1-4.81023-3.75468L470.921,319.3195a3.05106,3.05106,0,1,1,4.81022,3.75467Z" transform="translate(-241.16498 -177.71861)" fill="#ccc"/><circle cx="164.25091" cy="213.35969" r="20.09591" fill="#6c63ff"/><path d="M477.92013,364.8182l-50.63607,64.87132a3.07083,3.07083,0,0,1-4.81022-3.75468l50.63607-64.87131a3.07083,3.07083,0,0,1,4.81022,3.75467Z" transform="translate(-241.16498 -177.71861)" fill="#ccc"/><path d="M510.7689,350.007l-70.67559,90.54451a3.07083,3.07083,0,0,1-4.81022-3.75468l70.67558-90.5445a3.07083,3.07083,0,0,1,4.81023,3.75467Z" transform="translate(-241.16498 -177.71861)" fill="#ccc"/><path d="M510.5235,390.26715l-50.63607,64.87132a3.07083,3.07083,0,0,1-4.81022-3.75468l50.63607-64.87131a3.07083,3.07083,0,0,1,4.81022,3.75467Z" transform="translate(-241.16498 -177.71861)" fill="#ccc"/><path d="M577.5235,398.26715l-50.63607,64.87132a3.07083,3.07083,0,0,1-4.81022-3.75468l50.63607-64.87131a3.07083,3.07083,0,0,1,4.81022,3.75467Z" transform="translate(-241.16498 -177.71861)" fill="#6c63ff"/><path d="M543.37227,375.45593l-70.67559,90.54451a3.07083,3.07083,0,0,1-4.81022-3.75468l70.67559-90.5445a3.07083,3.07083,0,0,1,4.81022,3.75467Z" transform="translate(-241.16498 -177.71861)" fill="#ccc"/><path d="M460.1263,227.96223A29.82287,29.82287,0,1,0,511.42163,207.277l-.14314-.143c-.2386-.25061-.4772-.50107-.72774-.73974a.01167.01167,0,0,1-.01186-.01194c-.31017-.28629-.62034-.57258-.94245-.84693a29.815,29.815,0,0,0-49.47014,22.42686Z" transform="translate(-241.16498 -177.71861)" fill="#2f2e41"/><circle cx="256.13166" cy="57.14378" r="25.00775" fill="#ffb8b8"/><path d="M470.637,241.52685c-2.44434-11.01562,1.08886-23.35693,8.792-30.71093a28.19911,28.19911,0,0,1,29.44824-5.708c.62891.2539,1.25781.53174,1.875.82177l.28711.13526v.042c.05566.03857.11133.0791.167.12012a.95727.95727,0,0,0,.41309.228,15.4171,15.4171,0,0,1,11.63379,4.8496c3.876,4.20557,5.70117,11.002,5.1416,19.13721l-.01758.2544-.2168.13525a85.4635,85.4635,0,0,1-9.11816,5.02734c-10.97852,5.16211-21.001,6.11866-30.63379,2.92041l-.17676-.05859-4.043-6.77588c-.83007,4.67334-.38671,20.17465-5.14941,21.01449l-8.29883-10.96517Z" transform="translate(-241.16498 -177.71861)" fill="#2f2e41"/><path d="M417.994,263.30087c8.51008-4.39247-2.43482-20.33442-.23553-29.65523,2.19936-9.32082,18.037-12.31871,19.04593-21.84222s3.38245-19.346,9.6668-26.5725c4.01568-4.61773,9.93278-8.02669,16.02491-7.44829a14.40869,14.40869,0,0,1,12.62827,17.79208c1.73454-2.45776,6.22341-1.92509,7.33449.87052.98788,2.48528-1.19437,5.49567-3.76252,5.71556-3.36046,4.15-7.2086,8.55427-12.47325,9.39143a5.6806,5.6806,0,0,1-4.84076-1.11733c-1.23856-1.18942-1.33489-3.56739.13434-4.45625-6.61615,2.62814-10.49509,9.78155-11.47678,16.83259-.98162,7.051.3765,14.18523,1.27147,21.24777s1.28058,14.492-1.48859,21.05046c-3.27178,7.74885-10.80453,13.30263-19.02519,15.0837s-16.97551.04034-24.41659-3.88148c-7.44108-3.92212-13.64622-9.90941-18.71523-16.62188C396.39747,265.89,408.47784,268.21276,417.994,263.30087Z" transform="translate(-241.16498 -177.71861)" fill="#2f2e41"/><path d="M485.35053,233.24577c-8.74377,15.063,7.72065,40.4432-8.87275,45.71354l1.367-1.367c10.0162-12.32036-10.919-38.397-.90274-50.71737a30.10219,30.10219,0,0,0,3.97967-5.91559" transform="translate(-241.16498 -177.71861)" fill="#2f2e41"/><path d="M471.80491,241.29893s7.408-27.65168,39.16341-34.03389c.03575-.01179.15508-.05956.31017-.13106.09538-.0597.21471-.1194.334-.179-.35786-.20285-.70378-.38167-1.06172-.56078a.01167.01167,0,0,1-.01186-.01194c-.31017-.28629-.62034-.57258-.94245-.84693l-.90663.03583S476.82711,200.52519,471.80491,241.29893Z" transform="translate(-241.16498 -177.71861)" fill="#fd6584"/><path d="M241.165,721.09139a1.18646,1.18646,0,0,0,1.19006,1.19h715.29a1.19,1.19,0,0,0,0-2.38H242.355A1.18651,1.18651,0,0,0,241.165,721.09139Z" transform="translate(-241.16498 -177.71861)" fill="#ccc"/></svg>';
    }

?>
