<?php
class ModelCatalogPopup extends Model {
	public function getPopup() {
		$query = $this->db->query("SELECT * FROM " . DB_PREFIX . "popup ORDER BY popup_id DESC LIMIT 1");

		return $query->row;
	}
}