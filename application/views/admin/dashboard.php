<?php include('admin_header.php'); ?>
<div class="container">
<br/>
<div class="row">
    <div class="col-lg-6 col-lg-offset-6">
    <?= anchor('admin/add_article','Add Article',['class'=>'btn btn-lg btn-info pull-right']); ?>
    </div>
</div><br/>
<?php if($feedback=$this->session->flashdata('feedback')):?>
    <div class="row">
      <div class="col-lg-6">
      <div class="alert alert-dismissible alert-success">
  <?php echo $feedback; ?>
    </div>
    </div>
    </div>
<?php endif; ?>
<table class="table">
<thead>
<th>Sr.NO</th>
<th>Title</th>
<th>Action</th>
<th>Image</th>
</thead>
<tbody>

<?php  if(count($articles)):
    $count=$this->uri->segment(3,0); 

     foreach($articles as $article):
        // print_r($article);die;
        ?>
        <tr>
<td><?php echo ++$count; ?></td>
<td>
<?php echo $article->title; ?></td>

<td>
<div class="row">
    <div class="col-lg-6"><?php echo form_open('admin/delete_article'),
    form_hidden('article_id',$article->id),
    form_submit(['name'=>'submit','value'=>'Delete','class'=>'btn btn-danger' ]),
    form_close(); ?></div>
    <div class="col-lg-6">
<?= anchor("admin/edit_article/{$article->id}",'Edit',['class'=>'btn btn-primary']); ?>
</div>
</td>
</div>

</tr>
    <?php endforeach; ?>
    
<?php else: ?>
<tr>
<td colspan="3">
No Records found
</td>
</tr>
   <?php endif; ?>
</tbody>

</table>
<?php echo $this->pagination->create_links(); ?>
</div>


<?php include('admin_footer.php'); ?>