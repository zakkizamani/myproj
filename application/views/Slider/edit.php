

<section id="main-content">
    <section class="wrapper">
        
        <div class="row mt">
          		<div class="col-lg-12">
          			<div class="form-panel">
                  	  <h4 class="mb"><i class="fa fa-angle-right"></i> <?= $title?></h4>
                    <?php echo form_open_multipart ('slider/edit','class="form-horizontal style-form"'); ?>
                      <input type="hidden" name="id" value="<?php echo $row['id']?>">
                        <div class="form-group">        
                            <label class="col-sm-2 col-sm-2 control-label" for="gambar">Gambar</label>
                                <div class="col-sm-5">
                                    <input type="file" name="userfile" class="form-control" id="gambar" onchange="tampilkanPreview(this, 'preview')">  
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