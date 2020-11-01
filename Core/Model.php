<?php

namespace Core;

use Interfaces\IModel;

abstract class Model implements IModel
{
    public static array $fields;
    public static string $table;
    
    /**
     * @param array $values
     */
    function init(array $values): void
    {
        if (!self::$fields) {
            return;
        }
        
        foreach (self::$fields as $key => $field) {
            if (array_key_exists($key, $values)) {
                self::$fields[$key] = $values[$key];
            }
        }
    }
    
    /**
     * @param array $fields
     */
    public static function set(array $fields): void
    {
        self::$fields = $fields;
    }
    
    /**
     * @return array
     */
    public static function get(): array
    {
        return self::$fields;
    }
}