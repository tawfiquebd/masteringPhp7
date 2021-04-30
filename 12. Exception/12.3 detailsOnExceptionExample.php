<?php

// Exception details example

class ServerLoadException extends Exception{}
class NetworkException extends Exception{}
class DiskFullException extends Exception{}

interface NetworkStorage{
    function connect();
    function getName();
    function report($data);
}

class MySQLServer implements NetworkStorage{

    function connect(){
        throw new DiskFullException;
    }

    function getName(){
        return "MySQLServer";
    }

    function report($data){

    }
}

class PostgreSQLServer implements NetworkStorage{

    function connect(){
//        return $this;
        throw new ServerLoadException;
    }

    function getName(){
        return "PostgreSQLServer";
    }

    function report($data){

    }
}

class MSSQLServer implements NetworkStorage{

    function connect(){
//        throw new NetworkException;
        return $this;
    }

    function getName(){
        return "MSSQLServer";
    }

    function report($data){

    }
}

class ConnectionPool{

    private $connection;
    private $storage;

    function __construct(){
        $this->storage = array();
    }

    function addStorage(NetworkStorage $storage){
        array_push($this->storage, $storage);
    }

    function getConnection(){
        foreach($this->storage as $networkStorage){
            try{
                $this->connection = $networkStorage->connect();
            }
            catch (ServerLoadException $e){
                echo $networkStorage->getName()." is facing huge load\n";
                $networkStorage->report(array("ip"=>"127.121.0.3", "error"=>'load'));
            }
            catch (NetworkException $e){
                echo $networkStorage->getName()." is facing network trouble\n";
                $networkStorage->report(array("ip"=>"127.121.0.3", "error"=>'network'));
            }
            catch (DiskFullException $e){
                echo $networkStorage->getName()." has disk full issue\n";
            }

            if($this->connection){
                break;
            }
        }

        if($this->connection){
            return $this->connection;
        }
        return false;
    }
}

$mysql = new MySQLServer();
$pgsql = new PostgreSQLServer();
$mssql = new MSSQLServer();

$cp = new ConnectionPool();
$cp->addStorage($mysql);
$cp->addStorage($pgsql);
$cp->addStorage($mssql);

$connection = $cp->getConnection();
print_r($connection);

