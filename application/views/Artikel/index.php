

      <!--main content start-->
      <section id="main-content">
          <section class="wrapper site-min-height">

          <div class="row mt">
          		<div class="col-lg-12">
                  <div class="row">
                   <h1 class="text-center"><a style="margin-left:10px" href="<?= base_url("artikel/post")?>" alt="Tambah Artikel" class="btn btn-success btn-lg"><i class="fa fa-plus "> Tambah data</i></a></h1>
                   <a style="" href="<?= base_url("artikel/post")?>" alt="Tambah Artikel" class=""> </i></a>
                   <?=  $this->session->flashdata('pesan')?>
                   <?php foreach($record as $r) :?>
                   <div class="col-lg-4 col-md-4 col-sm-4 mb">
							<div class="content-panel pn">
								<div id="blog-bg"><br>
                                <img class="blog-bg" src="<?= base_url ().'assets/images/posts/'.$r->gambar_artikel?>">
                                <a href="<?= base_url("artikel/edit/$r->id")?>" class="badge badge-popular"><i class="fa fa-pencil"></i></a>
                                <a href="<?= base_url("artikel/hapus/$r->id")?>" style="margin-top:40px" class="badge badge-hot"><i class="fa fa-trash-o"></i></a>
									<div class="blog-title"><?= $r->judul ?></div>
								</div>
								<div class="blog-text">
                                    <p><?= word_limiter($r->isi, 20) ?><a href="<?= base_url("artikel/view/$r->id")?>">Read More</a></p>
								</div>
							</div>
					</div><!-- /col-md-4-->
                        <?php endforeach ;?>
					</div>
                  </div>  
              </div>
        </div>

          </section>
      </section>

  