<div id="login-page">
	  	<div class="container">
	  	
		      <?php echo form_open ('Auth/registration','class="form-login"'); ?>
		        <h2 class="form-login-heading">Form Registration</h2>
		        <div class="login-wrap">
		            <input type="text" class="form-control" name="name" placeholder="Username" value="<?= set_value('name');?>" autofocus>
                    <?php echo form_error('name', '<small class="text-danger pl-3">','</small>')?>
		           <br>
                    <input type="text" class="form-control" name="email" placeholder="Email" value="<?= set_value('email');?>" autofocus>
                    <?php echo form_error('email', '<small class="text-danger pl-3">','</small>')?>
		           <br>
		            <input type="password" class="form-control" name="password1" placeholder="Password">
                    <?php echo form_error('password1', '<small class="text-danger pl-3">','</small>')?>
		           <br/>

                   <input type="password" class="form-control" name="password2" placeholder=" Re Type Password">
                   <?php echo form_error('password2', '<small class="text-danger pl-3">','</small>')?>
		           <br/>
		           <button class="btn btn-theme btn-block" type="submit" name="submit"><i class="fa fa-lock"></i> Daftar</button>
		            <hr>
		            
		            <div class="registration">
		                Don't have an account yet?<br/>
		                <a class="" href="#">
		                    Create an account
		                </a>
		            </div>
		
		        
		
		      </form>	  	
	  	
	  	</div>
	  </div>
