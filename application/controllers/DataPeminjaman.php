<?php 
	class dataPeminjaman extends CI_Controller{
	public function index(){
		$data['title']="Data Peminjaman";
		$data['Peminjaman']=$this->bukuModel->get_data('Peminjaman')->result();
		$this->load->view('header',$data);
		$this->load->view('sidebar');
		$this->load->view('Peminjaman/index',$data);
		$this->load->view('footer');
	}

	public function tampilPeminjaman(){
        $data['Peminjaman']=$this->bukuModel->get_data('Peminjaman')->result();
        $this->load->view('Peminjaman/tablePeminjaman',$data);
    }

    function tambah(){
        $data['Anggota']=$this->bukuModel->get_data('anggota')->result();
        $data['Buku']=$this->bukuModel->get_data('buku')->result();
        $data['Petugas']=$this->bukuModel->get_data('petugas')->result();
        $this->load->view('Peminjaman/tambah',$data);
    }

    function simpanPeminjaman(){
        $idPeminjaman=$this->input->post('idPeminjaman');
        $idAnggota=$this->input->post('idAnggota');
        $idBuku=$this->input->post('idBuku');
        $idPetugas=$this->input->post('idPetugas');
        $jmlhPeminjaman=$this->input->post('jmlhPinjam');
        $tglPinjam=$this->input->post('tglPinjam');
        $tglkembali=$this->input->post('tglKembali');
        $Status=$this->input->post('statusBuku');
        $a_procedure="CALL masterProcPeminjaman(?,?,?,?,?,?,?,?,?,?)";
        $a_result=$this->db->query($a_procedure,array($idPeminjaman,$idAnggota,$idBuku,$idPetugas,$jmlhPeminjaman,$tglPinjam,$tglkembali,$Status,'','Insert'));
    }

    function edit(){
        $idPeminjaman=$this->input->post('idPeminjaman');
        $data['Anggota']=$this->bukuModel->get_data('anggota')->result();
        $data['Buku']=$this->bukuModel->get_data('buku')->result();
        $data['Petugas']=$this->bukuModel->get_data('petugas')->result();
        $data['hasil']=$this->bukuModel->GetidPeminjaman($idPeminjaman);
        $this->load->view('Peminjaman/edit',$data);
    }

    function editPeminjaman(){
        $idPeminjaman=$this->input->post('idPeminjaman-baru');
        $idAnggota=$this->input->post('idAnggota');
        $idBuku=$this->input->post('idBuku');
        $idPetugas=$this->input->post('idPetugas');
        $jmlhPeminjaman=$this->input->post('jmlhPinjam');
        $tglPinjam=$this->input->post('tglPinjam');
        $tglkembali=$this->input->post('tglKembali');
        $Status=$this->input->post('statusBuku');
        $idPeminjamanLama=$this->input->post('idPeminjaman-lama');
        $a_procedure="CALL masterProcPeminjaman(?,?,?,?,?,?,?,?,?,?)";
        $a_result=$this->db->query($a_procedure,array($idPeminjaman,$idAnggota,$idBuku,$idPetugas,$jmlhPeminjaman,$tglPinjam,$tglkembali,$Status,$idPeminjamanLama,'Update'));
    }

    function hapus(){
        $idPeminjaman=$this->input->post('idPeminjaman');
        $data['hasil']=$this->bukuModel->GetidPeminjaman($idPeminjaman);
        $this->load->view('Peminjaman/hapus',$data);
    }

    function hapusPeminjaman(){
        $idPeminjaman=$this->input->post('idPeminjaman');
        $a_procedure="CALL masterProcPeminjaman(?,?,?,?,?,?,?,?,?,?)";
        $a_result=$this->db->query($a_procedure,array($idPeminjaman,'','','','','','','','','Delete'));
    }

	}
?>