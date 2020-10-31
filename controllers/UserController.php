<?php

use interfaces\IController;

/**
 * Class UserController
 */
class UserController implements IController
{
    /**
     * @var Database
     */
    private Database $db;
    
    /**
     * @var string
     */
    private string $table = 'users';
    
    /**
     * UserController constructor.
     */
    public function __construct()
    {
        $db = new Database();
    }
    
    /**
     * Returns a single user.
     * @param int $id
     * @return User
     */
    public function get(int $id): User
    {
        $user = $this->db->getFirstWithId($this->table, $id);
        
        return new User($user);
    }
    
    /**
     * Edits a single user.
     * @param int $id
     * @return mixed
     */
    public function put(int $id): User
    {
        // TODO: Implement put() method.
    }
    
    /**
     * Deletes a single user.
     * @param int $id
     * @return mixed
     */
    public function delete(int $id): void
    {
        // TODO: Implement delete() method.
    }
}