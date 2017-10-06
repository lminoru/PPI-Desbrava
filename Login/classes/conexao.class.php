<?php
class Conexao {
    // atributos/propriedades da classe
    public $con;
    protected $stmt; //recurso da conexão
    protected $host = 'regulus';
    protected $database = 'BDPPI17187';
    protected $user = 'BDPPI17187';
    protected $senha = 'BDPPI17187';

    // metodo construtor
    public function __construct() {
        $connectionInfo = array("Database"=>$this->database,
                                "PWD"=>$this->senha,
                                "UID"=>$this->user);

        $this->con = sqlsrv_connect($this->host,$connectionInfo);

        if( $this->con === false ) {
            //exit ("Falha na conexao com o banco de dados.");
            die( print_r( sqlsrv_errors(), true));
        }
        return true;
    }//fim __construct
    public function __destruct() {
        sqlsrv_close($this->con);
    }//fim __destruct
    // método para executar a consulta SQL no banco
    private function execSQL($consulta) {
        if ($consulta === '') {
            return false;
        }
        $stmt = sqlsrv_query($this->con, $consulta);

        if ($stmt) {
            $this->stmt=$stmt;
        } else {
            $this->sql_error($consulta);
        }
    } //fim execSQL
    //método para rodar um SELECT no BD
    public function select($login,$senha) {
        //define SELECT
        $sql = "SELECT * from usuarios where usuario='".$login."' and senha='".$senha."'";

        //executa o SELECT através do método execSQL
        $this->execSQL($sql);

        //devolve dados do SELECT para quem chamou o método
        $dados='';
        while ($linha = sqlsrv_fetch_array($this->stmt, SQLSRV_FETCH_ASSOC))   {
            $dados[] = $linha;
        }
        return $dados;
    } //fim select
    private function sql_error($sql) {
            echo sqlsrv_errors($this->con) . '<br>';
            die('error: ' . $sql);
    } //fim sql_error
} //fim da classe conexao
