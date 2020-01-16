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

	<div class="container-fluid text-center col-lg-12">    
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
  ?> 
  <?php foreach ($content as $key) {
    # code...
    
    $pid=$key->pid;
    $nama_barang=$key->nama_barang;
    $harga=$key->harga;
    $merk=$key->merk;


  } ?>
<div>
  <form action="<?=base_url()?>controlnya/simpanbeli" method="post" accept-charset="utf-8" class="form-style-9">
  <table class="table">
    <tr>
      <td>Nama Barang</td>
      <td>:</td><td> <?php echo $nama_barang; ?></td>
      <td><input type="hidden" name="nama_barang" value="<?php echo $nama_barang; ?>"></td>
    </tr>
    <tr>
      <td>Harga</td>
      <td>:</td></td><td> <?php echo $harga; ?></td>
      <td><input type="hidden" name="harga" value="<?php echo $harga; ?>"></td>
    </tr>
    <tr>
      <td>Bank</td>
      <td>:</td>
      <td><input type="text" name="bank"></td>
    </tr>
    <tr>
      <td>Atas Nama</td>
      <td>:</td>
      <td><input type="text" name="atasnama" class="field-style field-full align-none"></td>
    </tr>
    <tr>
      <td>Alamat</td>
      <td>:</td>
      <td><input type="text" name="alamat"></td>
    </tr>
  
    
    <tr>
      <td colspan="3" rowspan="">
        <center><input class="btn btn-success" type="submit" name="submit" value="BELI"></center>
      </td>
    </tr>
  </table>
  </form>
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






