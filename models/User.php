<?php

namespace models;

use interfaces\IModel;

/**
 * Class User
 */
class User implements IModel
{
    /**
     * Basic db columns.
     * @var array|null[]
     */
    private array $columns = [
        'id'   => null,
        'name' => null,
    ];
    
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
    
    /**
     * Set values if they exist in columns field.
     * @param array $values
     */
    public function set(array $values): void
    {
        foreach ($this->columns as $key => $column) {
            if (array_search($key, $values)) {
                $this->columns[$column] = $values[$key];
            }
        }
    }
}