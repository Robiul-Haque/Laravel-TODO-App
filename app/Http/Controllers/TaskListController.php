<?php

namespace App\Http\Controllers;

class TaskListController extends Controller
{
    public function taskListIndex()
    {
        return view('TaskList');
    }
}
