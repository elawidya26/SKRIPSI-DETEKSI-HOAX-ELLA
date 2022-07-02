<div class="row justify-content-center">

    <div class="col-md-10">
        <div class="card card-body">

            <?php foreach ( $berita->result_array() AS $isi ) : 
                
                if( $isi['visible'] == "public" ) :
            ?>
            <div class="row">
                <div class="col-md-2">
                    <a href="<?php echo base_url('main/artikel/'. $isi['id_berita']) ?>">
                        <img src="<?php echo base_url('assets/media/blog/'. $isi['thumbnail']) ?>" alt="Picture" style="width: 105px; border-radius: 5px">
                    </a>
                </div>
                <div class="col-md-8">
                    <h4><?php echo $isi['judul'] ?></h4>
                    <p>Artikel dibuat oleh <?php echo $isi['nama'] ?></p>
                    <small>Pembuatan pada <?php echo date('d F Y H.i A', strtotime( $isi['created_at'] )) ?></small>
                </div>
            </div>

            <hr>
            <?php endif; endforeach; ?>
        </div>
    </div>
</div>