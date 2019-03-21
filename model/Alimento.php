<? php
	class Alimetno{
		private $nome; // $n
		private $quantidade; //$q
		private $tipoMedida; //$t

		function __construct(){
			$nome = $n;
			$quantidade = $q;
			$tipoMedida = $t;
		}

		public getNome(){
			return $nome;
		}

		public getQuantidade(){
			return $quantidade;

		}

		public retiraQtd($qtd){
			if($qtd <= 0){
				return;
			}
			quantidade = quantidade - $qtd;
		}

		public getTipoMedida(){
			return $tipoMedida;
		}


	}