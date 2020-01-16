
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
       <div><center>
	<h1> PEMESANAN BERHASIL</h1>
  <h3>No Rekening tujuan
      :
       382102927</h3>
	<p>Silahkan segera membayar agar pesanan bisa segera dikirimkan</p>
  <p>barang akan sampai 1 minggu setelah pembayaran</p>  <p> jika barang belum sampai segera hubungi kami</p>
  <tr>
      </center>
</div>
      <hr>
   
      
    <!--   sampaisini -->
      </div>
      



      <div>
      <br>
      
      <br>
      <br>

  
</div> 


      
     
    </div><!-- batasrow content tengah -->
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





