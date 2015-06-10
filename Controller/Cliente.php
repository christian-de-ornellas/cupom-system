<?php 
/**
* Classe de cliente
*/
require_once 'Crud.php';

class Cliente extends Crud{
	
protected $table ='clientes';    
private $nome_cliente; 	 	  	 
private $sobrenome_cliente; 	  	  	 
private $email_cliente; 	 	  	 
private $nasc_cliente; 	  	 
private $cpf_cliente; 	  	  	 
private $rg_cliente;   	  	 
private $nomepai_cliente; 	  	  	 
private $nomemae_cliente; 	  	  	 
private $tel_cliente; 		  	 
private $cel_cliente; 	 	 
private $cep_cliente; 		  	  	 
private $rua_cliente; 	 	  	 
private $num_cliente; 	  	  	 
private $cidade_cliente; 	 
private $bairro_cliente;	 	 
private $estado_cliente;	  	 
private $complemento_cliente; 	  	  	 
private $facebook_cliente;

function getNome_cliente() {
    return $this->nome_cliente;
}

function getSobrenome_cliente() {
    return $this->sobrenome_cliente;
}

function getEmail_cliente() {
    return $this->email_cliente;
}

function getNasc_cliente() {
    return $this->nasc_cliente;
}

function getCpf_cliente() {
    return $this->cpf_cliente;
}

function getRg_cliente() {
    return $this->rg_cliente;
}

function getNomepai_cliente() {
    return $this->nomepai_cliente;
}

function getNomemae_cliente() {
    return $this->nomemae_cliente;
}

function getTel_cliente() {
    return $this->tel_cliente;
}

function getCel_cliente() {
    return $this->cel_cliente;
}

function getCep_cliente() {
    return $this->cep_cliente;
}

function getRua_cliente() {
    return $this->rua_cliente;
}

function getNum_cliente() {
    return $this->num_cliente;
}

function getCidade_cliente() {
    return $this->cidade_cliente;
}

function getBairro_cliente() {
    return $this->bairro_cliente;
}

function getEstado_cliente() {
    return $this->estado_cliente;
}

function getComplemento_cliente() {
    return $this->complemento_cliente;
}

function getFacebook_cliente() {
    return $this->facebook_cliente;
}

function setNome_cliente($nome_cliente) {
    $this->nome_cliente = $nome_cliente;
   
}

function setSobrenome_cliente($sobrenome_cliente) {
    $this->sobrenome_cliente = $sobrenome_cliente;
}

function setEmail_cliente($email_cliente) {
    $this->email_cliente = $email_cliente;
}

function setNasc_cliente($nasc_cliente) {
    $this->nasc_cliente = $nasc_cliente;
}

function setCpf_cliente($cpf_cliente) {
    $this->cpf_cliente = $cpf_cliente;
}

function setRg_cliente($rg_cliente) {
    $this->rg_cliente = $rg_cliente;
}

function setNomepai_cliente($nomepai_cliente) {
    $this->nomepai_cliente = $nomepai_cliente;
}

function setNomemae_cliente($nomemae_cliente) {
    $this->nomemae_cliente = $nomemae_cliente;
}

function setTel_cliente($tel_cliente) {
    $this->tel_cliente = $tel_cliente;
}

function setCel_cliente($cel_cliente) {
    $this->cel_cliente = $cel_cliente;
}

function setCep_cliente($cep_cliente) {
    $this->cep_cliente = $cep_cliente;
}

function setRua_cliente($rua_cliente) {
    $this->rua_cliente = $rua_cliente;
}

function setNum_cliente($num_cliente) {
    $this->num_cliente = $num_cliente;
}

function setCidade_cliente($cidade_cliente) {
    $this->cidade_cliente = $cidade_cliente;
}

function setBairro_cliente($bairro_cliente) {
    $this->bairro_cliente = $bairro_cliente;
}

function setEstado_cliente($estado_cliente) {
    $this->estado_cliente = $estado_cliente;
}

function setComplemento_cliente($complemento_cliente) {
    $this->complemento_cliente = $complemento_cliente;
}

function setFacebook_cliente($facebook_cliente) {
    $this->facebook_cliente = $facebook_cliente;
}

public function insert(){

		$sql  = "INSERT INTO $this->table (nome_cliente, sobrenome_cliente, email_cliente, nasc_cliente, cpf_cliente, rg_cliente,nomepai_cliente, nomemae_cliente, tel_cliente, cel_cliente, cep_cliente,rua_cliente, num_cliente, cidade_cliente, bairro_cliente, estado_cliente, complemento_cliente, facebook_cliente) VALUES (:nome_cliente, :sobrenome_cliente, :email_cliente, :nasc_cliente, :cpf_cliente, :rg_cliente,:nomepai_cliente, :nomemae_cliente, :tel_cliente, :cel_cliente, :cep_cliente, :rua_cliente, :num_cliente, :cidade_cliente, :bairro_cliente, :estado_cliente, :complemento_cliente, :facebook_cliente)";
		$stmt = DB::prepare($sql);
		$stmt->bindParam(':nome_cliente', $this->nome_cliente);
		$stmt->bindParam(':sobrenome_cliente', $this->sobrenome_cliente);
		$stmt->bindParam(':email_cliente', $this->email_cliente);
		$stmt->bindParam(':nasc_cliente', $this->nasc_cliente);
		$stmt->bindParam(':cpf_cliente', $this->cpf_cliente);
		$stmt->bindParam(':rg_cliente', $this->rg_cliente);
		$stmt->bindParam(':nomepai_cliente', $this->nomepai_cliente);
		$stmt->bindParam(':nomemae_cliente', $this->nomemae_cliente);
		$stmt->bindParam(':tel_cliente', $this->tel_cliente);
		$stmt->bindParam(':cel_cliente', $this->cel_cliente);
		$stmt->bindParam(':cep_cliente', $this->cep_cliente);
		$stmt->bindParam(':rua_cliente', $this->rua_cliente);   
		$stmt->bindParam(':num_cliente', $this->num_cliente);
		$stmt->bindParam(':cidade_cliente', $this->cidade_cliente);
		$stmt->bindParam(':bairro_cliente', $this->bairro_cliente);
		$stmt->bindParam(':estado_cliente', $this->estado_cliente);
		$stmt->bindParam(':complemento_cliente', $this->complemento_cliente);
		$stmt->bindParam(':facebook_cliente', $this->facebook_cliente);
		return $stmt->execute(); 

	}

	public function update($id){

		$sql  = "UPDATE $this->table SET nome = :nome, email = :email WHERE id = :id";
		$stmt = DB::prepare($sql);
		$stmt->bindParam(':nome', $this->nome);
		$stmt->bindParam(':email', $this->email);
		$stmt->bindParam(':id', $id);
		return $stmt->execute();

	}
        
        public function ConsultarClientes($id) {
            
            $sql="SELECT * $this->table WHERE cpf_cliente LIKE :cpf_cliente, nome_cliente LIKE :nome_cliente,"
            . "sobrenome_cliente LIKE :sobrenome_cliente, rg_cliente LIKE :rg_cliente, "
            . "email_cliente LIKE :email_cliente, cep_cliente LIKE :cep_cliente ";
            $stmt= DB::prepare($sql);
            $stmt->bindParam(':cpf_cliente', $this->cpf_cliente);
            $stmt->bindParam(':nome_cliente', $this->nome_cliente);
            $stmt->bindParam(':sobrenome_cliente', $this->sobrenome_cliente);
            $stmt->bindParam(':rg_cliente', $this->rg_cliente);
            $stmt->bindParam(':email_cliente', $this->email_cliente);
            $stmt->bindParam(':cep_cliente', $this->cep_cliente);
            $stmt->bindParam(':id', $id);
        }
public function PorNome(){
		
		$sql="SELECT *
              FROM clientes
              WHERE nome_cliente LIKE nome_cliente ";
		$stmt = DB::prepare($sql);
		$stmt->bindParam(':nome_cliente', $this->nome_cliente);
	    $stmt->execute();
        return $stmt->fetchAll();
	}
}
