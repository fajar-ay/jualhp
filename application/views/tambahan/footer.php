<div class="col-lg-12 position-static-bottom" style="bottom: 0;">
<footer class="col-lg-12 position-static-bottom">
  <p>Created by : Paktikum Project Team </p>
  <p>Contact information: <a href="#">Project Team
  </a>
   <?php
      $admin = $this->session->userdata('namaadmin');
      if (isset($admin)) {
        ?>
          <a class="float-right" style="background: #007bb5;
  color: white;" href="<?=base_url()?>controlnya/logout">Logout</a>
        <?php
      }
      else{
        ?>
          <a class="float-right" href="<?=base_url()?>controlnya/admin">Login Admin</a>
        <?php
      }
      ?>
 </p>
 <div class="dropdown">
<button class="btn btn-primary dropdown-toggle" type="button" id="about-us" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
About Us
</button>
<div class="dropdown-menu" aria-labelledby="about-us">
<a class="dropdown-item" href="#">Our Story</a>
<a class="dropdown-item" href="#">Our Team</a>
<a class="dropdown-item" href="#">Contact Us</a>
</div>
</div>
</footer>
</div>