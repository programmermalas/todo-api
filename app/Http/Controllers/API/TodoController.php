<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

use App\Todo;

class TodoController extends Controller
{
    public function index()
    {
        $todos  = Todo::all();

        return response()->json($todos);
    }

    public function store(Request $request)
    {
        $todo   = Todo::create([
            'todo'  => $request->todo,
            'slug'  => Str::slug($requst->todo, '-')
        ]);

        return $response->json($todo, 201);
    }

    public function show(Todo $todo)
    {
        return response()->json($todo);
    }

    public function update(Request $request, Todo $todo)
    {
        $todo->update([
            'todo'  => $request->todo,
            'slug'  => Str::slug($requst->todo, '-')
        ]);

        return response()->json($todo, 200);
    }

    public function destroy(Todo $todo)
    {
        $todo->delete();

        return response()->json(null, 204);
    }
}
