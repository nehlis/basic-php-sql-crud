<?php

namespace interfaces;

/**
 * Interface IController
 */
interface IController
{
    /**
     * Returns a list of the resource.
     * @return array
     */
    public function index(): array;
    
    /**
     * Creates an entry for the model.
     * @param array $model
     * @return IModel
     */
    public function create(array $model): IModel;
    
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