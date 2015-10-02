<?php



class CidadeDAO
{

  public static function getCidadeById($id) {
    $connection = Connection::getConnection();
    $sql = "SELECT * FROM serasa_cidades WHERE id='$id'";
    $result  = mysqli_query($connection, $sql);
    $cidade = mysqli_fetch_object($result);
    
    $estado = EstadoDAO::getEstadoById($cidade->estados_id);
    
    $cidade->estado = $estado;

    return $cidade;
  }


  public static function getAll()
  {
    $connection = Connection::getConnection();
    $sql = "SELECT * FROM serasa_cidades";

    // recupera todos os clientes
    $result  = mysqli_query($connection, $sql);
    $cidades = array();
    while ($cidade = mysqli_fetch_object($result)) {
      $estado = EstadoDAO::getEstadoById($cidade->estados_id);
      $cidade->estado = $estado;
      if ($cidade != null) {
        $cidades[] = $cidade;
      }
    }
    return $cidades;
  }


  public static function updateCidade($cidade, $id) {
    $connection = Connection::getConnection();
    $sql = "UPDATE serasa_cidades SET nome='$cidade->nome',estados_id='$cidade->estados_id' WHERE id='$id'";
    $result  = mysqli_query($connection, $sql);

    if ($result === FALSE) {
      return false;
    } else {
      return true;
    }
  }


  public static function deleteCidade($id) {
    $connection = Connection::getConnection();
    $sql = "DELETE FROM serasa_cidades WHERE id=$id";
    $result  = mysqli_query($connection, $sql);

    if ($result === FALSE) {
      return false;
    } else {
      return true;
    }
  }


  public static function addCidade($cidade) {
    $connection = Connection::getConnection();
    $sql = "INSERT INTO serasa_cidades (nome,estados_id) VALUES ('$cidade->nome','$cidade->estados_id')";
    $result  = mysqli_query($connection, $sql);

    if ($result === FALSE) {
      return false;
    } else {
      return true;
    }
  }
}
