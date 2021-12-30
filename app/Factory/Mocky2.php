<?php

namespace App\Factory;

use App\Models\Task;

class Mocky2 extends BaseMocky
{
    public function insertTasks()
    {
        $tasks = GlobalService::getTasksByMocky((get_class()));

        foreach ($tasks as $taskItem) {
            $key = key($taskItem);

            $task = new Task();
            $task->create([
                'name' => $key,
                'difficulty' => $taskItem[$key]['level'],
                'estimated_duration' => $taskItem[$key]['estimated_duration'],
            ]);
        }
    }

    /**
     * @return string
     */
    public function model(): string
    {
        return Mocky1::class;
    }
}
