<?php

 /**
 * Baseado em: arquitetura_php - Weuller Marcos
 * Classe: DataBase.php
 * Autor: Weuller Marcos
 * Criado em: 11/06/2020
 */
abstract class DataBase {
    
    protected $mysqli;
    protected $sql;
    protected $mysqlError = "";
    
    
    function getMysqlError() {
        return $this->mysqlError;
    }

    function setMysqlError($mysqlError) {
        $this->mysqlError = $mysqlError;
    }

            
    /**
     * Abre conexão com a base de dados 
     * @return bool <p>Retorna true caso conecte com sucesso e false caso dê erro.</p>
     */
    public function connectDatabase(){
        
        $this->mysqli = new mysqli(SERVERNAME, USERNAME, PASSWORD, DBNAME);
        $this->mysqli->set_charset("utf8");
        
        if ($this->mysqli->connect_error) {
            
            $this->mysqlError = "Erro ao conectar com o banco de dados: " . $this->mysqli->connect_error;
            return false;
        }
        else{
            
            return true;
        }
    }

    /**
     * Fecha conexão com a base de dados 
     * @return bool <p>Retorna true caso feche com sucesso e false caso dê erro.</p>
     */
    public function disconnectDatabase(){

        if($this->mysqli->close())            
            return true;
        
        $this->mysqlError = "Erro ao fechar conexão com o banco de dados";
        return false;
        
    }  
    
}
