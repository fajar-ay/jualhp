<!DOCTYPE html>
<html>
<head>

  <title></title>
</head>
<body>
<nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark">
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#nav-content" aria-controls="nav-content" aria-expanded="false" aria-label="Toggle navigation">
<span class="navbar-toggler-icon"></span>
</button>

<!-- Brand -->
<a class="navbar-brand"  href="<?=base_url()?>">
  <img src="<?=base_url()?>assets/logo/olshop.png" alt="Logo" style="width:70px;min-width: 30%">
</a>

<!-- Links -->
<div class="collapse navbar-collapse" id="nav-content">   
<ul class="navbar-nav">
 

</ul>
<form class="form-inline justify-content-center" action="<?=base_url()?>controlnya/cari" style="min-width: 70%" method="post">
    <input class="form-control mr-sm-4" type="text" placeholder="Search" style="min-width: 70%" name="cariin">
    <button class="btn btn-success" type="submit">Search</button>
  </form>s
  <div class="justify-content-end">
  <a class="nav-link fa fa-youtube" href="#"></a>
  <a class="nav-link fa fa-facebook" href="#"></a>
  <a class="nav-link fa fa-twitter" href="#"></a>
  <a href="#" class="fa fa-instagram" style="background: #125688;  color: white; "></a>

  </div>
</nav>


</body>
</html>


  