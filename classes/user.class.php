<?php
/**
* 
*/
class User
{
	
	public function __construct($pdo)
	{
		$this->pdo = $pdo;
	}
	public function inserirCadastro($user){
		$status = "1";
		$sql = $this->pdo->prepare("INSERT INTO cadastro (user, status) VALUES (:user, :status)");
		$sql ->bindValue(":user", $user);
		$sql ->bindValue(":status", $status);
		
        return $sql = $sql->execute();
	}

	public function verificaCadastro($user){
		$status = "1";
		$sql = $this->pdo->prepare("SELECT * FROM cadastro WHERE user = :user AND status = :status");
		$sql ->bindValue(":user", $user);
		$sql ->bindValue(":status", $status);
		$sql->execute();
		
        if ($sql -> rowCount() > 0) {
        	return $sql->fetchAll();

        }
	}
}
 ?>