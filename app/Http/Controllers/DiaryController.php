<?php

namespace App\Http\Controllers;

use App\Models\Diary;
use Illuminate\Http\Request;

class DiaryController extends Controller
{

    public function __construct()
    {
    $this->authorizeResource(\App\Models\Diary::class, 'diary');
    }

    public function index(){
        $diaries = Diary::all();
        return view("diaries.index", compact("diaries"));

    }
    public function show(Diary $diary) {
        return view("diaries.show", compact("diary"));
    }

    public function create(){
        $diaries = Diary::all();
        return view("diaries.create", compact("diaries"));
    }
    public function store(Request $request){
        $validated = $request->validate([
            "title" => "required|max:50",
            "content" => "required",
            "date" => "required|date"
          ]);
        Diary::create([
            "title" => $validated["title"],
            "content" => $validated["content"],
            "date" => $validated["date"],
            'user_id' => auth()->id()
          ]);
            return redirect("/diaries");
    }
    public function edit(Diary $diary){
        return view("diaries.edit", compact("diary"));
    }
    public function update(Request $request, Diary $diary){
        $validated = $request->validate([
            "title" => ["required", "max:50"],
            "content" => ["required", "max:255"],
            "date" => ["required", "date"]
          ]); 
          $diary->title = $validated["title"];
          $diary->content = $validated["content"];
          $diary->date = $validated["date"];
          $diary->save();
          return redirect("/diaries/$diary->id");
    }
    public function destroy(Diary $diary){
        $diary->delete();
        return redirect("/diaries");
    }
}

