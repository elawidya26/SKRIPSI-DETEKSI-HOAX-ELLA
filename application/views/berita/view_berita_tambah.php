<div class="content flex-column-fluid" id="kt_content">



	<div class="row justify-content-center">
		<div class="col-md-7">

            <?php echo $this->session->flashdata('pesan') ?>

			<!--begin::Card-->
			<div class="card card-custom">

				<div class="card-body">

					<h4>Form Berita</h4>

					<form action="<?php echo base_url('berita/prosestambah') ?>" method="POST" enctype="multipart/form-data">


						<div class="form-group">
							<label for="">Judul</label>
							<input type="text" name="judul" class="form-control" placeholder=". . ." required="" />
							<small>Masukkan nama penulis</small>
						</div>
						<div class="form-group">
							<label for="">Thumbnail</label>
							<input type="file" name="userfile" class="form-control" required="" />
							<small>Masukkan foto atau gambar</small>
						</div>
						<div class="form-group">
							<label for="">Isi</label>
							<div class="tinymce">
								<textarea id="kt-tinymce-4" name="kt-tinymce-4" class="tox-target">
                                                                <h2>Tuliskan Kontenmu disini</h2>
                                                                <p>Ada apa hari ini ?.</p>
                                                                <blockquote>Sumber dan Referensi ?.</blockquote>
                                                                <ul>
                                                                    <li>Opsi 1</li>
                                                                    <li>Opsi 2</li>
                                                                </ul>
                                                            </textarea>
							</div>
							<small>Isi berita</small>
						</div>
					
						<div class="form-group">
							<label for="">Visible</label>
							<div class="radio-inline">
								<label class="radio">
									<input type="radio" name="visible" value="public" />
									<span></span>
									Publikasi
								</label>
								<label class="radio">
									<input type="radio" name="visible" value="draf" />
									<span></span>
									Draf
								</label>
							</div>
							<span class="form-text text-muted">Status Berita</span>
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



<script src="<?php echo base_url('assets/plugins/custom/tinymce/tinymce.bundle.js?v=7.2.9') ?>"></script>
<script>
	// Class definition

	var KTTinymce = function () {
		// Private functions
		var demos = function () {
			tinymce.init({
				selector: '#kt-tinymce-4',
				menubar: false,
				toolbar: ['styleselect fontselect fontsizeselect',
					'undo redo | cut copy paste | bold italic | link image | alignleft aligncenter alignright alignjustify',
					'bullist numlist | outdent indent | blockquote subscript superscript | advlist | autolink | lists charmap | print preview |  code'
				],
				plugins: 'advlist autolink link image lists charmap print preview code'
			});
		}

		return {
			// public functions
			init: function () {
				demos();
			}
		};
	}();

	// Initialization
	jQuery(document).ready(function () {
		KTTinymce.init();
	});
</script>