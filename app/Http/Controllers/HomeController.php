<?php

namespace App\Http\Controllers;

use App\Models\Developer;
use App\Models\Task;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;


class HomeController extends Controller
{
    const WEEKLY_DEV_WORK_TIME = 45;

    /**
     * @return Application|Factory|View
     */
    public function index(): View|Factory|Application
    {


        $toDoList = [];
        $developers = Developer::all();
        $tasks      = Task::all();
        $sumTimingTask = $tasks->pluck('timing')->sum();



        $avgTime = round( $sumTimingTask / (self::WEEKLY_DEV_WORK_TIME * $developers->count()));

        for ($week=1; $week<=$avgTime; $week++) {
            foreach ($developers as $developer) {
                $hours = 0;
                foreach ($tasks as $key => $issue) {
                    if ($hours + $issue->timing <= self::WEEKLY_DEV_WORK_TIME
                        &&
                        $issue->degree_of_difficulty <= $developer->capacity)
                    {
                        $toDoList[$week][$developer->name][] = $issue->name;
                        unset($tasks[$key]);
                        $hours += $issue->timing;
                    }
                }
            }

            if (empty($tasks)) {
                break;
            }
        }

        return view('home',compact('avgTime','toDoList'));
   }

}
