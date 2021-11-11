<?php 
session_start();
require "banco.php";


$lista_tarefas = buscar_tarefas($conexao);

if(array_key_exists('nome', $_GET) && $_GET['nome'] != ''){

  $tarefa = [
    'nome' => $_GET['nome'],
    'descricao' => '',
    'prazo' => '',
    'prioridade' => $_GET['prioridade'],
    'concluida' => '',
  ];

  if(array_key_exists('descricao', $_GET)) {
    $tarefa['descricao'] = $_GET['descricao'];
  }
  if(array_key_exists('prazo', $_GET)) {
    $tarefa['prazo'] = $_GET['prazo'];
  }
  if	(array_key_exists('concluida',	$_GET))	{
    $tarefa['concluida']	=	$_GET['concluida'];
  }

  //$_SESSION['lista_tarefas'][]	=	$tarefa;
  gravar_tarefa($conexao, $tarefa);
}


include "template.php";

