<?php

namespace models;

use interfaces\IModel;

/**
 * Class User
 */
class User implements IModel
{
    /**
     * @var int
     */
    public int $id;
    
    /**
     * @var string
     */
    public static string $table = 'users';
    
    /**
     * User constructor.
     * @param array $user
     */
    public function __construct(array $user)
    {
        $this->set($user);
    }
    
    public function set(array $values): void
    {
        $this->id = $values['id'];
    }
}