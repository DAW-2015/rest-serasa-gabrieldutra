<?php
require 'Slim/Slim.php';
\Slim\Slim::registerAutoloader();
require 'connection.php';
require 'clienteDAO.php';
require 'estadoDAO.php';

$app = new \Slim\Slim();
$app->response()->header('Content-Type', 'application/json;charset=utf-8');

$app->get('/clientes/:cpf', function ($cpf) {
  //recupera o cliente
  $cliente = ClienteDAO::getClienteByCPF($cpf);
  echo json_encode($cliente);
});

$app->get('/clientes', function() {
  // recupera todos os clientes
  $clientes = ClienteDAO::getAll();
  echo json_encode($clientes);
});

$app->post('/clientes', function() {
  // recupera o request
  $request = \Slim\Slim::getInstance()->request();

  // insere o cliente
  $novoCliente = json_decode($request->getBody());
  $novoCliente = ClienteDAO::addCliente($novoCliente);

  echo json_encode($novoCliente);
});

$app->put('/clientes/:id', function ($id) {
  // recupera o request
  $request = \Slim\Slim::getInstance()->request();

  // atualiza o cliente
  $cliente = json_decode($request->getBody());
  $cliente = ClienteDAO::updateCliente($cliente, $id);

   echo json_encode($cliente);
});

$app->delete('/clientes/:id', function($id) {
  // exclui o cliente
  $isDeleted = ClienteDAO::deleteCliente($id);

  // verifica se houve problema na exclusão
  if ($isDeleted) {
    echo "{\"message\": \"Cliente excluído\"}";
  } else {
    echo "{\"message\": \"Erro ao excluir cliente\"}";
  }
});

$app->get('/estados/:id', function ($id) {
  //recupera o estado
  $estado = EstadoDAO::getEstadoById($id);
  echo json_encode($estado);
});

$app->get('/estados', function() {
  // recupera todos os clientes
  $estados = EstadoDAO::getAll();
  echo json_encode($estados);
});

$app->post('/estados', function() {
  // recupera o request
  $request = \Slim\Slim::getInstance()->request();

  // insere o estado
  $novoEstado = json_decode($request->getBody());
  $novoEstado = EstadoDAO::addEstado($novoEstado);
  
  if ($novoEstado) {
    echo "{\"message\": \"Estado adicionado\"}";
  } else {
    echo "{\"message\": \"Erro ao adicionar estado\"}";
  }
});

$app->put('/estados/:id', function ($id) {
  // recupera o request
  $request = \Slim\Slim::getInstance()->request();

  // atualiza o cliente
  $estado = json_decode($request->getBody());
  $estado = EstadoDAO::updateEstado($estado, $id);

   if ($estado) {
    echo "{\"message\": \"Estado alterado\"}";
  } else {
    echo "{\"message\": \"Erro ao alterar estado\"}";
  }
});

$app->delete('/estados/:id', function($id) {
  // exclui o cliente
  $isDeleted = EstadoDAO::deleteEstado($id);

  // verifica se houve problema na exclusão
  if ($isDeleted) {
    echo "{\"message\": \"Cidade excluído\"}";
  } else {
    echo "{\"message\": \"Erro ao excluir cidade\"}";
  }
});

$app->get('/cidades/:id', function ($id) {
  //recupera o estado
  $cidade = CidadeDAO::getCidadeById($id);
  echo json_encode($cidade);
});


$app->get('/cidades', function() {
  // recupera todos os clientes
  $cidades = CidadeDAO::getAll();
  echo json_encode($cidades);
});

$app->post('/cidades', function() {
  // recupera o request
  $request = \Slim\Slim::getInstance()->request();

  // insere o estado
  $novaCidade = json_decode($request->getBody());
  $novaCidade = CidadeDAO::addCidade($novaCidade);

  if ($novaCidade) {
    echo "{\"message\": \"Cidade adicionada\"}";
  } else {
    echo "{\"message\": \"Erro ao adicionar cidade\"}";
  }
});

$app->put('/cidades/:id', function ($id) {
  // recupera o request
  $request = \Slim\Slim::getInstance()->request();

  // atualiza o cliente
  $cidade = json_decode($request->getBody());
  $cidade = CidadeDAO::updateCidade($cidade, $id);

   if ($cidade) {
    echo "{\"message\": \"Cidade alterada\"}";
  } else {
    echo "{\"message\": \"Erro ao alterar cidade\"}";
  }
});

$app->delete('/cidades/:id', function($id) {
  // exclui o cliente
  $isDeleted = CidadeDAO::deleteCidade($id);

  // verifica se houve problema na exclusão
  if ($isDeleted) {
    echo "{\"message\": \"Cidade excluído\"}";
  } else {
    echo "{\"message\": \"Erro ao excluir cidade\"}";
  }
});


$app->run();
