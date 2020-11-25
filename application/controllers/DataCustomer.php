<?php 
	class dataCustomer extends CI_Controller{
	public function index(){
		$data['title']="Data Buku";
		$data['Customer']=$this->SalesModel->get_data('customer')->result();
		$this->load->view('header',$data);
		$this->load->view('sidebar');
		$this->load->view('customer/index',$data);
		$this->load->view('footer');
	}

	public function tampilCustomer(){
        $data['customer']=$this->SalesModel->get_data('customer')->result();
        $this->load->view('customer/tableCustomer',$data);
    }

    function tambah(){
        $aksi=$this->input->post('aksi');
        $this->load->view('Customer/tambah',$aksi);
    }

    function simpanCustomer(){
        $data = array(
            'idCustomer'=>$this->input->post('idCustomer'),
            'namaCustomer'=>$this->input->post('namaCustomer'),
            'alamat'=>$this->input->post('alamat')
            );
        $this->db->insert('customer',$data);
    }

    function edit(){
        $idCustomer=$this->input->post('idCustomer');
        $data['hasil']=$this->SalesModel->GetidCustomer($idCustomer);
        $this->load->view('Customer/edit',$data);
    }

    function editCustomer(){
        $data = array(
            'idCustomer'=>$this->input->post('idCustomer-baru'),
            'namaCustomer'=>$this->input->post('namaCustomer'),
            'alamat'=>$this->input->post('alamat')
		);
        $idCustomer = $this->input->post('idCustomer-lama');
        $this->db->where('idCustomer', $idCustomer);
        $this->db->update('customer',$data);
    }

    function hapus(){
        $idCustomer=$this->input->post('idCustomer');
        $data['hasil']=$this->SalesModel->GetidCustomer($idCustomer);
        $this->load->view('Customer/hapus',$data);
    }

    function hapusCustomer(){
        $idCustomer=$this->input->post('idCustomer');
        $this->db->delete('Customer',array('idCustomer' => $idCustomer));
    }

	}
?>