<?php

abstract class Livro extends Produto {
	private $isbn;

	public function calculaImposto(){
		return $this->getPreco() * 0.065;
	}

	public function getIsbn(){
		return $this->isbn;
	}

	public function setIsbn($isbn){
		$this->isbn = $isbn;
	}
}
?>