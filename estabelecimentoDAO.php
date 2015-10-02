<?php



class EstabelecimentoDAO
{

  public static function getEstabelecimentoById($id) {
    $connection = Connection::getConnection();
    $sql = "SELECT * FROM serasa_estabelecimentos WHERE id='$id'";
    $result  = mysqli_query($connection, $sql);
    $estabelecimento = mysqli_fetch_object($result);
    
    $cidade = CidadeDAO::getCidadeById($estabelecimento->cidades_id);
    
    $estabelecimento->cidade = $cidade;

    return $estabelecimento;
  }


  public static function getAll()
  {
    $connection = Connection::getConnection();
    $sql = "SELECT * FROM serasa_estabelecimentos";

    // recupera todos os clientes
    $result  = mysqli_query($connection, $sql);
    $estabelecimentos = array();
    while ($estabelecimento = mysqli_fetch_object($result)) {
      $cidade = CidadeDAO::getCidadeById($estabelecimento->cidades_id);
      $estabelecimento->cidade = $cidade;
      if ($estabelecimento != null) {
        $estabelecimentos[] = $estabelecimento;
      }
    }
    return $estabelecimentos;
  }


  public static function updateEstabelecimento($estabelecimento, $id) {
    $connection = Connection::getConnection();
    $sql = "UPDATE serasa_estabelecimentos SET nome='$estabelecimento->nome',cidades_id='$estabelecimento->cidades_id' WHERE id='$id'";
    $result  = mysqli_query($connection, $sql);
    if ($result === FALSE) {
      return false;
    } else {
      return true;
    }
  }


  public static function deleteEstabelecimento($id) {
    $connection = Connection::getConnection();
    $sql = "DELETE FROM serasa_estabelecimentos WHERE id=$id";
    $result  = mysqli_query($connection, $sql);

    if ($result === FALSE) {
      return false;
    } else {
      return true;
    }
  }


  public static function addEstabelecimento($estabelecimento) {
    $connection = Connection::getConnection();
    $sql = "INSERT INTO serasa_estabelecimentos (nome,cidades_id) VALUES ('$estabelecimento->nome','$estabelecimento->cidades_id')";
    $result  = mysqli_query($connection, $sql);

    if ($result === FALSE) {
      return false;
    } else {
      return true;
    }
  }
}
