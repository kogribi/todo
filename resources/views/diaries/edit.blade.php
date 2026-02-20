<x-layout>
    <x-slot:title>
      Rediģēšana
    </x-slot:title>
    <h1>Rediģēt</h1>
    <form method='POST' action="/diaries/{{ $diary->id }}">
    @csrf
    @method('PUT')
        <label>
        <input name="title" value="{{old("title",$diary->title)}}">
        </label>
        @error("title")
        <p>{{ $message }}</p>
        @enderror
        <label>
            <textarea name="content">{{old("content",$diary->content)}}</textarea>
            </label>
            @error("content")
            <p>{{ $message }}</p>
            @enderror
        <label>
            <input name="date" type="date" value="{{old("date",$diary->date)}}">
            </label>
        @error("date")
             <p>{{ $message }}</p>
        @enderror
        
        <button>Saglabāt</button>
    </form>
  </x-layout>