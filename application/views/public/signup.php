<?php include('public_header.php'); ?>
<?php echo form_open('login/user_signup',['class'=>'form-horizontal']); ?>
<div class="container">
<form>
  <fieldset>
    <legend>SignUp Form</legend>
    
    <?php if($error=$this->session->flashdata('Signup_failed')):?>
    <div class="row">
      <div class="col-lg-6">
      <div class="alert alert-dismissible alert-danger">
  <?php echo $error; ?>
    </div>
    </div>
    </div>
<?php endif; ?>
    <div class="row">
      <div class="col-lg-6"><div class="form-group">
      <label for="staticUsername">Username</label><br/>
     <?php echo form_input(['name'=>'username','placeholder'=>'Username','value'=>set_value('username')]) ?>
       <!-- <input type="text"   id="staticEmail" placeholder="Email"> -->
          </div></div>
      <div class="col-lg-6"><?php echo form_error('username',"<p class='text-danger'>","</p>"); ?></div>
    </div>
     <div class="row">
       <div class="col-lg-6">   <div class="form-group">
      <label for="exampleInputPassword1">Password</label><br/>
      <?php echo form_password(['name'=>'password','placeholder'=>'Passsword']) ?>
         </div></div>
       <div class="col-lg-6"><?php echo form_error('password',"<p class='text-danger'>","</p>"); ?></div>
     </div>
     <div class="row">
       <div class="col-lg-6">   <div class="form-group">
      <label for="confirmpassword">Confirm Password</label><br/>
      <?php echo form_input(['name'=>'confirm_password','placeholder'=>'confirm Passsword']) ?>
         </div></div>
       <div class="col-lg-6"><?php echo form_error('Confirm_password',"<p class='text-danger'>","</p>"); ?></div>
     </div>
     <div class="row">
       <div class="col-lg-6">   <div class="form-group">
      <label for="email">Email</label><br/>
      <?php echo form_input(['name'=>'email','placeholder'=>'Email']) ?>
         </div></div>
       <div class="col-lg-6"><?php echo form_error('email',"<p class='text-danger'>","</p>"); ?></div>
     </div>
     <div class="row">
       <div class="col-lg-6">   <div class="form-group">
      <label for="city">City</label><br/>
      <?php echo form_input(['name'=>'city','placeholder'=>'City']) ?>
         </div></div>
       <div class="col-lg-6"><?php echo form_error('city',"<p class='text-danger'>","</p>"); ?></div>
     </div>
    <?php echo form_submit(['name'=>'submit','value'=>'Submit','class'=>'btn btn-primary']);
    echo form_reset(['name'=>'reset','value'=>'Reset','class'=>'btn btn-primary']); ?>
      
  </fieldset>
</form>
</div>

<?php include('public_footer.php'); ?>