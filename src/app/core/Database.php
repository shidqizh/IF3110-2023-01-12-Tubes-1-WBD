<?php

class Database{
    private $host = DB_HOST;
    private $user = DB_USER;
    private $pass = DB_PASS;
    private $db_name = DB_NAME;

    //db handler
    private $dbh;
    private $statement;

    public function __construct(){
        // data source name
        $dsn = 'mysql:host=' . $this->host . 'dbname=' . $this->db_name;

        $option = [
            PDO::ATTR_PERSISTENT => true,
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        ];

        try{
            $this->dbh = new PDO($dsn, $this->user, $this->pass, $option);
        } catch (PDOException $e){
            $errorMessage = 'Error: ' . $e->getCode() . ' - ' . $e->getMessage();
            echo $errorMessage;
        }

        try{
            $this->dbh->exec(Table::USER_TABLE);
            $this->dbh->exec(Table::SONG_TABLE);
            $this->dbh->exec(Table::ALBUM_TABLE);
        } catch (PDOException $e){
            $errorMessage = 'Error: ' . $e->getCode() . ' - ' . $e->getMessage();
            echo $errorMessage;
        }
    }

    public function query($query){
        try{
            $this->statement = $this->dbh->prepare($query);
        } catch (PDOException $e){
            $errorMessage = 'Error: ' . $e->getCode() . ' - ' . $e->getMessage();
            echo $errorMessage;
        }
    }

    public function bind($param, $val, $type){
        try{
            if(is_null($type)){
                switch(true){
                    case is_int($val):
                        $type = PDO::PARAM_INT;
                        break;
                    case is_bool($val):
                        $type = PDO::PARAM_BOOL;
                        break;
                    case is_null($val):
                        $type = PDO::PARAM_NULL;
                        break;
                    default:
                        $type = PDO::PARAM_STR;
                    
                }
            }
            $this->statement->bindValue($param, $val, $type);
        } catch (PDOException $e){
            $errorMessage = 'Error: ' . $e->getCode() . ' - ' . $e->getMessage();
            echo $errorMessage;
        }   
        
    }

    public function execute(){
        try{
            $this->statement->execute();
        }catch (PDOException $e){
            $errorMessage = 'Error: ' . $e->getCode() . ' - ' . $e->getMessage();
            echo $errorMessage;
        }   
        
    }

    public function fetchAll(){
        try{
            $this->execute();
            return $this->statement->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e){
            $errorMessage = 'Error: ' . $e->getCode() . ' - ' . $e->getMessage();
            echo $errorMessage;
        }   
        
    }

    public function fetchSingle(){
        try{
            $this->execute();
            return $this->statement->fetch(PDO::FETCH_ASSOC);
        } catch (PDOException $e){
            $errorMessage = 'Error: ' . $e->getCode() . ' - ' . $e->getMessage();
            echo $errorMessage;
        }   
        
    }

    public function countRow(){
        try{
            return $this->statement->rowCount();
        } catch (PDOException $e){
            $errorMessage = 'Error: ' . $e->getCode() . ' - ' . $e->getMessage();
            echo $errorMessage;
        }   
    }

    public function lastInsertID(){
        try{
            return $this->dbh->lastInsertID();
        } catch (PDOException $e){
            $errorMessage = 'Error: ' . $e->getCode() . ' - ' . $e->getMessage();
            echo $errorMessage;
        }   
    }
}