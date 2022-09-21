<?php

namespace App\Http\Controllers;

//Taskクラスを読み込む
use App\Models\Task;

//use Illuminate\Http\Request;
use App\Http\Requests\TaskRequest;

class TaskController extends Controller
{
    //showページへ移動
    public function show($id)
    {
        $task = Task::find($id);
        return view('tasks.show', ['task'=> $task]);
    }

    public function index()
    {
        $tasks = Task::all();
        return view('tasks.index', ['tasks' => $tasks]);
    }

    public function store(TaskRequest $request)
    {
        //インスタンスの作成
        $task = new Task;

        //値の用意
        $task->title = $request->title;
        $task->body = $request->body;

        //保存
        $task->save();

        //indexへ戻る
        return redirect('/tasks');
    }
    public function edit($id)
    {
        $task = Task::find($id);
        return view('tasks.edit', ['task' => $task]);
    }

    public function update(TaskRequest $request, $id)
    {
        $task = Task::find($id);

        $task->title = $request->title;
        $task->body = $request->body;

        $task->save();

        return redirect('/tasks');
    }
    public function destroy($id)
    {
        $task = Task::find($id);
        $task->delete();

        return redirect('/tasks');
    }
}
