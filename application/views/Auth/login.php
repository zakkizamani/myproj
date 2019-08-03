


	  <div id="login-page">
	  	<div class="container">
	  	
		      <?php echo form_open ('Auth','class="form-login"'); ?>
		        <h2 class="form-login-heading">Login</h2>
					<br>		
				<?=  $this->session->flashdata('pesan')?>
		        <div class="login-wrap">
		            <input type="text" class="form-control" name="email"  placeholder="Email" value="<?php echo set_value('email');?>" autofocus>
					<?php echo form_error('email', '<small class="text-danger pl-3">','</small>')?>
		           <br>
		            <input type="password" class="form-control" name="password" placeholder="Password">
					<?php echo form_error('password', '<small class="text-danger pl-3">','</small>')?>
		           <br/>
		           <button class="btn btn-theme btn-block" type="submit" name="submit"><i class="fa fa-lock"></i> SIGN IN</button>
		            <hr>
		            
		            <div class="registration">
		                Don't have an account yet?<br/>
		                <a class="" href="<?= base_url('Auth/registration')?>">
		                    Create an account
		                </a>
		            </div>
		
		        
		
		      </form>	  	
	  	
	  	</div>
	  </div>

    