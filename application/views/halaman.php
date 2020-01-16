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
 <!--  <div class="jumbotron jumbotron-fluid ">
  <h1>Bootstrap Tutorial</h1> 
  <p>Bootstrap is the most popular HTML, CSS...</p> 
</div> -->

	<div class="container-fluid text-center col-lg-12" style="margin-bottom: 40px;padding-left: 0;padding-right: 0">    
  <div class="row content col-lg-12" style="margin-bottom: 40px;padding-right: 0">
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
         <div class="row">
            <?php foreach ($content as $key) {?>
            <div class="col-lg-4" style="margin-top: 10px">
      
     
              <div class="card btn-outline-dark ">
                <a class="text-secondary" href="<?=base_url()?>controlnya/detail/<?php echo $key->pid;?>" >
                <div class="card-body text-center">
                 
                  <div style="height: 220px;">
                    <?php echo '<img class="img-fluid eaaa" alt="Cinque Terre" src="data:image/jpeg;base64,'.base64_encode( $key->gambar).'"/>'; ?>
                  </div>
                  <div style="overflow: hidden; text-overflow: ellipsis; ">
                    <?php echo "$key->nama_barang"; ?>              
                  </div><br>
                  <span></span>
                  <?php echo "Rp. $key->harga"; ?>
                  <br>
                  <?php
                  $admin = $this->session->userdata('namaadmin');
                  $data['id'] = $key->pid;
                  if (isset($admin)) {?>  
                  <br>        
                  <div style="margin-left: 2px; margin-right: 4px" class="col-sm-5 btn btn-outline-warning "><?php echo anchor('controlnya/edit/'.$key->pid,'Edit');?>
                  </div>
                  <div style="margin-left: 4px; margin-right: 2px" class="col-sm-5 btn btn-outline-danger "><?php echo anchor('controlnya/delete/'.$key->pid,'Hapus');?>
                  </div>
                 <?php } ?>
                  </div>
                 </div>
                </a>
              </div>
     
            <?php } ?>
           </div>
        </div>


      <div>
      <hr>  
      <br>
      <br>
      <br>
      </div>     
    </div> <!-- batasrow content tengah -->

   
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







