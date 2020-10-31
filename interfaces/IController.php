<?php

namespace interfaces;

/**
 * Interface IController
 */
interface IController
{
    /**
     * Gets the selected ID from the model.
     * @param int $id
     * @return IModel
     */
    public function get(int $id): IModel;
    
    /**
     * Put's the selected ID from the model.
     * @param int $id
     * @return IModel
     */
    public function put(int $id): IModel;
    
    /**
     * @param int $id
     */
    public function delete(int $id): void;
}