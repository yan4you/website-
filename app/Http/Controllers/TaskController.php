<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TaskController extends Controller
{
    public function index()
    {
        // $tasks = DB::table('tasks')->post(); 
        return view('tasks.index', ['tasks' => $task]);
        $task = DB::table('tasks')->get();
    }

    public function store(Request $request)
    {
        $task = Task::create(
            $request->all()
        );
    }
}
