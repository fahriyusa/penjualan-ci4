<?php
class M_kategori extends CI_Model
{

	function hapus_kategori($kode)
	{
		$hsl = $this->db->query("DELETE FROM tbl_kategori WHERE kategori_id='$kode'");
		return $hsl;
	}

	function update_kategori($kode, $kat)
	{
		$hsl = $this->db->query("UPDATE tbl_kategori SET kategori_nama='$kat' where kategori_id='$kode'");
		return $hsl;
	}

	function tampil_kategori()
	{
		$hsl = $this->db->query("SELECT * FROM tbl_kategori order by kategori_id desc");
		return $hsl;
	}

	function simpan_kategori($kat)
	{
		$hsl = $this->db->query("INSERT INTO tbl_kategori(kategori_nama) VALUES ('$kat')");
		return $hsl;
	}

}