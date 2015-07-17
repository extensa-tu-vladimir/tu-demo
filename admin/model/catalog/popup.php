<?php
class ModelCatalogPopup extends Model {
	public function addPopup($data) {
		$sql = "INSERT INTO " . DB_PREFIX . "popup SET title = '" . $this->db->escape($data['title']) . "', text = '" . $this->db->escape($data['text']) . "'";
		$this->db->query($sql);
	}
}