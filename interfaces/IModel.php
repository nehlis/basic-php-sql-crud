<?php

namespace interfaces;

/**
 * Interface IModel
 * @package interfaces
 */
interface IModel
{
    /**
     * Set values of model.
     * @param array $values
     */
    function init(array $values): void;
}