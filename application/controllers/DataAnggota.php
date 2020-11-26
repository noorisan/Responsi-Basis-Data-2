<?php 
	class dataAnggota extends CI_Controller{
	public function index(){
		$data['title']="Data Anggota";
		$data['Anggota']=$this->bukuModel->get_data('anggota')->result();
		$this->load->view('header',$data);
		$this->load->view('sidebar');
		$this->load->view('Anggota/index',$data);
		$this->load->view('footer');
	}

	public function tampilAnggota(){
        $data['Anggota']=$this->bukuModel->get_data('Anggota')->result();
        $this->load->view('Anggota/tableAnggota',$data);
    }

    function tambah(){
        $aksi=$this->input->post('aksi');
        $this->load->view('Anggota/tambah',$aksi);
    }

    function simpanAnggota(){
        $idAnggota=$this->input->post('idAnggota');
        $Nama=$this->input->post('Nama');
        $Alamat=$this->input->post('Alamat');
        $noTlepon=$this->input->post('noTlepon');
        $Pekerjaan=$this->input->post('Pekerjaan');
        $a_procedure="CALL masterProcAnggota(?,?,?,?,?,?,?)";
        $a_result=$this->db->query($a_procedure,array($idAnggota,$Nama,$Alamat,$noTlepon,$Pekerjaan,'','Insert'));
    }

    function edit(){
        $idAnggota=$this->input->post('idAnggota');
        $data['hasil']=$this->bukuModel->GetidAnggota($idAnggota);
        $this->load->view('Anggota/edit',$data);
    }

    function editAnggota(){
        $idAnggota=$this->input->post('idAnggota-baru');
        $Nama=$this->input->post('Nama');
        $Alamat=$this->input->post('Alamat');
        $noTlepon=$this->input->post('noTlepon');
        $Pekerjaan=$this->input->post('Pekerjaan');
        $idAnggotaLama=$this->input->post('idAnggota-lama');
        $a_procedure="CALL masterProcAnggota(?,?,?,?,?,?,?)";
        $a_result=$this->db->query($a_procedure,array($idAnggota,$Nama,$Alamat,$noTlepon,$Pekerjaan,$idAnggotaLama,'Update'));
    }

    function hapus(){
        $idAnggota=$this->input->post('idAnggota');
        $data['hasil']=$this->bukuModel->GetidAnggota($idAnggota);
        $this->load->view('Anggota/hapus',$data);
    }

    function hapusAnggota(){
        $idAnggota=$this->input->post('idAnggota');
        $a_procedure="CALL masterProcAnggota(?,?,?,?,?,?,?)";
        $a_result=$this->db->query($a_procedure,array($idAnggota,'','','','','','Delete'));
    }

	}
?>