<?php

namespace App\Factory;

use Illuminate\Support\Arr;

class MockyFactory
{
    private function create($class)
    {
        return new $class;
    }

    public function runMockies(...$mockies)
    {
        $mockies = Arr::flatten($mockies);

        foreach ($mockies as $mocky)
        {
            $model = $this->create($mocky);
            $model->insertTasks();
        }
    }
}
