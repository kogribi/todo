<x-layout>
    <x-slot:title>
      {{ $diary->title }}
    </x-slot:title>
    <h1>{{ $diary->title }}</h1>
    <p><small>{{ $diary->date }}</small></p>
    <p>{{ $diary->content }}</p>
    <a href="/diaries/{{$diary->id}}/edit">Rediģēt</a>
    <form method="POST" action="/diaries/{{$diary->id}}">
      @csrf
      @method("delete")
      <button>🗑️</button>
  
      </form>
  </x-layout>