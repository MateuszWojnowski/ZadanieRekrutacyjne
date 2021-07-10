<?php


class Database
{
    private string $dbHost = "localhost";
    private string $dbName = "hotel";
    private string $dbUser = "root";
    private string $dbPassword = "";

    public function __construct()
    {
        $this->dbHost = "localhost";
        $this->dbName = "hotel";
        $this->dbUser = "root";
        $this->dbPassword = "";
    }

    public function getDbHost () : string
    {
        return $this->dbHost;
    }
    public function getDbName () : string
    {
        return $this->dbName;
    }
    public function getDbUser () : string
    {
        return $this->dbUser;
    }
    public function getDbPassword () : string
    {
        return $this->dbPassword;
    }
    public function setDbHost (string $dbHost) : void
    {
        $this->dbHost = $dbHost;
    }
    public function setDbName (string $dbName) : void
    {
        $this->dbName = $dbName;
    }
    public function setDbUser (string $dbUser) : void
    {
        $this->dbUser = $dbUser;
    }
    public function setDbPassword (string $dbPassword) : void
    {
        $this->dbPassword = $dbPassword;
    }

}