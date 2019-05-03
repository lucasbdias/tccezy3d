<?php 
class Cliente extends Conexao{
	private $cod;
	private $nome;
	private $sobrenome;
	private $email;
	private $telefone;
	private $senha;
	private $pais;
	private $ramo;
	private $empresa;

	public function __construct(){
		parent::__construct();
		parent::conectar();
		$parametros = func_get_args();

		if(count($parametros) != 0){
			$this->setNome($parametros[0]['nome']);
			$this->setSobrenome($parametros[0]['sobrenome']);
			$this->setEmail($parametros[0]['email']);
			$this->setTelefone($parametros[0]['telefone']);
			$this->setSenha($parametros[0]['senha']);
			$this->setPais($parametros[0]['pais']);
			$this->setRamo($parametros[0]['ramo']);
			$this->setEmpresa($parametros[0]['empresa']);

			$this->valores["nome"] = $this->getNome();
			$this->valores["sobrenome"] = $this->getSobrenome();
			$this->valores["email"] = $this->getEmail();
			$this->valores["telefone"] = $this->getTelefone();
			$this->valores["senha"] = $this->getSenha();
			$this->valores["pais"] = $this->getPais();
			$this->valores["ramo"] = $this->getRamo();
			$this->valores["empresa"] = $this->getEmpresa();
		}
	}

	public function setCod($cod){ $this->cod = $cod; }
	public function setNome($nome){ $this->nome = $nome; }
	public function setSobrenome($sobrenome){ $this->sobrenome = $sobrenome; }
	public function setEmail($email){ $this->email = $email; }
	public function setTelefone($telefone){ $this->telefone = $telefone; }
	public function setSenha($senha){ $this->senha = $senha; }
	public function setPais($pais){ $this->pais = $pais; }
	public function setRamo($ramo){ $this->ramo = $ramo; }
	public function setEmpresa($empresa){ $this->empresa = $empresa; }

	public function getCod(){ return $this->cod; }
	public function getNome(){ return $this->nome; }
	public function getSobrenome(){ return $this->sobrenome; }
	public function getEmail(){ return $this->email; }
	public function getTelefone(){ return $this->telefone; }
	public function getSenha(){ return $this->senha; }
	public function getPais(){ return $this->pais; }
	public function getRamo(){ return $this->ramo; }
	public function getEmpresa(){ return $this->empresa; }

	public function cadastrar(){
		$sql = "INSERT INTO cliente VALUES(:cod, :nome, :sobrenome, :email, :telefone, :senha, :pais, :ramo, :empresa)";
		if(parent::executarSql($sql, $this->valores))
			echo "<script>alert('Cadastrado efetuado com sucesso!');</script>";
		else
			echo "<script>alert('Falha ao realizar cadastro!');</script>";
	}
	public function consultar($restricao, $cod){
		$sql = "SELECT * FROM cliente ".$restricao;
		return parent::executarFetchAll($sql, $cod);
	}
	public function alterar($set){
		$sql = "UPDATE cliente SET $set";
		if(parent::executarSqlCud($sql, $this->valores))
			echo "<script>alert('Alteração efetuada com sucesso!');</script>";
		else
			echo "<script>alert('Falha ao realizar alteração!');</script>";
	}
	public function excluir($restricao, $cod){
		$sql = "DELETE FROM cliente $restricao";
		if(parent::executarSqlCud($sql, $cod))
			echo "<script>alert('Exclusão efetuada com sucesso!');</script>";
		else
			echo "<script>alert('Falha ao realizar exclusão!');</script>";
	}
}
?>