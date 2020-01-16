<title>Belanja Puas </title>
  
  <style type="text/css">
    .eaaa{
      max-height: 100%;

    }
    .marginn{
      margin-top: : 10px;
      margin-bottom: 10px;
      outline: none;
      outline-color: white;
    
    }
  </style>
  <div class="container-fluid text-center col-lg-12" style="margin-bottom: 40px">    
  <div class="row content col-lg-12" style="margin-bottom: 40px">
    <div class="col-lg-2 sidenav">
<?php $xiaomi='xiaomi';$samsung="samsung";$oppo="Oppo" ?>
      <p class="text-secondary"> <?php echo anchor('controlnya/cariinlah/'.$xiaomi,'Xiaomi');?> </p>
      <p class="text-secondary"><?php echo anchor('controlnya/cariinlah/'.$samsung,'samsung');?></p>
      <p class="text-secondary"><?php echo anchor('controlnya/cariinlah/'.$oppo,'Oppo');?></p>
      <p class="text-secondary">
        <?php
        $admin = $this->session->userdata('namaadmin');
     
        if (isset($admin)) {?>          
        <?php echo anchor('controlnya/pemesan/','Lihat Orderan');?>
        <br><br>
        <?php echo anchor('controlnya/tambahdata/','Tambah Produk');?> 
          <?php }
        ?>        
      </p>
    </div>

    <div class="col-lg-7 text-justify ">      
      <div class="text-justify container-fluid">
        <?php 
      foreach ($content as $key) {?>

        <a href="<?=base_url()?>controlnya/detail/<?php echo $key->pid;?>" >
        <div class="col-lg-12 btn btn-outline-dark marginn">
          <div>
            <?php echo '<img class="img-fluid eaaa" alt="Cinque Terre" src="data:image/jpeg;base64,'.base64_encode( $key->gambar).'"/>'; ?>
          </div>
            <div style="overflow: hidden; text-overflow: ellipsis; ">
              <?php echo "$key->nama_barang"; ?>              
            </div><br>
            <span></span>
            <?php echo "Rp. $key->harga"; ?>
            <br></div>
      </a>
      <div class="col-lg-12" style="object-position: center; position: center"> 
        <p align="text-justify"> Merk <?php echo $key->merk;?> </p>
        <p align="text-justify">  <?php echo $key->deskripsi;?> </p>
        <a class="btn btn-outline-success container-fluid" href="<?=base_url()?>controlnya/prosesbeli/<?php echo $key->pid;?>"> beli</a>
      </div>
      
        <?php }    
      ?>
      <hr>
   
        <!--   sampaisini -->
      </div>
      



      <div>
      <br>
      
      <br>
      <br></div>      
     
    </div>
    <!-- batasrow content tengah -->
      <div class="col-lg-3 sidenav">
        <div class="card" style="margin-bottom: 8px;">
          <div class="card-body">
          <p><img style="max-height: 180px" class="img-fluid" alt="Chania" src="<?=base_url()?>assets/gambar/iphone.gif" sizes="100%" ></p>
          </div>
        </div>
       <div class="card" style="margin-bottom: 8px">
         <div class="card-body">
          <p><img style="max-height: 180px" class="img-fluid" alt="Chania" src="<?=base_url()?>assets/gambar/xiaomi.gif" sizes="100%" ></p>
          <p> Xiaomi Redmi 5</p>
          </div>
        </div>
        <div class="card" style="margin-bottom: 8px;">
         <div class="card-body">
          <p><img style="max-height: 180px" class="img-fluid" alt="Chania" src="<?=base_url()?>assets/gambar/samsungs8.gif" sizes="100%" ></p>
          <p> Samsung S8</p>
          </div>
      </div>
    </div>
  </div>
</div>






