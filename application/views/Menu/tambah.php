<section id="main-content">
    <section class="wrapper">
        
        <div class="row mt">
          		<div class="col-lg-12">
          			<div class="form-panel">
                  	  <h4 class="mb"><i class="fa fa-angle-right"></i>Form menu</h4>
                    <?php echo form_open ('Menu/post','class="form-horizontal style-form"'); ?>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label" for="menu">Nama menu</label>
                              <div class="col-sm-5">
                                <input type="text" name="nama" class="form-control" id="menu" placeholder="Masukkan Nama menu" value="<?= set_value('nama');?>" >
                                <?php echo form_error('nama', '<small class="text-danger pl-3">','</small>')?>
                              </div>
                          </div>

                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label" for="link">Link</label>
                              <div class="col-sm-5">
                                <input type="text" name="link" class="form-control" id="link" placeholder="Masukkan link"value="<?= set_value('link');?>" >
                                <?php echo form_error('link', '<small class="text-danger pl-3">','</small>')?>
                              </div>
                          </div>

                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label" for="icon">Icon</label>
                              <div class="col-sm-5">
                                <input type="text" name="icon" class="form-control" id="icon" placeholder="Masukkan Nama icon" value="<?= set_value('icon');?>">
                                <?php echo form_error('icon', '<small class="text-danger pl-3">','</small>')?>
                              </div>
                          </div>

                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label" for="parent">Parent</label>
                              <div class="col-sm-5">
                                  <select class="form-control" name="parent" id="parent">
                                        <?php
                                            foreach ($parent as $p){
                                                echo "<option value='$p->id'>$p->nama_menu</option>";
                                            }
                                        ?>
                                  </select>
                              </div>
                          </div>
                          
                          <button type="submit" name="submit" class="btn btn-theme">Tambah</button>
                      </form>
          			</div><!-- /form-panel -->
          		</div><!-- /col-lg-12 -->
          	</div><!-- /row -->

    </section>
</section>