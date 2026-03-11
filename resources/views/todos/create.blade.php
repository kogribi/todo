<x-layout>
    <x-slot:title>
      Izveidot uzdevumu
    </x-slot:title>
    <h1>Izveiot</h1>
    <form method="POST" action="/todos">
        @csrf
        <input name="content" />
        @error("content")
            <p>{{ $message }}</p>
        @enderror
        <label>
        <select name="priority">
            <option value="low">low</option>
            <option value="medium">medium</option>
            <option value="high">high</option>
        </select>
        </label>
        @error("priority")
        <p>{{ $message }}</p>
        @enderror
        <button>Saglabāt</button>
    </form>
  </x-layout>