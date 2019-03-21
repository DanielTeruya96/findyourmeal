<?php
	
	/**
	 * 
	 */
	class Receita{
		private $nome; // $n
		private $modoDePreparo; //$m
		private $ingredientes; //$ig


		function __construct($n)
		{
			$nome = $n;
			
		}

		public function getNome(){
			return $nome;
		}

		public function setIngredientes($ig){
			array_push($ingredientes, $ig);
		}









	}