<?php 

defined('BASEPATH') or exit('No direct script access allowed');

class modelnya extends CI_Model{

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	public function datasemua()
	{
		$data = $this->db->get('produk');
		return $data->result();
	}

	public function cek_login2($cek)
	{
		return $this->db->get_where('admin', $cek);
	}

	public function aksidelete($pid)
	{
		$this->db->where('pid', $pid);
		$this->db->delete('produk');
	}

	public function editproduk($pid)
	{
		$this->db->where('pid', $pid);
			$data = $this->db->get('produk');
		return $data->result();
	}
	
	public function cari($cariin)
	{
		$this->db->like('merk', $cariin); 
		$this->db->or_like('nama_barang', $cariin);
		$data = $this->db->get('produk');
		return $data->result();
	}

	public function detail($pid)
	{
			$this->db->where('pid', $pid);
			$data = $this->db->get('produk');
			return $data->result();
	}

	public function simpanbeli($data)
	{
		$this->db->insert('pembelian',$data);
	}
	
	public function pemesan()
	{
		$data = $this->db->get('pembelian');
		return $data->result();
	}

	public function simpanproduk($data,$gambar)
	{

		
			$pid = $data['pid'];
			$nama_barang = $data['nama_barang'];
			$harga = $data['harga'];
			$merk = $data['merk'];
			$deskripsi = $data['deskripsi'];			
			$imgcontent = addslashes(file_get_contents($gambar));
		
		$this->db->insert('produk',$data);			 		
	    $this->db->query(" UPDATE produk SET gambar = '$imgcontent' where pid = '$pid' " );
	}

}
