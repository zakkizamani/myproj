      <section id="main-content">
          <section class="wrapper">

              <div class="row">
                  <div class="col-lg-9 main-chart">
                  
                  	<div class="row mtbox">
                  		<div class="col-md-2 col-sm-2 col-md-offset-1 box0">
                  			<div class="box1">
					  			<span class="li_heart"></span>
					  			<h3> <?php echo $total_artikel ?></h3>
                  			</div>
					  			<p><?php echo $total_artikel ?> Total Jumlah Artikel / blog</p>
                  		</div>
                  		<div class="col-md-2 col-sm-2 box0">
                  			<div class="box1">
					  			<span class="li_cloud"></span>
					  			<h3><?php echo $total_kategori ?></h3>
                  			</div>
					  			<p><?php echo $total_kategori ?> Jumlah total kategori yang ada pada database</p>
                  		</div>
                  		<div class="col-md-2 col-sm-2 box0">
                  			<div class="box1">
					  			<span class="li_stack"></span>
					  			<h3><?php echo $total_menu ?></h3>
                  			</div>
					  			<p>You have <?php echo $total_menu ?> menu</p>
                  		</div>
                  		<div class="col-md-2 col-sm-2 box0">
                  			<div class="box1">
					  			<span class="li_news"></span>
					  			<h3>+10</h3>
                  			</div>
					  			<p>More than 10 news were added in your reader.</p>
                  		</div>
                  		<div class="col-md-2 col-sm-2 box0">
                  			<div class="box1">
					  			<span class="li_data"></span>
					  			<h3>OK!</h3>
                  			</div>
					  			<p>Your server is working perfectly. Relax &amp; enjoy.</p>
                  		</div>
                  	
                  	</div>						
                  </div><!-- /col-lg-9 END SECTION MIDDLE -->
                  
                  
      <!-- **********************************************************************************************************************************************************
      RIGHT SIDEBAR CONTENT
      *********************************************************************************************************************************************************** -->                  
                  
                  <div class="col-lg-3 ds">
                    <!--COMPLETED ACTIONS DONUTS CHART-->
                      <h3>Profile Admin</h3>
                      <div class="desc">
                      	<div class="thumb">
                      		<img class="img-circle" src="<?= base_url('assets/images/posts/'.$user['gambar'])?>" width="35px" height="35px" align="">
                      	</div>
                      	<div class="details">
                          <div class="card-body">
                              <h5 class="card-title"><?= $user['nama_user']?></h5>
                              <p class="card-text"><?= $user['email']?></p>
                              <p class="card-text"><?= $user['id']?></p>
                              <p class="card-text"><small class="text-muted">Terdaftar pada tanggal: <?= date('d F Y', $user['tanggal_dibuat'])?></small></p>
                            </div><br><br>
                      	</div>
                      </div>
                  </div><!-- /col-lg-3 -->
              </div><!-- --/row ---->
          </section>
      </section>
      

  