<?php
require_once("conect.php");
function insereProduto($conexao, $produto, $preco, $descricao, $categoriaId, $usado){
	$produto = mysqli_real_escape_string($conexao, $produto);
	$descricao = mysqli_real_escape_string($conexao, $descricao);
	$preco = mysqli_real_escape_string($conexao, $preco);

	$query = "INSERT into produtos (produto_nome, produto_preco, produto_descricao, categoria_Id, produto_usado) 
			  VALUES ('{$produto}', {$preco}, '{$descricao}', {$categoriaId}, {$usado})";
	$resultado = mysqli_query($conexao, $query);
	return $resultado;
}

function listaProdutos($conexao){
	$query = "SELECT p.*, c.categoria_nome 
			  FROM produtos p
			  JOIN categorias c on p.categoria_Id= c.categoria_Id
			  ORDER BY p.produto_Id";

	$produtos = array();
	$resultado = mysqli_query($conexao, $query);

	while ($produto = mysqli_fetch_assoc($resultado)){
		array_push($produtos, $produto);		
	}
	return $produtos;
}

function buscaProduto($conexao, $id){
	$query = "SELECT * FROM produtos WHERE produto_Id = {$id}";
	$resultado = mysqli_query($conexao, $query);
	return mysqli_fetch_assoc($resultado);;
}

function alteraProduto($conexao, $id, $produto, $preco, $descricao, $categoriaId, $usado){
	$query = "UPDATE produtos
	          SET produto_nome = '{$produto}', produto_preco = {$preco}, produto_descricao = '{$descricao}', categoria_Id = {$categoriaId}, produto_usado = '{$usado}'
			  WHERE produto_Id = {$id}";
	$resultado = mysqli_query($conexao, $query);
	return $resultado;
}
function removeProduto($conexao, $id){
	$query = "DELETE FROM produtos 
			  WHERE produto_Id = {$id}";
	return mysqli_query($conexao, $query);
}