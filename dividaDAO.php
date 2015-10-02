<?php



class DividaDAO
{

  public static function getDividaByIds($clientes_id,$estabelecimentos_id) {
    $connection = Connection::getConnection();
    $sql = "SELECT * FROM serasa_dividas WHERE clientes_id='$clientes_id' AND estabelecimentos_id='$estabelecimentos_id'";
    $result  = mysqli_query($connection, $sql);
    $divida = mysqli_fetch_object($result);
    $cliente = ClienteDAO::getClienteById($clientes_id);
    $estabelecimento = EstabelecimentoDAO::getEstabelecimentoById($estabelecimentos_id);
    $divida->cliente = $cliente;
    $divida->estabelecimento = $estabelecimento;

    return $divida;
  }


  public static function getAll()
  {
    $connection = Connection::getConnection();
    $sql = "SELECT * FROM serasa_dividas";

    // recupera todos os clientes
    $result  = mysqli_query($connection, $sql);
    $dividas = array();
    while ($divida = mysqli_fetch_object($result)) {
      $cliente = ClienteDAO::getClienteById($divida->clientes_id);
        $estabelecimento = EstabelecimentoDAO::getEstabelecimentoById($divida->estabelecimentos_id);
        $divida->cliente = $cliente;
        $divida->estabelecimento = $estabelecimento;
      if ($divida != null) {
        $dividas[] = $divida;
      }
    }
    return $dividas;
  }


  public static function updateDivida($divida, $cid,$eid) {
    $connection = Connection::getConnection();
    $sql = "UPDATE serasa_dividas SET valor='$divida->valor' WHERE clientes_id='$cid' AND estabelecimentos_id='$eid'";
    $result  = mysqli_query($connection, $sql);

    if ($result === FALSE) {
      return false;
    } else {
      return true;
    }
  }


  public static function deleteDivida($cid,$eid) {
    $connection = Connection::getConnection();
    $sql = "DELETE FROM serasa_dividas WHERE clientes_id='$cid' AND estabelecimentos_id='$eid'";
    $result  = mysqli_query($connection, $sql);

    if ($result === FALSE) {
      return false;
    } else {
      return true;
    }
  }


  public static function addDivida($divida) {
    $connection = Connection::getConnection();
    $sql = "INSERT INTO serasa_dividas (valor,clientes_id,estabelecimentos_id) VALUES ('$divida->valor','$divida->clientes_id','$divida->estabelecimentos_id')";
    $result  = mysqli_query($connection, $sql);

    if ($result === FALSE) {
      return false;
    } else {
      return true;
    }
  }
}
