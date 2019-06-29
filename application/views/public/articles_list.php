<?php include('public_header.php'); ?>
<div class="container">
<br/>
<center><h1>ALL ARTICLES</h1></center>
<hr>
<table class="table">
    <thead>
        <tr>
            <td>Sr.No</td>
            <td>Article Title</td>
            <td>Published on</td>
            <td>Title Image</td>
        </tr>
     
        <?php  if(count($articles)):
    $count=$this->uri->segment(3,0); 

     foreach($articles as $article):
        // print_r($article);die;
        ?>
        <tr>
<td><?php echo ++$count; ?></td>
<td>
<?php echo anchor("user/article/{$article->id}", $article->title); ?></td>
<td>
<?php echo $article->created_at; ?></td>
<td>
<img src="<?php echo base_url("uploads/".$article->image_path);?>" height=50 width=100>
<!--'uploads/'.$article->image_path-->

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


<?php include('public_footer.php'); ?>