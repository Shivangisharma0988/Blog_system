<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ARTICLES</title>
    <?= link_tag('assets/css/bootstrap.min.css')?>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <a class="navbar-brand" href="#">ARTICLES</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarColor01">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#"><span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item" style="background-color:pink;">
        <?php echo anchor('login','Login'); ?>
      </li>
      &nbsp;
      <li class="nav-item" style="background-color:pink;">
        <?php echo anchor('user','Back'); ?>
      </li>
    </ul>
    <?php echo form_open('user/search',['class'=>'form-inline my-2 my-lg-0','role'=>'search']); ?>
    
      <input class="form-control mr-sm-2" name="query" type="text" placeholder="Search">
      <button class="btn btn-secondary my-2 my-sm-0" name="submit" type="submit">Search</button>
   <?php echo form_close(); ?>
   <?php echo form_error('query',"<p class='navbar-text'>",'</p>'); ?>
  </div>
</nav> 
</body>
</html>