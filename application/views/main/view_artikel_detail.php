<div class="row justify-content-center">
    <div class="col-md-8">
        <img src="<?php echo base_url('assets/media/blog/'. $berita['thumbnail']) ?>" alt="" style="border-radius: 10px; width: 100%; height: 150px; object-fit: cover">

        <br><br>
        <div class="card card-body">
            <h1><?php echo $berita['judul'] ?></h1>
            Dibuat pada <?php echo date('d F Y H.i A', strtotime( $berita['created_at'] )) ?> &emsp;|&emsp; <?php echo "Oleh ". $berita['nama'] ?>

            <hr>

            <?php echo $berita['isi'] ?>
            
        </div>
    </div>
</div>