<?php 
class bukuModel extends CI_Model{
	public function get_data($table){
		return $this->db->get($table);
	}
    function GetidBuku($idBuku = ''){
      return $this->db->get_where('Buku', array('idBuku' => $idBuku))->row();
    }
    function GetidAnggota($idAnggota = ''){
      return $this->db->get_where('Anggota', array('idAnggota' => $idAnggota))->row();
    }
    function GetidPeminjaman($idPeminjaman = ''){
      return $this->db->get_where('Peminjaman', array('idPeminjaman' => $idPeminjaman))->row();
    }
    function GetidPetugas($idPetugas = ''){
      return $this->db->get_where('Petugas', array('idPetugas' => $idPetugas))->row();
    }
}
?>