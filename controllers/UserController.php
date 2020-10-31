<?php

namespace controllers;

use database\Database;
use interfaces\IController;
use models\User;

/**
 * Class UserController
 */
class UserController implements IController
{
    /**
     * @var Database
     */
    private Database $database;
    
    /**
     * UserController constructor.
     */
    public function __construct()
    {
        $this->database = new Database();
    }
    
    /**
     * @return array
     */
    public function index(): array
    {
        return $this->database->index(User::$table);
    }
    
    /**
     * @param array $model
     * @return User
     */
    public function create(array $model): User
    {
        // TODO: Implement create() method.
    }
    
    /**
     * Returns a single user.
     * @param int $id
     * @return User
     */
    public function get(int $id): User
    {
        $user = $this->database->get(User::$table, $id);
        
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
        $this->database->delete(User::$table, $id);
    }
}