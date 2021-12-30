<?php

namespace App\Factory;

use App\Models\Developer;
use App\Models\Task;
use Illuminate\Support\Facades\Http;

class GlobalService
{
    /**
     * @param string $mockyName
     *
     * @return array
     */
    public static function getTasksByMocky(string $mockyName): array
    {
        $mocky = substr($mockyName,12);

        $source = config('mockies.'.$mocky);

        return  Http::get($source['url'])->json();
    }

    public static function insertDevelopers()
    {
        for ($i = 1; $i <= 5; $i++) {
            $dev = 'DEV'.$i;
            $difficulty = $i;

            $developer = new Developer();
            $developer->create([
               'dev' => $dev,
               'difficulty' => $difficulty,
            ]);
        }
    }

    public static function assignTaskToDeveloper()
    {
        $tasks = Task::query()
            ->whereNull('dev_id')
            ->orderBy('difficulty')
            ->orderBy('estimated_duration')
            ->get();

        foreach ($tasks as $task)
        {
            $developer = Developer::query()
                ->orderBy('total_hour')
                ->orderBy('difficulty')
                ->first();

            $task->update([
                'dev_id' => $developer->id
            ]);

            $developer->update([
                'total_hour' => $developer->total_hour + ($task->difficulty / $developer->difficulty),
            ]);
        }
    }
}
