<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use Illuminate\Support\Facades\DB;
// use App\Http\Controllers\Controller;
use App\Models\Todo;
use GrahamCampbell\ResultType\Success;

// use DB;

class TodoController extends Controller
{
    //
    public function index()
    {
        return view('welcome',['todos'=>Todo::orderBy('id','DESC')->get()]);
    }

    public function edit(Todo $todo)
    {
        return response()->json($todo);
    }

    public function store(Request $request)
    {
        $todo = Todo::updateOrCreate(
            ['id'=>$request->id],
            ['name'=>$request->name]
        );

        return response()->json($todo);
    }

    public function destroy(Todo $todo){
        $todo->delete();
        return response()->json('Success');
    }
}
