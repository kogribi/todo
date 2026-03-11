<?php

namespace App\Http\Controllers;

use App\Models\ToDo;
use Illuminate\Http\Request;

class ToDoController extends Controller
{
    public function index(){
        $todos = ToDo::all();
        return view("todos.index", compact("todos"));

    }
    public function show(ToDo $todo) {
        return view("todos.show", compact("todo"));
    }
    public function create(){
        $todos = ToDo::all();
        return view("todos.create", compact("todos"));
    }
    public function store(Request $request){
        $validated = $request->validate([
            "content" => "required|max:255",
            "priority" => "required",
          ]);
        ToDo::create([
            "content" => $validated["content"],
            "completed" => false,
            "priority" =>$validated["priority"]
          ]);
            return redirect("/todos");
    }
    public function edit(ToDo $todo){
        $todos = ToDo::all();
        return view("todos.edit", compact("todo", "todos"));
    }
    public function update(Request $request, ToDo $todo){
        $validated = $request->validate([
            "completed" => ["boolean"],
            "content" => ["required", "max:255"],
            "priority" =>["required",]
          ]); 
          $todo->content = $validated["content"];
          $todo->completed = $validated["completed"];
          $todo->priority = $validated["priority"];
          $todo->save();
          return redirect("/todos/$todo->id");
    }
    public function destroy(ToDo $todo){
        $todo->delete();
        return redirect("/todos");
    }
}
