<?php 
	class dataProperty extends CI_Controller{
	public function index(){
		$data['title']="Data Anggota";
		$data['Property']=$this->SalesModel->get_data('produk')->result();
		$this->load->view('header',$data);
		$this->load->view('sidebar');
		$this->load->view('Property/index',$data);
		$this->load->view('footer');
	}

	public function tampilProperty(){
        $data['Property']=$this->SalesModel->get_data('produk')->result();
        $this->load->view('Property/tableProperty',$data);
    }

    function tambah(){
        $aksi=$this->input->post('aksi');
        $this->load->view('Property/tambah',$aksi);
    }

    function simpanProperty(){
        $data = array(
            'idProduk'=>$this->input->post('idProduk'),
            'namaProduk'=>$this->input->post('namaProduk'),
            'stockProduk'=>$this->input->post('stockProduk'),
            'hargaProduk'=>$this->input->post('hargaProduk')
            );
        $this->db->insert('produk',$data);
    }

    function edit(){
        $idProduk=$this->input->post('idProduk');
        $data['hasil']=$this->SalesModel->GetidProperty($idProduk);
        $this->load->view('Property/edit',$data);
    }

    function editProperty(){
        $data = array(
            'idProduk'=>$this->input->post('idProduk-baru'),
            'namaProduk'=>$this->input->post('namaProduk'),
            'stockProduk'=>$this->input->post('stockProduk'),
            'hargaProduk'=>$this->input->post('hargaProduk')
		);
        $idProduk = $this->input->post('idProduk-lama');
        $this->db->where('idProduk', $idProduk);
        $this->db->update('produk',$data);
    }

    function hapus(){
        $idProduk=$this->input->post('idProduk');
        $data['hasil']=$this->SalesModel->GetidProperty($idProduk);
        $this->load->view('Property/hapus',$data);
    }

    function hapusProperty(){
        $idProduk=$this->input->post('idProduk');
        $this->db->delete('produk',array('idProduk' => $idProduk));
    }

	}
?>