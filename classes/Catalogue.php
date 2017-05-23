<?php
class Catalogue extends Application {

	private $_table = 'categories';
	private $_table_2 = 'products';
	private $_table_3 = 'banners';
	public $_path = 'media/catalogue/';
	public $_path_3 = 'media/banner/';
	public static $_currency = 'đ';
	
	
	
	
	
	
	
	
	public function getCategories() {
		$sql = "SELECT * FROM `{$this->_table}`
				ORDER BY `id` ASC";
		return $this->db->fetchAll($sql);
	}
	
	
	
	
	
	
	
	
	public function getCategory($id) {
		$sql = "SELECT * FROM `{$this->_table}`
				WHERE `id` = '".$this->db->escape($id)."'";
		return $this->db->fetchOne($sql);
	}
	
	
	
	
	
	
	
	
	public function addCategory($name = null) {
		if (!empty($name)) {
			$sql = "INSERT INTO `{$this->_table}`
					(`name`) VALUES ('".$this->db->escape($name)."')";
			return $this->db->query($sql);
		}
	}
	
	
	
	
	
	
	
	
	
	public function updateCategory($name = null, $id = null) {
		if (!empty($name) && !empty($id)) {
			$sql = "UPDATE `{$this->_table}`
					SET `name` = '".$this->db->escape($name)."'
					WHERE `id` = '".$this->db->escape($id)."'";
			return $this->db->query($sql);
		}
		return false;
	}
	
	
	
	
	
	
	
	
	
	
	public function duplicateCategory($name = null, $id = null) {
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
	
	
	
	
	
	
	
	
	
	public function removeCategory($id = null) {
		if (!empty($id)) {
			$sql = "DELETE FROM `{$this->_table}`
					WHERE `id` = '".$this->db->escape($id)."'";
			$this->db->query($sql);
		}
		return false;
	}
	
	
	
	
	
	
	
	
	
	
	
	public function getProducts($cat) {
		$sql = "SELECT * FROM `{$this->_table_2}`
				WHERE `category` = '".$this->db->escape($cat)."'
				ORDER BY `date` DESC";
		return $this->db->fetchAll($sql);
	}
	
	
	
	
	
	 
	
	
	
	public function getProduct($id) {
		$sql = "SELECT * FROM `{$this->_table_2}`
				WHERE `id` = '".$this->db->escape($id)."'";
		return $this->db->fetchOne($sql);
	}
	
	
	
	
	
	
	
	
	public function getAllProducts($srch = null) {
		$sql = "SELECT * FROM `{$this->_table_2}`";
		if (!empty($srch)) {
			$srch = $this->db->escape($srch);
			$sql .= " WHERE `name` LIKE '%{$srch}%' || `id` = '{$srch}'";
		}
		$sql .= " ORDER BY `date` DESC";
		return $this->db->fetchAll($sql);
	}
	
	
	
	
	
	public function addProduct($params = null) {
		if (!empty($params)) {
			$params['date'] = Helper::setDate();
			$this->db->prepareInsert($params);
			$out = $this->db->insert($this->_table_2);
			$this->_id = $this->db->_id;
			return $out;
		}
		return false;
	}
	
	
	
	
	
	
	
	public function updateProduct($params = null, $id = null) {
		if (!empty($params) && !empty($id)) {
			$this->db->prepareUpdate($params);
			return $this->db->update($this->_table_2, $id);
		}
	}
	
	
	
	
	
	
	
	
	public function removeProduct($id = null) {
		if (!empty($id)) {
			$product = $this->getProduct($id);
			if (!empty($product)) {
				if (is_file(CATALOGUE_PATH.DS.$product['image'])) {
					unlink(CATALOGUE_PATH.DS.$product['image']);
				}
				$sql = "DELETE FROM `{$this->_table_2}`
						WHERE `id` = '".$this->db->escape($id)."'";
				return $this->db->query($sql);
			}
			return false;
		}
		return false;
	}
	
	
	// banners//


	
	
	
	
	
	
	
	public function getBanner($id) {
		$sql = "SELECT * FROM `{$this->_table_3}`
				WHERE `id` = '".$this->db->escape($id)."'";
		return $this->db->fetchOne($sql);
	}
	
	
	
	
	
	
	
	
	public function getAllBanners($srch = null) {
		$sql = "SELECT * FROM `{$this->_table_3}`";
		if (!empty($srch)) {
			$srch = $this->db->escape($srch);
			$sql .= " WHERE `name` LIKE '%{$srch}%' || `id` = '{$srch}'";
		}
		$sql .= " ORDER BY `id` DESC";
		return $this->db->fetchAll($sql);
	}
	
	
	
	
	
	public function addBanner($params = null) {
		if (!empty($params)) {
			$this->db->prepareInsert($params);
			$out = $this->db->insert($this->_table_3);
			$this->_id = $this->db->_id;
			return $out;
		}
		return false;
	}
	
	
	
	
	
	
	
	public function updateBanner($params = null, $id = null) {
		if (!empty($params) && !empty($id)) {
			$this->db->prepareUpdate($params);
			return $this->db->update($this->_table_3, $id);
		}
	}
	
	
	
	
	
	
	
	
	public function removeBanner($id = null) {
		if (!empty($id)) {
			$banner = $this->getProduct($id);
			if (!empty($banner)) {
				if (is_file(CATALOGUE_PATH.DS.$banner['name'])) {
					unlink(CATALOGUE_PATH.DS.$banner['name']);
				}
				$sql = "DELETE FROM `{$this->_table_3}`
						WHERE `id` = '".$this->db->escape($id)."'";
				return $this->db->query($sql);
			}
			return false;
		}
		return false;
	}
	
	
	
	
	
	
	
	
	
	
	
	
	
	

}