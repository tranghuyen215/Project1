<?php
class Banner extends Application {

	private $_table = 'banners';
	private $_table_2 = 'advs';
	public $_path = 'media/banner/';
	public $_path2 = 'media/adv/';
	
	
	
	
		
	public function getBanners() {
		$sql = "SELECT * FROM `{$this->_table}`
				ORDER BY `id` ASC";
		return $this->db->fetchAll($sql);
	}
	
	
	
	
	
	
	public function getBanner($id) {
		$sql = "SELECT * FROM `{$this->_table}`
				WHERE `id` = '".$this->db->escape($id)."'";
		return $this->db->fetchOne($sql);
	}
	
	
	
	
	
	
	
	
		
	public function addProduct($params = null) {
		if (!empty($params)) {
			$this->db->prepareInsert($params);
			$out = $this->db->insert($this->_table);
			$this->_id = $this->db->_id;
			return $out;
		}
		return false;
	}
	
	
	
	
	
	
	
	
public function updateProduct($params = null, $id = null) {
		if (!empty($params) && !empty($id)) {
			$this->db->prepareUpdate($params);
			return $this->db->update($this->_table, $id);
		}
	}
	
	
	
	
	
	
	
	
	public function duplicateBanner($name = null, $id = null) {
		if (!empty($name)) {
			$sql  = "SELECT * FROM `{$this->_table}`
					WHERE `name` = '".$this->db->escape($name)."'";
			$sql .= !empty($id) ? 
					" AND `id` != '".$this->db->escape($id)."'" : 
					null;
			return $this->db->fetchOne($sql);
		}
		return false;
	}
	
	
	
	
	
	
	
	
	
	public function removeBanner($id = null) {
		if (!empty($id)) {
			$sql = "DELETE FROM `{$this->_table}`
					WHERE `id` = '".$this->db->escape($id)."'";
			$this->db->query($sql);
		}
		return false;
	}
	// End of Banner 











	// Begin of Advantisment
	public function getAdvs() {
		$sql = "SELECT * FROM `{$this->_table_2}`
				ORDER BY `id` ASC";
		return $this->db->fetchAll($sql);
	}
	
	
	
	
	
	
	public function getAdv($id) {
		$sql = "SELECT * FROM `{$this->_table_2}`
				WHERE `id` = '".$this->db->escape($id)."'";
		return $this->db->fetchOne($sql);
	}
	
	
	
	
	
	
	
	
	public function addAdv($name = null) {
		if (!empty($name)) {
			$sql = "INSERT INTO `{$this->_table_2}`
					(`name`) VALUES ('".$this->db->escape($name)."')";
			return $this->db->query($sql);
		}
	}
	
	
	
	
	
	
	
	
	
	public function updateAdv($name = null, $id = null) {
		if (!empty($name) && !empty($id)) {
			$sql = "UPDATE `{$this->_table_2}`
					SET `name` = '".$this->db->escape($name)."'
					WHERE `id` = '".$this->db->escape($id)."'";
			return $this->db->query($sql);
		}
		return false;
	}
	
	
	
	
	
	
	
	
	
	
	public function duplicateAdv($name = null, $id = null) {
		if (!empty($name)) {
			$sql  = "SELECT * FROM `{$this->_table_2}`
					WHERE `name` = '".$this->db->escape($name)."'";
			$sql .= !empty($id) ? 
					" AND `id` != '".$this->db->escape($id)."'" : 
					null;
			return $this->db->fetchOne($sql);
		}
		return false;
	}
	
	
	
	
	
	
	
	
	
	public function removeAdv($id = null) {
		if (!empty($id)) {
			$sql = "DELETE FROM `{$this->_table_2}`
					WHERE `id` = '".$this->db->escape($id)."'";
			$this->db->query($sql);
		}
		return false;
	}
	
	
	
	
	
	
	
	

	
	

	
	
	
	
	
	
	
	
	
	
	
	

}