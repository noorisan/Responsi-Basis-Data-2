<?php 
	class dataBuku extends CI_Controller{
	public function index(){
		$data['title']="Data Buku";
		$this->load->view('header',$data);
		$this->load->view('sidebar');
		$this->load->view('Buku/index',$data);
		$this->load->view('footer');
	}

	public function tampilBuku(){
        $data['buku']=$this->bukuModel->get_data('buku')->result();
        $this->load->view('Buku/tableBuku',$data);
    }

    function tambah(){
        $aksi=$this->input->post('aksi');
        $this->load->view('Buku/tambah',$aksi);
    }

    function simpanBuku(){
        $idBuku=$this->input->post('idBuku');
        $namaBuku=$this->input->post('namaBuku');
        $jenisBuku=$this->input->post('jenisBuku');
        $Pengarang=$this->input->post('Pengarang');
        $tahunTerbit=$this->input->post('tahunTerbit');
        $ISBN=$this->input->post('ISBN');
        $jmlhBuku=$this->input->post('jmlhBuku');
        $a_procedure="CALL masterProcBuku(?,?,?,?,?,?,?,?,?)";
        $a_result=$this->db->query($a_procedure,array($idBuku,$namaBuku,$jenisBuku,$Pengarang,$tahunTerbit,$ISBN,$jmlhBuku,'','Insert'));
    }

    function edit(){
        $idBuku=$this->input->post('idBuku');
        $data['hasil']=$this->bukuModel->GetidBuku($idBuku);
        $this->load->view('Buku/edit',$data);
    }

    function editBuku(){
        $idBuku=$this->input->post('idBuku-baru');
        $namaBuku=$this->input->post('namaBuku');
        $jenisBuku=$this->input->post('jenisBuku');
        $Pengarang=$this->input->post('Pengarang');
        $tahunTerbit=$this->input->post('tahunTerbit');
        $ISBN=$this->input->post('ISBN');
        $jmlhBuku=$this->input->post('jmlhBuku');
        $idBukuLama=$this->input->post('idBuku-lama');
        $a_procedure="CALL masterProcBuku(?,?,?,?,?,?,?,?,?)";
        $a_result=$this->db->query($a_procedure,array($idBuku,$namaBuku,$jenisBuku,$Pengarang,$tahunTerbit,$ISBN,$jmlhBuku,$idBukuLama,'Update'));
    }

    function hapus(){
        $idBuku=$this->input->post('idBuku');
        $data['hasil']=$this->bukuModel->GetidBuku($idBuku);
        $this->load->view('Buku/hapus',$data);
    }

    function hapusBuku(){
        $idBuku=$this->input->post('idBuku');
        $a_procedure="CALL masterProcBuku(?,?,?,?,?,?,?,?,?)";
        $a_result=$this->db->query($a_procedure,array($idBuku,'','','','','','','','Delete'));
    }

	}
?>