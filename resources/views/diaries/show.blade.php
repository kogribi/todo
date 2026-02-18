<x-layout>
    <x-slot:title>
      {{ $diary->title }}
    </x-slot:title>
    <h1>{{ $diary->title }}</h1>
    <p><small>{{ $diary->date }}</small></p>
    <p>{{ $diary->content }}</p>
    
  </x-layout>