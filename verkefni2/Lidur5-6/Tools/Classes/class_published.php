<?php 
	namespace Tools\Classes;

	$classloader = 'classLoader.php';
	if (is_readable($classloader)) {
		require_once($classloader);
	}

	class class_published extends class_Bok{
		function __construct($titill, $verd, $utgefandi){
			parent::__construct($titill, $verd);
			$this -> setPublisher($utgefandi);
		}
		protected $Utgefandi;
		public function getPublisher(){
			return $this -> Publisher;
		}
		public function setPublisher($utgefandi){
			$this -> Publisher = $utgefandi;
		}
	}
?>