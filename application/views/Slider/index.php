

      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">

              <div class="row">
                <div class="col-lg-10"><br><br>
                   <?=  $this->session->flashdata('pesan')?>
                   <div class="row mt">
                  <div class="col-md-12">
                      <div class="content-panel">
                          <table class="table table-striped table-advance table-hover">
                                  <h4><i class="fa fa-angle-right"></i> <?=$title?></h4>
                                    <a style="margin-left:20px;" href="<?= base_url("slider/view")?>" class="btn btn-warning btn-xs" alt="Lihat Slider"><i class="fa fa-picture-o"></i></a>
                                    <a href="<?= base_url("slider/tambah")?>" class="btn btn-success btn-xs col-md-offset-1"><i class="fa fa-plus "></i></a>
                                
	                  	  	  <hr/>
                              <thead>
                              <tr>
                                  <th width="5%"> No</th>
                                  <th width="80%" style="text-align:center">Gambar Slider</th>
                                  <th width="15%">Aksi</th>
                              </tr>
                              </thead>
                              <tbody>
                            <?php
                              $no=1;
                              foreach($record as $r): ?>
                                <tr>
                                    <td><?= $no ?></td>  
                                    <td style="text-align:center"><img class="instagram-panel pn" src="<?= base_url ().'assets/images/slider/'.$r->gambar?>"  width="50%" ></td>
                                    <td>
                                      <a href="<?= base_url("slider/edit/$r->id")?>" class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></a>
                                      <a href="<?= base_url("slider/hapus/$r->id")?>" class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></a>
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

  