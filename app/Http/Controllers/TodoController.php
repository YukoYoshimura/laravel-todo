<?php

namespace App\Http\Controllers;
use App\Todo;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class TodoController extends Controller
{
    //
    function index()
    {
        $todos = Todo::all();
        // dd($todo);
        return view('todo.index', compact('todos'));
    }

    function create()
    {
        return view('todo.create');
    }

    function store(Request $request)
    {
        // dd($request);
        $todos = new Todo;
        $todos -> title = $request -> title;
        $todos -> due_date = $request -> due_date;
        $todos -> user_id = Auth::id();

        $todos -> save();

        return redirect()->route('todo.index');
    }

    function destroy($id)
    {
        $todos = Todo::find($id);
        $todos->delete();
        return redirect()->route('todo.index');
    }
}
