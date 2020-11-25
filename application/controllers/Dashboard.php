<?php 
	class Dashboard	extends CI_Controller{
		public function index(){
			$data['title']="Dashboard";
			$buku=$this->db->query("SELECT * FROM buku");
			$anggota=$this->db->query("SELECT * FROM anggota");
			$petugas=$this->db->query("SELECT * FROM petugas");
			$peminjaman=$this->db->query("SELECT * FROM peminjaman");
			$data['buku']=$buku->num_rows();
			$data['anggota']=$anggota->num_rows();
			$data['petugas']=$petugas->num_rows();
			$data['peminjaman']=$peminjaman->num_rows();
			$this->load->view('header',$data);
			$this->load->view('sidebar');
			$this->load->view('dashboard/index',$data);
			$this->load->view('footer');
		}
	}
?>