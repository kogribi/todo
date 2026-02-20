<x-layout>
    <x-slot:title>
      Izveidot dienasgramatas ierakstu
    </x-slot:title>
    <h1>Izveiot</h1>
    <form method="POST" action="/diaries">
        @csrf
        <input name="title" />
        @error("title")
            <p>{{ $message }}</p>
        @enderror
        <textarea name="content"></textarea>
        @error("body")
            <p>{{ $message }}</p>
        @enderror
        <input name="date" type="date" />
        @error("date")
            <p>{{ $message }}</p>
        @enderror
        <button>Saglabāt</button>
    </form>
  </x-layout>