<?php

namespace App\Factory;

use App\Models\Task;

class Mocky1 extends BaseMocky
{
    public function insertTasks()
    {
        $tasks = GlobalService::getTasksByMocky((get_class()));

        foreach ($tasks as $taskItem) {
            $task = new Task();
            $task->create([
                'name' => $taskItem['id'],
                'difficulty' => $taskItem['zorluk'],
                'estimated_duration' => $taskItem['sure'],
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
