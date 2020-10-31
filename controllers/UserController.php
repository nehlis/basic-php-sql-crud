<?php

namespace controllers;

use database\Database;
use interfaces\IController;
use interfaces\IModel;
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
     * @var string
     */
    private string $table = 'users';
    
    /**
     * UserController constructor.
     */
    public function __construct()
    {
        $this->database = new Database();
    }
    
    /**
     * @param array $model
     * @return IModel
     */
    public function create(array $model): IModel
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
        $user = $this->database->getById($this->table, $id);
        
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
        $this->database->deleteById($this->table, $id);
    }
}