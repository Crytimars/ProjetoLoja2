<?php
/**
* 
*/
abstract class Produto {
	private $id;
	private $nome;
	private $preco;
	private $descricao;
	private $categoria;
	private $usado;
	private $tipoProduto;
	private $isbn;

	function __construct ($nome, $preco, $descricao, Categoria $categoria, $usado){
		$this->nome = $nome;
		$this->preco = $preco;
		$this->descricao = $descricao;
		$this->categoria = $categoria;
		$this->usado = $usado;
	}

	function __toString(){
		return $this->nome." - R$ ".$this->preco;
	}
	abstract public function atualizaBaseadoEm($params);

	public function precoComDesconto($valor){
		if($valor > 0 && $valor <= 0.5){
			$this->preco - ($this->preco * $valor);
		}
		return $this->preco;
	}

	public function temIsbn(){
		return $this instanceof Livro;
	}

	public function temTaxaImpressao(){
		return $this instanceof LivroFisico;
	}

	public function temWaterMark(){
		return $this instanceof Ebook;
	}

	public function calculaImposto(){
		return $this->preco * 0.195;
	}

	public function getId(){
		return $this->id;
	}
	public function setId($id){
		$this->id = $id;
	}

	public function getNome(){
		return $this->nome;
	}
	
	public function getPreco(){
		return $this->preco;
	}

	public function getDescricao(){
		return $this->descricao;
	}

	public function getCategoria(){
		return $this->categoria;
	}

	public function getUsado(){
		return $this->usado;
	}
	public function setUsado($usado){
		$this->usado = $usado;
	}

	public function getTipoProduto(){
		return $this->tipoProduto;
	}
	public function setTipoProduto($tipoProduto){
		$this->tipoProduto = $tipoProduto;
	}

	public function getIsbn(){
		return $this->isbn;
	}
	public function setIsbn($isbn){
		$this->isbn = $isbn;
	}
}

?>