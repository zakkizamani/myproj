

<section id="main-content">
    <section class="wrapper">
        
        <div class="row mt">
          		<div class="col-lg-12">
          			<div class="form-panel">
                  	  <h4 class="mb"><i class="fa fa-angle-right"></i>Form Tambah artikel</h4>
                    <?php echo form_open_multipart ('artikel/post','class="form-horizontal style-form"'); ?>

                        <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label" for="judul">Judul Artikel</label>
                              <div class="col-sm-5">
                                <input type="text" name="judul" class="form-control" id="judul" placeholder="Tuliskan Judul" value="<?= set_value('judul');?>">
                                <?php echo form_error('judul', '<small class="text-danger pl-3">','</small>')?>
                              </div>
                        </div>

                        <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label" for="isi">Isi Artikel</label>
                              <div class="col-sm-10">
                                <textarea type="text" class="ckeditor form-control" placeholder="Masukkan artikel" value="<?= set_value('isi');?>" name="isi"></textarea>  
                                <?php echo form_error('isi', '<small class="text-danger pl-3">','</small>')?>                             
                              </div> 
                        </div>

                        <div class="form-group">        
                            <label class="col-sm-2 col-sm-2 control-label" for="kategori">Kategori</label>
                            <div class="col-sm-5">
                                <select name="kategori" class="form-control" id="kategori" value="<?= set_value('kategori');?>">
                                        <?php foreach( $kategori as $k) :?>
                                            <option class="form-control" value="<?php echo $k['id']?>"><?php echo $k['nama_kategori']?></option>
                                        <?php endforeach ;?>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">        
                            <label class="col-sm-2 col-sm-2 control-label" for="gambar">Gambar</label>
                                <div class="col-sm-5">
                                    <input type="file" name="userfile" class="form-control" id="gambar" value="<?= set_value('userfile');?>" onchange="tampilkanPreview(this, 'preview')">
                                    <img style="width:450px; margin-top:10px" id="preview" > 
                                    <?php echo form_error('userfile', '<small class="text-danger pl-3">','</small>')?>                              
                                </div> 
                        </div>
                          
                          <button type="submit" name="submit" class="btn btn-theme">Tambah</button>
                      </form>
          			</div><!-- /form-panel -->
          		</div><!-- /col-lg-12 -->
          	</div><!-- /row -->

    </section>
</section>