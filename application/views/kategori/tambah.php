<section id="main-content">
    <section class="wrapper">
        
        <div class="row mt">
          		<div class="col-lg-12">
          			<div class="form-panel">
                  	  <h4 class="mb"><i class="fa fa-angle-right"></i>Form Kategori</h4>
                    <?php echo form_open ('Kategori/post','class="form-horizontal style-form"'); ?>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label" for="kategori">Nama Kategori</label>
                              <div class="col-sm-5">
                                <input type="text" name="nama" class="form-control" id="kategori" placeholder="Masukkan Nama Kategori">
                                <?php echo form_error('nama', '<small class="text-danger pl-3">','</small>')?>
                              </div>
                          </div>
                          
                          <button type="submit" name="submit" class="btn btn-theme">Tambah</button>
                      </form>
          			</div><!-- /form-panel -->
          		</div><!-- /col-lg-12 -->
          	</div><!-- /row -->

    </section>
</section>