<?php

namespace database;

use Exception;
use mysqli;

/**
 * Class Database
 */
class Database
{
    /**
     * Database host.
     */
    private const DB_HOST = 'localhost';
    
    /**
     * Database user.
     */
    private const BD_USER = 'root';
    
    /**
     * Datbase password.
     */
    private const DB_PASS = 'root';
    
    /**
     * Database name.
     */
    private const DB_NAME = 'iproject';
    
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
     * Connect to the database using the credentials.
     */
    private function connect(): void
    {
        $this->connection = new mysqli(self::DB_HOST, self::BD_USER, self::DB_PASS, self::DB_NAME);
    }
    
    /**
     * @param string $query
     * @param bool $assoc
     * @return array|null
     */
    public function query(string $query, bool $assoc = true): ?array
    {
        try {
            $result = $this->connection->query($query);
        } catch (Exception $exception) {
            return null;
        }
        
        return $assoc ? mysqli_fetch_assoc($result) : mysqli_fetch_array($result);
    }
    
    /**
     * @param string $table
     * @param int $id
     * @return array
     */
    public function getById(string $table, int $id): array
    {
        return $this->query("GET * FROM {$table} WHERE id = {$id}")[0];
    }
    
    /**
     * @param string $table
     * @param int $id
     * @return array
     */
    public function deleteById(string $table, int $id): array
    {
        return $this->query("DELETE * FROM {$table} WHERE id = {$id}")[0];
    }
}