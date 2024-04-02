<?php

namespace App\Http\Controllers;

use App\Http\Requests\TaskRequest;
use App\Models\Task;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TaskController extends Controller
{
    private $takslist = [
        'first' => 'sleep',
        'second' => 'eat',
        'third' => 'work'
    ];

    public function index(Request $request)
    {
        // if ($request->search) {
        //     return $this->takslist[$request->search];
        // }

        // $getIndex = DB::table('tasks')
        // ->where('task', 'like', "%$request->search%")
        // ->get();

        $getIndex['datas'] = Task::where('task', 'LIKE', "%$request->search%")
            ->paginate(5);
            // ->get();
        return view('tasks.index', $getIndex);
    }

    public function show($id)
    {
        // return $this->takslist[$id];
        $getShow = Task::find($id);

        return $getShow;
    }


    public function edit($id)
    {
        // return $this->takslist[$id];
        $getShow['data'] = Task::find($id);

        return view('tasks.editPost', $getShow);
    }

    public function update(TaskRequest $request, $id)
    {
        // $this->takslist[$key] = $request->task;
        // return $this->takslist;
        // dd($request);

        // $data    = [
        //     'user' => $request->user,
        //     'task' => $request->task,
        //     'label' => $request->label,
        // ];
        

        $flight = Task::find($request->id);

        $flight->user = $request->user;
        $flight->task = $request->task;
        $flight->label = $request->label;

        $flight->save();

        return redirect()->route('tasks.index');
    }

    public function create()
    {
        return view('tasks.createPost');
    }

    public function store(TaskRequest $request)
    {
        // $this->takslist[$request->label] = $request->task;
        // return $this->takslist;

        // $request->validate([
        //     'task' => ['required'],
        //     'label' => ['required'],
        //     'user' => ['required'],
        // ]);

        $data = [
            'user' => $request->user,
            'task' => $request->task,
            'label' => $request->label
        ];

        Task::create($data);
        return redirect()->route('tasks.index');
    }

    public function destroy($id)
    {
        $getShow = Task::find($id);
        $getShow->delete();

        return redirect()->route('tasks.index');
    }
}
