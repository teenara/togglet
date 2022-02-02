<!-- <div id="mainBody"> -->
	<!-- <div class="container"> -->
	<div class="row"> 
    <div class="span9">
    <ul class="breadcrumb">
		<li><a href="index.html">Home</a> <span class="divider">/</span></li>
		<li class="active">Registration</li>
    </ul>
	<h3> Registration</h3>	
	<div class="well">
	
	<!-- <form class="form-horizontal" > -->
        <?php echo form_open('register/signup',array('class'=>'form-horizontal'))?>
		<h4>Your personal information</h4>
        <div class="control-group">
			<label class="control-label" for="inputFname1">User name <sup>*</sup></label>
			<div class="controls">
			  <!-- <input type="text" id="inputFname1" placeholder="User Name"> -->
			<?php echo form_input(array('name'=>'username','id'=>'inputFname1','placeholder'=>'User Name'))?>
            <?php echo form_error('username')?>    
		</div>
		 </div>
		<div class="control-group">
			<label class="control-label" for="inputFname1">First name <sup>*</sup></label>
			<div class="controls">
			<?php echo form_input(array('name'=>'fname','id'=>'inputFname1','placeholder'=>'First Name'))?>  
		    <?php echo form_error('fname')?>	
		</div>
		 </div>
		 <div class="control-group">
			<label class="control-label" for="inputLnam">Last name <sup>*</sup></label>
			<div class="controls">
			  <!-- <input type="text" id="inputLnam" placeholder="Last Name"> -->
              <?php echo form_input(array('name'=>'lname','id'=>'inputFname1','placeholder'=>'Last Name'))?> 
			  <?php echo form_error('lname')?>
			</div>
		 </div>
		<div class="control-group">
		<label class="control-label" for="input_email">Email <sup>*</sup></label>
		<div class="controls">
		  <!-- <input type="text" id="input_email" placeholder="Email"> -->
          <?php echo form_input(array('name'=>'email','id'=>'inputFname1','placeholder'=>'Email'))?> 
		  <?php echo form_error('email')?>
		</div>
	  </div>	  
	<div class="control-group">
		<label class="control-label" for="inputPassword1">Password <sup>*</sup></label>
		<div class="controls">
		  <!-- <input type="password" id="inputPassword1" placeholder="Password"> -->
          <?php echo form_input(array('name'=>'pwd','id'=>'inputFname1','placeholder'=>'Password'))?> 
		  <?php echo form_error('pwd')?>
		</div>
	  </div>	  
		
      <div class="control-group">
		<label class="control-label" for="inputPassword1">Mobile Number<sup>*</sup></label>
		<div class="controls">
		  <!-- <input type="number" id="mobilephone" placeholder="Mobile Phone"> -->
          <?php echo form_input(array('name'=>'mphone','id'=>'inputFname1','placeholder'=>'Mobile Number'))?> 
		  <?php echo form_error('mphone')?>
		</div>
	  </div>	  
	<?php
	  if($this->session->flashdata('signupSuccess')){?>
	
	<div class="alert alert-block alert-error fade in">
		<button type="button" class="close" data-dismiss="alert">×</button>
		<strong><?php
	 echo $this->session->flashdata('signupSuccess');
	?></strong> 
	 </div>	
	 <?php
	 }
	 ?>
	 <input type="hidden" name="<?php echo $this->security->get_csrf_token_name()?>" value="<?php echo $this->security->get_csrf_hash()?>">
	
	<div class="control-group">
			<div class="controls">
				<input type="hidden" name="email_create" value="1">
				<input type="hidden" name="is_new_customer" value="1">
				<input class="btn btn-large btn-success" type="submit" value="Register" />
			</div>
		</div>		
	</form>
</div>

</div>
</div>
</div>
</div>