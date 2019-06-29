<?php include_once('public_header.php'); ?>
<div class="container">
<br/>
<h1>
TITLE -<?= $article->title ?>
</h1>
<br/>
<p>
BODY - <?= $article->body ?>
</p>
<p>

<br/>
<span class="pull-right">
<?php echo $article->created_at; ?>
</span>
<br/>
<br/>
<img src="<?php echo base_url("uploads/".$article->image_path);?>" height=200 width=200>
</div>

<?php include_once('public_footer.php'); ?>
