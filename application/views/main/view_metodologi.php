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

<?php

    function acquisition1() {

        return '
		<svg style="width: 200px" xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 524.67004 627.58314" xmlns:xlink="http://www.w3.org/1999/xlink"><path d="M369.04619,148.0378h51.762v17.04364c0,28.5682-23.19375,51.76195-51.76195,51.76195h-.00005v-68.80558h0Z" transform="translate(789.85437 364.88118) rotate(-180)" fill="#2f2e41"/><polygon points="409.33502 185.02664 418.23482 225.05637 366.08305 216.39672 387.33502 178.53845 409.33502 185.02664" fill="#a0616a"/><polygon points="409.33502 185.02664 418.23482 225.05637 366.08305 216.39672 387.33502 178.53845 409.33502 185.02664" opacity=".1"/><rect x="359.33502" y="270.53845" width="50" height="74" transform="translate(768.67004 615.07691) rotate(-180)" fill="#a0616a"/><path d="M441.83502,405.03845l-11,59s7,41-14,83l-14,43-21-3s13-32,13-46c0-14,3-68,3-68l-1.5-61.61811,45.5-6.38189Z" fill="#2f2e41"/><path d="M378.83502,586.03845s24-9,26,4l-1,6s9,27-4,29c-13,2-25,5-26-1-1-6-.98425-13.48966,1.50787-18.74483,2.49213-5.25517,3.49213-19.25517,3.49213-19.25517Z" fill="#2f2e41"/><g><path d="M366.13446,395.88629l-5.84242,59.73162s-18.12633,37.43576-9.63539,83.61913l1.48898,45.19716,21.00587,2.95865s-3.58764-34.353,.30589-47.80069c3.89353-13.44769,16.0298-66.15169,16.0298-66.15169l18.5774-58.77007-41.93013-18.7841Z" fill="#2f2e41"/><path d="M376.31126,587.26662s-20.5502-15.31957-26.08672-3.38865l-.70811,6.04141s-16.1539,23.43185-4.22298,28.96837c11.93092,5.53652,22.62319,11.75548,25.25239,6.2703,2.62921-5.48519,4.69702-12.68375,3.76473-18.42469-.9323-5.74094,2.00069-19.46674,2.00069-19.46674Z" fill="#2f2e41"/></g><path d="M429.83502,310.53845c23.51917,21.94757,25.26404,56.67346,11.5,98,0,0-44,30-76-8l-16-77,80.5-13Z" fill="#2f2e41"/><path d="M390.33502,203.53845l25,4-2,63,28,56-36,18s-28-53-33-86c-5-33-2-57-2-57l20,2Z" fill="#6c63ff"/><path d="M371.33502,205.53845l-25,4,2,63-6,58,14,16s28-53,33-86,2-57,2-57l-20,2Z" fill="#6c63ff"/><path d="M401.33502,207.03845l5.5-1.5s19.5-2.5,22.5,5.5c3,8,2,55,2,55,0,0,5.16,57.68504-14.92,58.34252-20.08,.65748-16.08-47.34252-16.08-47.34252l1-70Z" fill="#6c63ff"/><circle cx="400.60838" cy="170.13134" r="25.881" fill="#a0616a"/><path d="M368.33502,209.03845l-5.5-1.5s-19.5-2.5-22.5,5.5-2,55-2,55c0,0-5.16,57.68504,14.92,58.34252s16.08-47.34252,16.08-47.34252l-1-70Z" fill="#6c63ff"/><path d="M385.65786,205.75047c-5.55216-1.40863-11.84681,4.52132-14.06128,13.24853-.93243,3.47409-1.01931,7.12088-.2534,10.63535l-2.38571,9.92043-.17551-.00924-18.81824,44.34887c-4.37547,10.31165-3.91314,22.14968,1.66767,31.86201,3.3199,5.77765,7.67792,9.66177,12.79497,5.69682,8.49085-6.57912,14.03686-44.24916,16.56905-65.88826l5.85496-21.9959c2.35018-2.72464,4.01347-5.97257,4.85067-9.47191,2.2149-8.72385-.49107-16.93801-6.04318-18.34671Z" fill="#a0616a"/><path d="M351.0597,191.06934c1.31647-4.00284,3.91522-7.50723,5.07796-11.55742,1.54386-5.37763,4.83076,6.55243,5.15143,.96678,.60951-10.61668,16.81288-37.92626,26.06316-43.17205,9.25028-5.24583,14.56315-3.66417,23.98727,1.26249,0,0,4.57463,.29093,10.26981,3.10267,5.69518,2.81174,10.82161,7.31486,13.03674,13.26749,1.7558,4.7183,1.56147,9.89986,2.14813,14.89992,1.63436,13.92994,9.44292,27.17801,7.76691,41.10298-.52286,4.3445-2.17418,8.83707-5.72639,11.39244-3.55221,2.55534-9.29104,2.27736-11.62924-1.42142-.79788-1.26218-1.13531-2.75965-1.81906-4.08713-.6838-1.32748-1.91931-2.56501-3.41201-2.5237-2.2436,.06211-3.38562,3.07261-2.5009,5.13537s2.96377,3.30817,4.91583,4.41597c-4.6491,2.0915-10.41629,1.44022-14.48185-1.63548-4.06552-3.0757-6.26097-8.44832-5.51283-13.49099,1.05424-7.10612,11.4065-5.63531,12.62603-12.71492,.88773-5.15371,4.00542-13.77714,3.15622-18.93732-.8492-5.16022-4.92762,1.08784-.63124-1.89373-4.72678,2.27867-14.83731-13.30983-19.78567-15.05584-4.94831-1.74601-9.14394-5.5267-11.39402-10.26715-5.24845,7.60821-9.86523,5.54211-11.7449,14.59185-1.87967,9.04974-.14171,29.60975,7.598,34.66228-3.09743,2.11334-5.56661,5.13552-7.01993,8.59211-.82334,1.95819-1.35711,4.10081-2.72366,5.72716-2.60993,3.10617-7.4291,3.29511-11.27027,1.98909-4.76288-1.61941-8.83514-5.17625-11.08048-9.67806-2.24534-4.50181-2.63675-9.89451-1.06507-14.67338Z" fill="#2f2e41"/><path d="M0,626.13577c0,.66003,.53003,1.19,1.19006,1.19H523.48004c.65997,0,1.19-.52997,1.19-1.19,0-.65997-.53003-1.19-1.19-1.19H1.19006c-.66003,0-1.19006,.53003-1.19006,1.19Z" fill="#3f3d56"/><g><path d="M340.03771,.99983H134.36885c-23.32296,0-42.22995,18.90699-42.22995,42.22995V583.66267c0,23.32291,18.90695,42.22986,42.22986,42.22986h205.66894c23.32296,0,42.22995-18.90699,42.22995-42.22995V43.22978c0-23.32296-18.90699-42.22995-42.22995-42.22995Z" fill="#fff"/><path d="M340.03782,626.89209H134.36888c-23.83691,0-43.22998-19.39258-43.22998-43.22949V43.22998C91.1389,19.39307,110.53196,0,134.36888,0h205.66895c23.83691,0,43.22998,19.39307,43.22998,43.22998V583.6626c0,23.83691-19.39307,43.22949-43.22998,43.22949ZM134.36888,2c-22.73438,0-41.22998,18.49561-41.22998,41.22998V583.6626c0,22.73438,18.49561,41.22949,41.22998,41.22949h205.66895c22.73438,0,41.22998-18.49512,41.22998-41.22949V43.22998c0-22.73438-18.49561-41.22998-41.22998-41.22998H134.36888Z" fill="#3f3d56"/><path d="M75.14368,94.56643c-1.80561,0-3.27392,1.46831-3.27392,3.27392v26.1914c0,1.80561,1.46831,3.27392,3.27392,3.27392s3.27392-1.46831,3.27392-3.27392v-26.1914c0-1.80561-1.46831-3.27392-3.27392-3.27392Z" fill="#3f3d56"/><path d="M354.93558,87.46124h-82.66786c-3.50634,0-6.35907-2.85273-6.35907-6.35907s2.85273-6.35907,6.35907-6.35907h82.66786c3.50634,0,6.35907,2.85273,6.35907,6.35907s-2.85273,6.35907-6.35907,6.35907Z" fill="#e6e6e6"/><path d="M277.38221,137.46854h-80.3571c-2.02587,0-3.67427-1.64841-3.67427-3.67428s1.64841-3.67351,3.67427-3.67351h80.3571c2.02587,0,3.67351,1.64765,3.67351,3.67351,0,2.02587-1.64764,3.67427-3.67351,3.67427Z" fill="#6c63ff"/><ellipse cx="78.32235" cy="92.07002" rx="64.899" ry="63.53157" fill="#6c63ff"/><path d="M100.34912,60.02429c-8.64008,15.73267-17.28021,31.46545-25.92029,47.19818-5.50665-9.72955-10.98322-19.47626-16.50342-29.19818-1.90643-3.3576-7.09204-.33765-5.18079,3.02832,6.39911,11.2699,12.73193,22.57727,19.13104,33.84717,1.09412,1.92694,4.09796,1.97168,5.18085,0,9.49115-17.28241,18.9823-34.56482,28.47345-51.84717,1.8598-3.38647-3.31964-6.41742-5.18085-3.02832Z" fill="#fff"/><rect x="117.61763" y="14.65784" width="46.49807" height="5.96129" rx=".31021" ry=".31021" fill="#e6e6e6"/><circle cx="318.33631" cy="15.8501" r="4.76903" fill="#e6e6e6"/><circle cx="331.45115" cy="15.8501" r="4.76903" fill="#e6e6e6"/><circle cx="344.56599" cy="15.8501" r="4.76903" fill="#e6e6e6"/><path d="M133.86826,157.13577c0,.66003,.53003,1.19,1.19006,1.19h204.28998c.65997,0,1.19-.52997,1.19-1.19,0-.65997-.53003-1.19-1.19-1.19H135.05832c-.66003,0-1.19006,.53003-1.19006,1.19Z" fill="#3f3d56"/><g><path d="M319.7578,250.66658h-122.59803c-2.02587,0-3.67427-1.64842-3.67427-3.67428s1.64841-3.67351,3.67427-3.67351h122.59803c2.02587,0,3.67351,1.64765,3.67351,3.67352,0,2.02587-1.64764,3.67427-3.67351,3.67427Z" fill="#6c63ff"/><path d="M319.7578,303.66658h-122.59803c-2.02587,0-3.67427-1.64842-3.67427-3.67428s1.64841-3.67351,3.67427-3.67351h122.59803c2.02587,0,3.67351,1.64765,3.67351,3.67352,0,2.02587-1.64764,3.67427-3.67351,3.67427Z" fill="#6c63ff"/><path d="M319.7578,356.66658h-122.59803c-2.02587,0-3.67427-1.64842-3.67427-3.67428s1.64841-3.67351,3.67427-3.67351h122.59803c2.02587,0,3.67351,1.64765,3.67351,3.67352,0,2.02587-1.64764,3.67427-3.67351,3.67427Z" fill="#6c63ff"/><circle cx="159.97525" cy="246.53845" r="9" fill="#6c63ff"/><path d="M158.97516,261.53845v-2c7.44385,0,13.5-6.05615,13.5-13.5s-6.05615-13.5-13.5-13.5v-2c8.54688,0,15.5,6.95312,15.5,15.5s-6.95312,15.5-15.5,15.5Z" fill="#3f3d56"/><circle cx="159.97525" cy="299.53845" r="9" fill="#6c63ff"/><path d="M158.97516,314.53845v-2c7.44385,0,13.5-6.05566,13.5-13.5,0-7.44385-6.05615-13.5-13.5-13.5v-2c8.54688,0,15.5,6.95312,15.5,15.5s-6.95312,15.5-15.5,15.5Z" fill="#3f3d56"/><circle cx="159.97525" cy="352.53845" r="9" fill="#6c63ff"/><path d="M158.97516,367.53845v-2c7.44385,0,13.5-6.05566,13.5-13.5s-6.05615-13.5-13.5-13.5v-2c8.54688,0,15.5,6.95312,15.5,15.5s-6.95312,15.5-15.5,15.5Z" fill="#3f3d56"/></g></g><path d="M384.01219,203.75047c5.55216-1.40863,11.84681,4.52132,14.06128,13.24853,.93243,3.47409,1.01931,7.12088,.2534,10.63535l2.38571,9.92043,.17551-.00924,18.81824,44.34887c4.37547,10.31165,3.91314,22.14968-1.66767,31.86201-3.3199,5.77765-7.67792,9.66177-12.79497,5.69682-8.49085-6.57912-14.03686-44.24916-16.56905-65.88826l-5.85496-21.9959c-2.35018-2.72464-4.01347-5.97257-4.85067-9.47191-2.2149-8.72385,.49107-16.93801,6.04318-18.34671Z" fill="#a0616a"/><polygon points="405.38874 228.05282 384.33502 243.01874 394.86188 309.31266 408.0646 326.38767 423.44391 321.0686 427.94066 289.72998 422.64886 259.42289 405.38874 228.05282" fill="#6c63ff"/></svg>';
    }

?>
