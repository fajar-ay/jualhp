<title>Belanja Puas </title>
 <script type="text/javascript">
         function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#blah')
                        .attr('src', e.target.result);
                };

                reader.readAsDataURL(input.files[0]);
            }
        }
  </script>
	
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
<?php foreach ($content as $key ) {
  $pid =$key->pid;
  $nama_barang =$key->nama_barang;
  $harga =$key->harga;
  $merk=$key->merk;
  $deskripsi=$key->deskripsi;
  $gambar=$key->gambar;
  # code...
} ?>
	<div class="container-fluid text-center col-lg-12" style="margin-bottom: 40px">    
  <div class="row content col-lg-12" style="margin-bottom: 40px">
      <div class="col-lg-2 sidenav">
      <?php $xiaomi='xiaomi';$samsung="samsung";$oppo="Oppo" ?>
      <p> <?php echo anchor('controlnya/cariinlah/'.$xiaomi,'Xiaomi');?> </p>
      <p><?php echo anchor('controlnya/cariinlah/'.$samsung,'samsung');?></p>
      <p><?php echo anchor('controlnya/cariinlah/'.$oppo,'Oppo');?></p>
      <p>
        <?php
        $admin = $this->session->userdata('namaadmin');
     
        if (isset($admin)) {?>          
        <?php echo anchor('controlnya/pemesan/','Lihat Orderan');?>
        <br><br>
        <?php echo anchor('controlnya/tambahdata/','Tambah Produk');?> 
          <?php }
        ?>        
      </p><br>
     
    </div>

    <div class="col-lg-7 text-justify ">      
      <div class="text-justify container-fluid">
      <form enctype="multipart/form-data" action="<?=base_url()?>controlnya/prosesedit" method="post" accept-charset="utf-8" class="form-style-9">
  <table class="table">
    <input type="hidden" name="pidedit" value="<?=$pid?>">
    <tr>
      <td>ID Barang</td>
      <td>:</td>
      <td><input type="text" name="pid" class="field-style field-full align-none" value="<?=$pid?>"  ></td>
    </tr>
    <tr>
      <td>Nama Barang</td>
      <td>:</td>
      <td><input type="text" name="nama_barang" class="field-style field-full align-none" value="<?=$nama_barang?>"></td>
    </tr>
    <tr>
      <td>Harga</td>
      <td>:</td>
      <td><input type="number" name="harga" class="field-style field-full align-none" value="<?=$harga?>"></td>
    </tr>
    <tr>
      <td>Merk</td>
      <td>:</td>
      <td><input type="text" name="merk" class="field-style field-full align-none" value="<?=$merk?>"></td>
    </tr>
    <tr>
      <td>Deskripsi</td>
      <td>:</td>
      <td><textarea name="deskripsi" rows="10" cols="30"> <?php echo "$deskripsi"; ?></textarea></td>
    </tr>
    <tr>
      <td>Gambar</td>
      <td>:</td>
      <td> <?php echo '<img  class="img-fluid eaaa" id="blah" alt="Cinque Terre" src="data:image/jpeg;base64,'.base64_encode( $key->gambar).'"/>'; ?><input  onchange="readURL(this);" type="file" name="gambar" class="field-style field-full align-none"></td>
    </tr>
      <tr>
      <td colspan="3" rowspan="">
        <center>
          <input type="submit" name="submit" value="INPUT"></center>
      </td>
    </tr>
  </table>
  </form>
  
      <hr>  
      
    <!--   sampaisini -->
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






