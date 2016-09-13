<?php
	namespace Tools\Classes;
	class class_Bok
	{
		protected $titill;
		protected $verd;

		function __construct($titill_bokar, $verd_bokar) {
			$this-> setTitle($titill_bokar);
			$this-> setPrice($verd_bokar);
		}

		public function getPrice() {
			return $this->verd;
		}
		public function getTitle() {
			return $this->titill;
		}
		protected function setPrice($new_verd) {
			$this->verd = $new_verd;
		}
		protected function setTitle($new_titill) {
			$this->titill = $new_titill;
		}
	}
 ?>