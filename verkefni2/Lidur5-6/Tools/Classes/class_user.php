<?php
	namespace Tools\Classes;
	class class_user
	{
		protected $password;
		protected $email;

		function __construct($user_email, $user_password) {
			$this-> setEmail($user_email);
			$this-> setPassword($user_password);
		}

		public function getEmail() {
			return $this->email;
		}
		public function getPassword() {
			return $this->password;
		}
		protected function setEmail($new_email) {
			$this->email = $new_email;
		}
		protected function setPassword($new_password) {
			$this->password = $new_password;
		}
	}
 ?>