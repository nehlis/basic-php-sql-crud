<?php

use interfaces\IModel;

/**
 * Class User
 */
class User implements IModel
{
    /**
     * @var int|mixed
     */
    public int $id;
    
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