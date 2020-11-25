<?php 
	class dataSale extends CI_Controller{
	public function index(){
		$data['title']="Data Peminjaman";
		$data['Sale']=$this->SalesModel->get_data('Sale')->result();
		$this->load->view('header',$data);
		$this->load->view('sidebar');
		$this->load->view('Sale/index',$data);
		$this->load->view('footer');
	}

	public function tampilSale(){
        $data['Sale']=$this->SalesModel->get_data('Sale')->result();
        $this->load->view('Sale/tableSale',$data);
    }

    function tambah(){
        $aksi=$this->input->post('aksi');
        $this->load->view('Sale/tambah',$aksi);
    }

    function simpanSale(){
        // $data = array(
        //     'idSale'=>$this->input->post('idSale'),
        //     'idSalesman'=>$this->input->post('idSalesman'),
        //     'idProduk'=>$this->input->post('idProduk'),
        //     'idCustomer'=>$this->input->post('idCustomer'),
        //     'date'=>$this->input->post('date'),
        //     'jumlahSale'=>$this->input->post('jumlahSale')
        //     );
            $idSale=$this->input->post('idSale');
            $idSalesman=$this->input->post('idSalesman');
            $idProduk=$this->input->post('idProduk');
            $idCustomer=$this->input->post('idCustomer');
            $date=$this->input->post('date');
            $jumlahSale=$this->input->post('jumlahSale');
        // $this->db->insert('sale',$data);
        $a_procedure="CALL input(?,?,?,?,?,?)";
        $a_result=$this->db->query($a_procedure,array($idSale,$idSalesman,$idProduk,$idCustomer,$date,$jumlahSale));
       
        // $this->db->call('sale',$data);
    }

    function edit(){
        $idSale=$this->input->post('idSale');
        $data['hasil']=$this->SalesModel->GetidSale($idSale);
        $this->load->view('Sale/edit',$data);
    }

    function editSale(){
        $data = array(
            'idSale'=>$this->input->post('idSale-baru'),
            'idSalesman'=>$this->input->post('idSalesman'),
            'idProduk'=>$this->input->post('idProduk'),
            'idCustomer'=>$this->input->post('idCustomer'),
            'date'=>$this->input->post('date'),
            'jumlahSale'=>$this->input->post('jumlahSale'),
            'totalBayar'=>$this->input->post('totalBayar')
		);
        $idSale = $this->input->post('idSale-lama');
        $this->db->where('idSale', $idSale);
        $this->db->update('Sale',$data);
    }

    function hapus(){
        $idSale=$this->input->post('idSale');
        $data['hasil']=$this->SalesModel->GetidSale($idSale);
        $this->load->view('Sale/hapus',$data);
    }

    function hapusSale(){
        $idSale=$this->input->post('idSale');
        $this->db->delete('Sale',array('idSale' => $idSale));
    }

	}
?>