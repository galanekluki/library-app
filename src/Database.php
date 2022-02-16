<?php 

	
namespace App;

class Database
{
    private $connection;

    public function __construct(
        string $hostname,
        string $username,
        string $password,
        string $database,
        int $port
    )
    {
        $this->connection = mysqli_connect(
            $hostname, $username, $password, $database, $port
        );
    }


    public function insert(string $table, array $columns, array $values): void
    {
        $sql = "INSERT INTO %s (%s) values (%s)";
        $sql = sprintf(
            $sql, $table, implode(',',$columns), implode(',', $values)
        );
        $this->connection->query($sql);
    }




	/*    <?php
    require "database_connection.php";
    require "config.inc.php";
    $conn = new Database(DB_SERVER, DB_USER, DB_PASS, DB_DATABASE);
    $link = $conn->connect();
    ?> */




























/*class Database {

	private string $host = 'mysql';
	private string $dbname = 'library';
	private string $username = 'root';
	private string $password = '123';
	private int $port = 3306;
	private $connection;

	public function __construct(string $host, string $username, string $dbname, string $password, int $port = 3306) {

		$this->connection = mysqli_connect(
		$this->host = $host, 
		$this->username = $username, 
		$this->dbname = $dbname, 
		$this->password = $password, 
		$this->port = $port
		);
	}

	
	
	
	public function getDB() {

		$database = new Database($host, $username, $password, $dbname, $port);

		if ($database->connect_error) {
	  		die("Connection failed: " . $database->connect_error);
		} 

			echo "Connected successfully";

		
	}
}*/


	
	
