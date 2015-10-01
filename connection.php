<?php

class Connection
{
  public static $database = "daw-aluno3";
  public static $address = "alunos.coltec.ufmg.br";
  public static $user = "daw-aluno3";
  public static $password = "gabriel";

  public static function getConnection() {
    $connection = mysqli_connect(Connection::$address, Connection::$user, Connection::$password, Connection::$database);

    return $connection;
  }
}
