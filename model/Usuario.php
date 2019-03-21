<?php 
	class Usuario{
		private $nome; //n
		private $email; // e
		private $datanasc; //dt
		private $sexo; //sx

		function __construct($n, $e, $dt, $sx){
			$nome = $n;
			$email = $e;
			$datanasc = $dt;
			$sexo = $sx;
		}

		public function getNome(){
			return this->$nome;
		}

		public function getEmail(){
			return this -> $email;
		}


	}
 ?>