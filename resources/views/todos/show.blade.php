<x-layout>
    <x-slot:title>
      {{ $todo->content }}
    </x-slot:title>
    <h1>{{ $todo->content }}</h1>
    <p><small>{{ $todo->priority }}</small></p>
    <p>Izpildīts: {{ $todo->completed ? "Jā" : "Nē" }}</p>
    <a href="/todos/{{$todo->id}}/edit">Rediģēt</a>
    <form method="POST" action="/todos/{{$todo->id}}">
    @csrf
    @method("delete")
    <button>🗑️</button>

    </form>
  </x-layout>