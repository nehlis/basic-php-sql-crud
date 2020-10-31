<?php

spl_autoload_register(fn($class_name) => include "{$class_name}.php");

/**
 * @return string
 */
function styles_url(): string
{
    return 'public/styles';
}

/**
 * @return string
 */
function scripts_url(): string
{
    return 'public/scripts';
}