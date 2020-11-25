<?php 
	class Dashboard	extends CI_Controller{
		public function index(){
			$data['title']="Dashboard";
			$customer=$this->db->query("SELECT * FROM customer");
			$salesman=$this->db->query("SELECT * FROM salesman");
			$produk=$this->db->query("SELECT * FROM produk");
			$sale=$this->db->query("SELECT * FROM sale");
			$data['customer']=$customer->num_rows();
			$data['salesman']=$salesman->num_rows();
			$data['produk']=$produk->num_rows();
			$data['sale']=$sale->num_rows();
			$this->load->view('header',$data);
			$this->load->view('sidebar');
			$this->load->view('dashboard/index',$data);
			$this->load->view('footer');
		}
	}
?>