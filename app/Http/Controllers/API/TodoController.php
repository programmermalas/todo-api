<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Validator;

use App\Todo;

class TodoController extends Controller
{
    public function index()
    {
        // get all todo
        $todos  = Todo::all();

        return response()->json($todos);
    }

    public function store(Request $request)
    {
        // make validator request
        $validator  = Validator::make($request->all(), [
            'todo'  => 'required'
        ]);

        // if validator get an error
        if ($validator->fails()) {
            return response()->json([
                'message'   => $validator->messaages()->first()
            ], 400);
        }

        // create todo
        $todo   = Todo::create([
            'todo'  => $request->todo,
            'slug'  => Str::slug($request->todo, '-')
        ]);

        return response()->json($todo, 201);
    }

    public function show(Todo $todo)
    {
        return response()->json($todo);
    }

    public function update(Request $request, Todo $todo)
    {
        // make validator request
        $validator  = Validator::make($request->all(), [
            'todo'  => 'required'
        ]);

        // if validator get an error
        if ($validator->fails()) {
            return response()->json([
                'message'   => $validator->messaages()->first()
            ], 400);
        }

        // update todo
        $todo->update([
            'todo'  => $request->todo,
            'slug'  => Str::slug($request->todo, '-')
        ]);

        return response()->json($todo, 200);
    }

    public function destroy(Todo $todo)
    {
        // delete todo
        $todo->delete();

        return response()->json(null, 204);
    }
}
