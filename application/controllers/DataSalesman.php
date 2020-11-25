<?php 
	class dataSalesman extends CI_Controller{
	public function index(){
		$data['title']="Data Salesman";
		$data['salesman']=$this->SalesModel->get_data('salesman')->result();
		$this->load->view('header',$data);
		$this->load->view('sidebar');
		$this->load->view('salesman/index',$data);
		$this->load->view('footer');
	}

	public function tampilSalesman(){
        $data['salesman']=$this->SalesModel->get_data('salesman')->result();
        $this->load->view('salesman/tableSalesman',$data);
    }

    function tambah(){
        $aksi=$this->input->post('aksi');
        $this->load->view('Salesman/tambah',$aksi);
    }

    function simpanSalesman(){
        $data = array(
            'idSalesman'=>$this->input->post('idSalesman'),
            'namaSalesman'=>$this->input->post('namaSalesman'),
            'komisiSalesman'=>$this->input->post('komisiSalesman'),
            'targetSales'=>$this->input->post('targetSales'),
            'produkTerjual'=>$this->input->post('produkTerjual')
            );
            $this->db->insert('salesman',$data);
    }

    function edit(){
        $idSalesman=$this->input->post('idSalesman');
        $data['hasil']=$this->SalesModel->Getid($idSalesman);
        $this->load->view('Salesman/edit',$data);
    }

    function editSalesman(){
        $data = array(
            'idSalesman'=>$this->input->post('idSalesman-baru'),
            'namaSalesman'=>$this->input->post('namaSalesman'),
            'komisiSalesman'=>$this->input->post('komisiSalesman'),
            'targetSales'=>$this->input->post('targetSales'),
            'produkTerjual'=>$this->input->post('produkTerjual')
		);
        $idSalesman = $this->input->post('idSalesman-lama');
        $this->db->where('idSalesman', $idSalesman);
        $this->db->update('salesman',$data);
    }

    function hapus(){
        $idSalesman=$this->input->post('idSalesman');
        $data['hasil']=$this->SalesModel->Getid($idSalesman);
        $this->load->view('salesman/hapus',$data);
    }

    function hapusSalesman(){
        $idSalesman=$this->input->post('idSalesman');
        $this->db->delete('salesman',array('idSalesman' => $idSalesman));
    }

	}
?>