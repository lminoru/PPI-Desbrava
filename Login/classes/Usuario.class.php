<?php


class Usuario {
    // atributos/propriedades da classe
    var $login = '';
    var $senha = '';
	
    // construtor da classe - VAZIA
    public function __construct($l,$s)  {
     $this->login = $l;
     $this->senha = $s;
    }
    
    // método que devolve o valor do atributo login
    public function getLogin() {  
        return $this->login;     
    }	
	
    // método que atribui um valor para o atributo login
    public function setLogin($l) {
        $this->login = $l;  
    }	
	
    // método que devolve o valor do atributo senha
    public function getSenha() {
        return $this->senha; 
    }
	
    // método que atribui um valor para o atributo senha
    public function setSenha($s) {  
        $this->senha = $s; 
    }	
    
    // método que valida o acesso do usuário no sistema - consulta na tabela ACESSOS
    public function validarAcesso() {
	
        // instanciar a classe conexao
	    $obj_con = new Conexao('regulus','BDPPI17187','BDPPI17187','BDPPI17187');
	
        $obj_con->setSQL("SELECT * from usuarios where usuario='".$this->login."' and senha='".$this->senha."'");
        
        $status = $obj_con->exec();
        
        return $status;
 
    }
}
