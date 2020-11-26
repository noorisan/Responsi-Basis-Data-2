<?php 
	class dataPetugas extends CI_Controller{
	public function index(){
		$data['title']="Data Petugas";
		$data['Petugas']=$this->bukuModel->get_data('Petugas')->result();
		$this->load->view('header',$data);
		$this->load->view('sidebar');
		$this->load->view('Petugas/index',$data);
		$this->load->view('footer');
	}

	public function tampilPetugas(){
        $data['Petugas']=$this->bukuModel->get_data('Petugas')->result();
        $this->load->view('Petugas/tablePetugas',$data);
    }

    function tambah(){
        $aksi=$this->input->post('aksi');
        $this->load->view('Petugas/tambah',$aksi);
    }

    function simpanPetugas(){
        $idPetugas=$this->input->post('idPetugas');
        $Nama=$this->input->post('Nama');
        $Alamat=$this->input->post('Alamat');
        $noTlepon=$this->input->post('noTlepon');
        $a_procedure="CALL masterProcPetugas(?,?,?,?,?,?)";
        $a_result=$this->db->query($a_procedure,array($idPetugas,$Nama,$Alamat,$noTlepon,'','Insert'));
    }

    function edit(){
        $idPetugas=$this->input->post('idPetugas');
        $data['hasil']=$this->bukuModel->GetidPetugas($idPetugas);
        $this->load->view('Petugas/edit',$data);
    }

    function editPetugas(){
        $idPetugas=$this->input->post('idPetugas-baru');
        $Nama=$this->input->post('Nama');
        $Alamat=$this->input->post('Alamat');
        $noTlepon=$this->input->post('noTlepon');
        $idPetugasLama=$this->input->post('idPetugas-lama');
        $a_procedure="CALL masterProcPetugas(?,?,?,?,?,?)";
        $a_result=$this->db->query($a_procedure,array($idPetugas,$Nama,$Alamat,$noTlepon,$idPetugasLama,'Update'));
    }

    function hapus(){
        $idPetugas=$this->input->post('idPetugas');
        $data['hasil']=$this->bukuModel->GetidPetugas($idPetugas);
        $this->load->view('Petugas/hapus',$data);
    }

    function hapusPetugas(){
        $idPetugas=$this->input->post('idPetugas');
        $a_procedure="CALL masterProcPetugas(?,?,?,?,?,?)";
        $a_result=$this->db->query($a_procedure,array($idPetugas,'','','','','Delete'));
    }

	}
?>