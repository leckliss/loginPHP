<?php
class usuarioModel {
  public $db = null;
  public $id = 0;
  public $nomeCompletoModel = null;
  public $telefoneModel = null;
  public $emailModel = null;
  public $senhaModel = null;

  public function __construct($connection) {
      $this->db = $connection;
  }

  public function Logar() {
      $retorno = ['status' => 0, 'dados' => null];
      try {
          $stmt = $this->db->prepare('
              SELECT id, email FROM usuario
              WHERE email = :email
              AND senha = :senha
              LIMIT 1');
          $stmt->bindValue(':email', $this->emailModel);
          $stmt->bindValue(':senha', $this->senhaModel);
          $stmt->execute();
          $dado = $stmt->fetch();
          if ($dado && $dado['id'] > 0) {
              $retorno['status'] = 1;
              $retorno['dados'] = $dado;
          }
      } catch (PDOException $ex) {
          echo 'Erro ao logar: ' . $ex->getMessage();
      }
      return $retorno;
  }
}
?>