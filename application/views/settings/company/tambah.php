

<section id="main-content">
    <section class="wrapper">
        
        <div class="row mt">
          		<div class="col-lg-12">
          			<div class="form-panel">
                  	  <h4 class="mb"><i class="fa fa-angle-right"></i> <?= $title?></h4>
                    <?php echo form_open_multipart ('settings/post','class="form-horizontal style-form"'); ?>

                        <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label" for="nama_perusahaan">Nama Perusahaan</label>
                              <div class="col-sm-5">
                                <input type="text" name="nama_perusahaan" class="form-control" id="nama_perusahaan" placeholder="Tuliskan nama_perusahaan">
                                <?php echo form_error('nama_perusahaan', '<small class="text-danger pl-3">','</small>')?>
                              </div>
                        </div>

                        <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label" for="Alamat">Alamat Perusahaan</label>
                              <div class="col-sm-5">
                                <input type="text"  placeholder="Masukkan Alamat" class="form-control" name="alamat" id="Alamat"> 
                                <?php echo form_error('judul', '<small class="text-danger pl-3">','</small>')?>                            
                              </div> 
                        </div>

                        <div class="form-group">        
                            <label class="col-sm-2 col-sm-2 control-label" for="logo">Logo</label>
                                <div class="col-sm-5">
                                    <input type="file" name="userfile" class="form-control" id="logo" onchange="tampilkanPreview(this, 'preview')">  
                                    <img style="width:450px; margin-top:10px" id="preview" >                             
                                </div> 
                        </div>
                          
                          <button type="submit" name="submit" class="btn btn-theme">Tambah</button>
                      </form>
          			</div><!-- /form-panel -->
          		</div><!-- /col-lg-12 -->
          	</div><!-- /row -->

    </section>
</section>