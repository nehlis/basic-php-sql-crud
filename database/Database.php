<?php

class Database
{
    /**
     * Database constants (local).
     */
    private const DB_HOST = '';
    private const BD_USER = '';
    private const DB_PASS = '';
    private const DB_NAME = '';
    
    /**
     * @var mysqli
     */
    private mysqli $connection;
    
    /**
     * Database constructor.
     */
    public function __construct()
    {
        $this->connect();
    }
    
    /**
     *
     */
    private function connect(): void
    {
        $this->connection = new mysqli(self::DB_HOST, self::BD_USER, self::DB_PASS, self::DB_NAME);
    }
    
    /**
     * @param string $query
     * @param bool $asArray
     * @return array|null
     */
    private function query(string $query, bool $asArray = true): ?array
    {
        try {
            $result = $this->connection->query($query);
        } catch (Exception $exception) {
            return null;
        }
    
        return $asArray ? mysqli_fetch_array($result) : mysqli_fetch_assoc($result);
    }
}