<x-layout>
    <x-slot:title>
      dianasgramata
    </x-slot:title>
    <h1>Dienas gramatas ieraksti</h1>
<ul>
    @foreach ($diaries as $diary)
    <li><a href="/diaries/{{ $diary->id }}">{{ $diary->title }}</a></li>
    @endforeach
</ul>
</x-layout>