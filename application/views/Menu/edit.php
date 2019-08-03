<section id="main-content">
    <section class="wrapper">
        
        <div class="row mt">
          		<div class="col-lg-12">
          			<div class="form-panel">
                  	  <h4 class="mb"><i class="fa fa-angle-right"></i>Form menu</h4>
                    <?php echo form_open ('menu/edit','class="form-horizontal style-form"'); ?>
                    <input type="hidden" name="id" value="<?php echo $row['id']?>">
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label" for="menu">Nama menu</label>
                              <div class="col-sm-5">
                                <input type="text" name="nama" class="form-control" value="<?php echo $row['nama_menu']?>" id="menu">
                                <?php echo form_error('nama', '<small class="text-danger pl-3">','</small>')?>
                              </div>
                          </div>

                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label" for="link">Link</label>
                              <div class="col-sm-5">
                                <input type="text" name="link" class="form-control" value="<?php echo $row['link']?>" id="Link">
                                <?php echo form_error('nama', '<small class="text-danger pl-3">','</small>')?>
                              </div>
                          </div>

                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label" for="icon">Icon</label>
                              <div class="col-sm-5">
                                <input type="text" name="icon" class="form-control" value="<?php echo $row['icon']?>" id="icon">
                                <?php echo form_error('nama', '<small class="text-danger pl-3">','</small>')?>
                              </div>
                          </div>

                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label" for="parent">Parent</label>
                              <div class="col-sm-5">
                                  <select class="form-control" name="parent" id="parent">
                                    <option value="0">Parent Menu / menu utama</option>
                                    <optgroup label="Sub Menu">
                                        <?php
                                            foreach ($parent as $p){
                                                echo "<option value='$p->id'";
                                                echo $row['parent'] == $p->id ? 'selected': '';
                                                echo ">$p->nama_menu</option>";
                                            }
                                        ?>

                                    </optgroup>
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