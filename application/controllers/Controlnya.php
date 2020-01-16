<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Controlnya extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function __construct()
	{
		parent::__construct();
		$this->load->model('modelnya');
	}

	public function index()
	{
		$data['content'] = $this->modelnya->datasemua();
		$this->load->view('tambahan/style');
		$this->load->view('tambahan/navbar');
		$this->load->view('tambahan/slider');
		$this->load->view('halaman',$data);
		$this->load->view('tambahan/footer');
	}

	public function admin()
	{
		$this->load->view('tambahan/style');
		$this->load->view('tambahan/navbar');
		$this->load->view('tambahan/slider');
		$this->load->view('loginadmin');
		$this->load->view('tambahan/footer');
	}

	
	public function proses2()
	{
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$cek = array(
			'username' => $username,
			'pass' => $password
			);
		$cek = $this->modelnya->cek_login2($cek)->num_rows();
		if($cek > 0){
			$data = array(
				'namaadmin' => $username,
				'status' => 'login'
				);
 
			$this->session->set_userdata($data);
 
			redirect('controlnya');
 
		}else{
			$this->load->view('tambahan/style');
			$this->load->view('tambahan/navbar');
			$this->load->view('tambahan/slider');
			$this->load->view('loginadmin');
			$this->load->view('tambahan/footer');

		}
	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect('controlnya');
	}
	

	public function delete($pid)
	{
		$pid = $pid;
		$this->modelnya->aksidelete($pid);
		redirect('controlnya','refresh');
	}
	
	public function cari()
	{
	
		$cariin=$this->input->post('cariin');
		$this->modelnya->cari($cariin);

		$data['content'] = $this->modelnya->cari($cariin);
		$this->load->view('tambahan/style');
		$this->load->view('tambahan/navbar');
		$this->load->view('tambahan/slider');
		$this->load->view('halaman',$data);
		$this->load->view('tambahan/footer');
	}

		public function cariinlah($cari)
	{
	
		$cariin=$cari;
		$this->modelnya->cari($cariin);

		$data['content'] = $this->modelnya->cari($cariin);
		$this->load->view('tambahan/style');
		$this->load->view('tambahan/navbar');
		$this->load->view('tambahan/slider');
		$this->load->view('halaman',$data);
		$this->load->view('tambahan/footer');
	}

	public function detail($pid)
	{
		$data['content'] = $this->modelnya->detail($pid);
		$this->load->view('tambahan/style');
		$this->load->view('tambahan/navbar');
		$this->load->view('tambahan/slider');
		$this->load->view('detail',$data);		
		$this->load->view('tambahan/footer');
	}

	public function beli($pid)
	{
		$id=$pid;
		$data['content'] = $this->modelnya->detail($id);
		$this->load->view('tambahan/style');
		$this->load->view('tambahan/navbar');
		$this->load->view('tambahan/slider');
		$this->load->view('detail',$data);		
		$this->load->view('tambahan/footer');
	}

	public function prosesbeli($pid)
	{
		$id=$pid;
		$data['content'] = $this->modelnya->detail($id);	
		$this->load->view('tambahan/style');
		$this->load->view('tambahan/navbar');
		$this->load->view('tambahan/slider');
		$this->load->view('pembayaran',$data);
		$this->load->view('tambahan/footer');		
	}

	public function simpanbeli()
	{
		$data=array(
			'nama_barang' => $this->input->post('nama_barang'),
			'harga' => $this->input->post('harga'),
			'bank' => $this->input->post('bank'),
			'atasnama' => $this->input->post('atasnama'),
			'alamat' => $this->input->post('alamat')			
		);
		
		$this->modelnya->simpanbeli($data);
		$this->load->view('tambahan/style');
		$this->load->view('tambahan/navbar');
		$this->load->view('tambahan/slider');
		$this->load->view('selesai');
		$this->load->view('tambahan/footer');
	}

	private function pemesan()
	{
		return $data['content'] = $this->modelnya->pemesan();
	}

	public function tambahdata()
	{
		$this->load->view('tambahan/style');
		$this->load->view('tambahan/navbar');
		$this->load->view('tambahan/slider');
		$this->load->view('tambahdata');
		$this->load->view('tambahan/footer');

	}

	public function masukkan()
	{
		
			$gambarr=$_FILES['gambarr']['tmp_name'];			
			
			

			$data = array
					(
						'pid' => $this->input->post('pid'),
					 	'nama_barang' => $this->input->post('nama_barang'),
					 	'harga'=> $this->input->post('harga'),
					 	'merk' => $this->input->post('merk'),
					 	'deskripsi'=>$this->input->post('deskripsi'),
					 	'gambar'=> $gambarr
					 );

			 $this->modelnya->simpanproduk($data,$gambarr);


		redirect('controlnya','refresh');
	}
	public function edit($pid)
	{
		$pid=$pid;
		
		$data['content'] = $this->modelnya->editproduk($pid);
		$this->load->view('tambahan/style');
		$this->load->view('editdata',$data);
	}
	public function prosesedit()
	{
			$pidedit=$this->input->post('pidedit');
			$pid = $this->input->post('pid');
			$nama_barang = $this->input->post('nama_barang');
			$harga = $this->input->post('harga');
			$merk = $this->input->post('merk');
			$deskripsi = $this->input->post('deskripsi');
			$gambar=$_FILES['gambar']['tmp_name'];			
			$imgcontent = addslashes(file_get_contents($gambar));
			if ($gambar=="") {
				# code...
				$this->db->query("UPDATE produk SET pid='$pid',nama_barang='$nama_barang',harga=$harga,merk='$merk',deskripsi='$deskripsi' WHERE pid='$pidedit'");
			}
			else
			{
					$this->db->query("UPDATE produk SET pid='$pid',nama_barang='$nama_barang',harga=$harga,merk='$merk',deskripsi='$deskripsi',gambar='$imgcontent' WHERE pid='$pidedit'");
			}

		redirect('controlnya');
	}
		
}