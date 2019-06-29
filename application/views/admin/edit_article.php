<?php include('admin_header.php'); ?>
<div class="container">
<?php echo form_open("admin/update_article/{$article->id}",['class'=>'form-horizontal']); ?>
<?php echo form_hidden('user_id',$this->session->userdata('user_id')); ?>
<form>
  <fieldset>
  <div>
  <?php if($feed = $this->session->flashdata('feedback')){echo $feed;} ?>
  </div>
    <legend>EDIT ARTICLE</legend>
    <div class="row">
      <div class="col-lg-6"><div class="form-group">
      <label for="staticUsername">Title</label><br/>
     
     <?php echo form_input(['name'=>'title','placeholder'=>'Title','value'=>set_value('title',$article->title)]); ?>
       <!-- <input type="text"   id="staticEmail" placeholder="Email"> -->
          </div></div>
      <div class="col-lg-6"><?php echo form_error('title',"<p class='text-danger'>","</p>"); ?></div>
    </div>
     <div class="row">
       <div class="col-lg-6">   <div class="form-group">
      <label for="exampleInputPassword1">Body</label><br/>
      <?php echo form_textarea(['name'=>'body','placeholder'=>'Body','value'=>set_value('body',$article->body)]) ?>
     <!-- <input type="password"  id="exampleInputPassword1" placeholder="Password">-->
    </div></div>
       <div class="col-lg-6"><?php echo form_error('body',"<p class='text-danger'>","</p>"); ?></div>
     </div>
     <div class="row">
      <div class="col-lg-6"><div class="form-group">
      <label for="staticUsername">Select Image</label><br/>
     <?php echo form_upload(['name'=>'userfile']); ?>
       <!-- <input type="text"   id="staticEmail" placeholder="Email"> -->
          </div></div>
      <div class="col-lg-6"><?php  if(isset($upload_error)) echo $upload_error; ?></div>
    </div>
    <?php echo form_submit(['name'=>'submit','value'=>'Submit','class'=>'btn btn-primary']);
    echo form_reset(['name'=>'reset','value'=>'Reset','class'=>'btn btn-primary']); ?>
      
  </fieldset>
</form>
</div>

<?php include('admin_footer.php'); ?>  