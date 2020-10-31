<?php

namespace models;

/**
 * Class User
 */
class User extends Model
{
    /**
     * Basic db columns.
     * @var array|null[]
     */
    private static array $fields = [
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
        parent::set(self::$fields);
        $this->init($user);
    }
}