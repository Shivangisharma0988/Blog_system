<?php include('public_header.php'); ?>
<div class="container">
<br/>
<center><h1>SEARCH ARTICLES</h1></center>
<hr>
<table class="table">
    <thead>
        <tr>
            <td>Sr.No</td>
            <td>Article Title</td>
            <td>Published on</td>
        </tr>
     
        <?php  if(count($articles)):
    $count=$this->uri->segment(4,0); 

     foreach($articles as $article):
        // print_r($article);die;
        ?>
        <tr>
<td><?php echo ++$count; ?></td>
<td>
<?php echo $article->title; ?></td>
<td>
<?php echo "date"; ?></td>


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