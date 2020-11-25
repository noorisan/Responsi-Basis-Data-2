<?php 
class SalesModel extends CI_Model{
	public function get_data($table){
		return $this->db->get($table);
	}

	function Getid($idSalesman = ''){
      return $this->db->get_where('salesman', array('idSalesman' => $idSalesman))->row();
    }
    function GetidBuku($idBuku = ''){
      return $this->db->get_where('Buku', array('idBuku' => $idBuku))->row();
    }
    function GetidProperty($idProduk = ''){
      return $this->db->get_where('produk', array('idProduk' => $idProduk))->row();
    }
    function GetidSale($idSale = ''){
      return $this->db->get_where('sale', array('idSale' => $idSale))->row();
    }
}
?>