<?php



class EstadoDAO
{

  public static function getEstadoById($id) {
    $connection = Connection::getConnection();
    $sql = "SELECT * FROM serasa_estados WHERE id=$id";
    $result  = mysqli_query($connection, $sql);
    $estado = mysqli_fetch_object($result);

    return $estado;
  }


  public static function getAll()
  {
    $connection = Connection::getConnection();
    $sql = "SELECT * FROM serasa_estados";

    // recupera todos os clientes
    $result  = mysqli_query($connection, $sql);
    $estados = array();
    while ($estado = mysqli_fetch_object($result)) {
      if ($estado != null) {
        $estados[] = $estado;
      }
    }
    return $estados;
  }


  public static function updateEstado($estado, $id) {
    $connection = Connection::getConnection();
    $sql = "UPDATE serasa_estados SET nome='$estado->nome' WHERE id='$id'";
    $result  = mysqli_query($connection, $sql);

    $estadoAtualizado = EstadoDAO::getEstadoById($id);
    return $estadoAtualizado;
  }


  public static function deleteEstado($id) {
    $connection = Connection::getConnection();
    $sql = "DELETE FROM serasa_estados WHERE id='$id'";
    $result  = mysqli_query($connection, $sql);

    if ($result === FALSE) {
      return false;
    } else {
      return true;
    }
  }


  public static function addEstado($estado) {
    $connection = Connection::getConnection();
    $sql = "INSERT INTO serasa_estados (nome) VALUES ('$estado->nome')";
    $result  = mysqli_query($connection, $sql);

    if ($result === FALSE) {
      return false;
    } else {
      return true;
    }
  }
}
