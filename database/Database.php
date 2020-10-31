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
     * Datàbase password.
     */
    private const DB_PASS = '';
    
    /**
     * Database name.
     */
    private const DB_NAME = 'crud';
    
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
     * @param bool $delete
     * @param bool $assoc
     * @return array|null
     */
    public function query(string $query, bool $delete = false, bool $assoc = true): ?array
    {
        $result = $this->connection->query($query);
        
        if ($delete) {
            return null;
        }
        
        return $assoc ? mysqli_fetch_assoc($result) : mysqli_fetch_array($result);
    }
    
    /**
     * @param string $table
     * @param int $id
     * @return array
     */
    public function get(string $table, int $id): array
    {
        return $this->query("SELECT * FROM {$table} WHERE `id` = {$id}");
    }
    
    /**
     * @param string $table
     * @return array
     */
    public function index(string $table): array
    {
        return $this->query("SELECT * FROM {$table}");
    }
    
    /**
     * @param string $table
     * @param int $id
     * @return void
     */
    public function delete(string $table, int $id): void
    {
        $this->query("DELETE FROM {$table} WHERE `id` = {$id}", true);
    }
}