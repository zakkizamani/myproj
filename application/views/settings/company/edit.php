

<section id="main-content">
    <section class="wrapper">
        
        <div class="row mt">
          		<div class="col-lg-12">
          			<div class="form-panel">
                  	  <h4 class="mb"><i class="fa fa-angle-right"></i> <?= $title?></h4>
                    <?php echo form_open_multipart ('settings/edit','class="form-horizontal style-form"'); ?>
                        <input type="hidden" name="id" value="<?php echo $row['id']?>">
                        <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Logo Perusahaan</label>
                              <div class="col-sm-5">
                                <div >
                                    <img class="content-panel pn" src="<?= base_url ().'assets/images/company/'.$row['logo']?>" alt="<?=$row['logo']?>" width="50%">
                                </div>
                              </div>
                        </div>

                        <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label" for="nama_perusahaan">Nama Perusahaan</label>
                              <div class="col-sm-5">
                                <input type="text" name="nama_perusahaan" class="form-control" id="nama_perusahaan" value="<?= $row['nama_perusahaan'] ?>">
                                <?php echo form_error('nama_perusahaan', '<small class="text-danger pl-3">','</small>')?>
                              </div>
                        </div>

                        <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label" for="Alamat">Alamat Perusahaan</label>
                              <div class="col-sm-5">
                                <input type="text"  value="<?= $row['alamat_perusahaan'] ?>" class="form-control" name="alamat" id="Alamat"> 
                                <?php echo form_error('alamat_perusahaan', '<small class="text-danger pl-3">','</small>')?>                            
                              </div> 
                        </div>

                        <div class="form-group">        
                            <label class="col-sm-2 col-sm-2 control-label" for="logo">Logo</label>
                                <div class="col-sm-5">
                                    <input type="file" name="userfile" class="form-control" id="logo" onchange="tampilkanPreview(this, 'preview')">  
                                    <img style="width:450px; margin-top:10px" id="preview" >                             
                                </div> 
                        </div>
                          
                          <button type="submit" name="submit" class="btn btn-theme">Edit</button>
                      </form>
          			</div><!-- /form-panel -->
          		</div><!-- /col-lg-12 -->
          	</div><!-- /row -->

    </section>
</section>