<section id="main-content">
          <section class="wrapper">

          <div class="row mt">
          		<div class="col-lg-12">
                  <div class="row">
  <!-- Page Content -->
            <div class="container">

                <div class="row">

                <!-- Post Content Column -->
                <div class="col-md-offset-1">
                <div class="col-lg-8">

                    <!-- Title -->
                    <h1 class="mt-4"><?= $artikel['judul']?></h1>
                    <hr>

                    <!-- Date/Time -->
                    <p>Dipost pada tanggal <?= date('d F Y', $artikel['dibuat'])?> <b>at</b> <?= date('H:m', $artikel['dibuat'])?></p>

                    <hr>

                    <!-- Preview Image -->
                   
                    <img class="instagram-panel pn" src="<?= base_url ().'assets/images/posts/'.$artikel['gambar_artikel']?>" alt="">
                    
                    <hr>

                    <!-- Post Content -->
                    <p><?= $artikel['isi'] ?></p>

                    <hr>

                    <!-- Comments Form -->
            

                    

                <!-- Sidebar Widgets Column -->
            </div>

    </div>
    <!-- /.row -->

  </div>
  </div>
  </div>
  </div>
  </section>
  </section>

