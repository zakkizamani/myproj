

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
                                <a href="<?= base_url("settings/post")?>" class="btn btn-success btn-xs col-md-offset-1"><i class="fa fa-plus "></i></a>
	                  	  	  <hr/>
                              <thead>
                              <tr>
                                  <th> No</th>
                                  <th class="hidden-phone">Nama Perusahaan</th>
                                  <th>Alamat Perusahaan</th>
                                  <th>Logo Perusahaan</th>
                                  <th>Aksi</th>
                              </tr>
                              </thead>
                              <tbody>
                            <?php
                              $no=1;
                              foreach($record as $r): ?>
                                <tr>
                                    <td><?= $no ?></td>  
                                    <td><?= $r->nama_perusahaan ?></td>
                                    <td><?= $r->alamat_perusahaan ?></td>
                                    <td><img src="<?= base_url ().'assets/images/company/'.$r->logo?>"  width="80" ></td>
                                    <td>
                                      <a href="<?= base_url("settings/edit/$r->id")?>" class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></a>
                                      <a href="<?= base_url("settings/hapus/$r->id")?>" class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></a>
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

  