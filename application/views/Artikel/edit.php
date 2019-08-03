

<section id="main-content">
    <section class="wrapper">
        
        <div class="row mt">
          		<div class="col-lg-12">
          			<div class="form-panel">
                  	  <h4 class="mb"><i class="fa fa-angle-right"></i><?= $title ?></h4>
                    <?php echo form_open_multipart ('artikel/edit','class="form-horizontal style-form"'); ?>
                    <input type="hidden" name="id" value="<?php echo $row['id']; ?>">

                        <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Gambar Artikel</label>
                              <div class="col-sm-5">
                                <div >
                                    <img class="content-panel pn" src="<?= base_url ().'assets/images/posts/'.$row['gambar_artikel']?>" alt="<?=$row['gambar_artikel']?>" class="gambarku">
                                </div>
                              </div>
                        </div>

                        <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label" for="judul">Judul Artikel</label>
                              <div class="col-sm-5">
                                <input type="text" value="<?php echo $row['judul']?>" name="judul" class="form-control" id="judul" placeholder="Tuliskan Judul">
                                <?php echo form_error('judul', '<small class="text-danger pl-3">','</small>')?>
                              </div>
                        </div>

                        <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label" for="isi">Isi Artikel</label>
                              <div class="col-sm-10">
                                <textarea type="text" name="isi" class="ckeditor form-control"><?php echo $row['isi']?></textarea>
                                <?php echo form_error('judul', '<small class="text-danger pl-3">','</small>')?>                              
                              </div> 
                        </div>

                        <div class="form-group">      
                            <label class="col-sm-2 col-sm-2 control-label" for="kategori">Kategori</label>
                            <div class="col-sm-5">
                            <select class="form-control" name="kategori" id="kategori">
                                <?php
                                    foreach ($kategori as $k) {
                                        echo "<option value='$k->id'";
                                        echo $k->id==$row['kategori_id']?'selected':'';
                                        echo ">$k->nama_kategori</option>";
                                    }
                                ?>
                                </select>
                            </div>
                        </div>     

                        <div class="form-group">
                        <label class="col-sm-2 col-sm-2 control-label" for="gambar">ganti Gambar</label>
                            <div class="col-sm-5">
                                <input type="file" name="userfile" id="userfile" class="form-control" id="gambar" onchange="tampilkanPreview(this, 'preview')">
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