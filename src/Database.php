<?php 

	
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
    var_dump($sql);
	die();
        $this->connection->query($sql);
    }
}



