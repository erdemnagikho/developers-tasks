<?php

namespace App\Factory;

use Exception;
use App\Factory\Contracts\IMocky;

abstract class BaseMocky implements IMocky
{
    protected $model;

    public function __construct()
    {
        $this->model = $this->getModelClass();
    }

    public abstract function insertTasks();

    /**
     * @return mixed
     *
     * @throws Exception
     */
    protected function getModelClass(): mixed
    {
        if (!method_exists($this, 'model')) {
            throw new Exception('No model defined');
        }

        return $this->model();
    }
}
