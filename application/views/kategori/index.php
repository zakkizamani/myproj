

      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">

              <div class="row">
                <div class="col-lg-10">
                   <h1>Halaman Kategori</h1>
                   <?=  $this->session->flashdata('pesan')?>
                   <div class="row mt">
                  <div class="col-md-12">
                      <div class="content-panel">
                          <table class="table table-striped table-advance table-hover">
	                  	  	  <h4><i class="fa fa-angle-right"></i> <?=$title_home?></h4>
                                <a href="<?= base_url("kategori/post")?>" class="btn btn-success btn-xs col-md-offset-1"><i class="fa fa-plus "></i></a>
	                  	  	  <hr/>
                              <thead>
                              <tr>
                                  <th> No</th>
                                  <th class="hidden-phone">Nama kategori</th>
                                  <th>Slug</th>
                                  <th>Action</th>
                              </tr>
                              </thead>
                              <tbody>
                            <?php
                              $no=1;
                              foreach($record as $r): ?>
                                <tr>
                                    <td><?= $no ?></td>  
                                    <td><?= $r->nama_kategori ?></td>
                                    <td><?= $r->slug_kategori ?></td>
                                    <td>
                                      <a href="<?= base_url("kategori/edit/$r->id")?>" class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></a>
                                      <a href="<?= base_url("kategori/delete/$r->id")?>" class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></a>
                                  </td>
                                </tr>
                            

                           
                            <?php 
                                $no++; 
                                endforeach; 
                            ?>
                              </tbody>
                          </table>
                      </div><!-- /content-panel -->
                  </div><!-- /col-md-12 -->
              </div>
                  </div>
              </div>

          </section>
      </section>

  