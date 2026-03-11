<x-layout>
    <x-slot:title>
      Rediģēšana
    </x-slot:title>
    <h1>Rediģēt</h1>
    <form method='POST' action="/todos/{{ $todo->id }}">
    @csrf
    @method('PUT')
        <label>
        <input name="content" value="{{old("content",$todo->content)}}">
        </label>
        @error("content")
        <p>{{ $message }}</p>
        @enderror
        <label>
        <select name="priority" >
            <option value="low" {{ old('priority', $todo->priority ?? '') == 'low' ? 'selected' : '' }}>low</option>
            <option value="medium" {{ old('priority', $todo->priority ?? '') == 'medium' ? 'selected' : '' }}>medium</option>
            <option value="high" {{ old('priority', $todo->priority ?? '') == 'high' ? 'selected' : '' }}>high</option>
        </select>
        </label>
        @error("priority")
        <p>{{ $message }}</p>
        @enderror
            Izpildīts: 
            <input name="completed" type="hidden" value="0">
            <input name="completed" type="checkbox" value="1" {{ old("completed", $todo->completed) ? 'checked' : '' }}>   
        </label>
        @error("completed")
            <p>{{ $message }}</p>
        @enderror
        <button>Saglabāt</button>
    </form>
  </x-layout>