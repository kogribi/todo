<x-layout>
    <x-slot:title>
     welcome
    </x-slot:title>
    <h1>Svieks, Laravel!</h1>
@guest
  <p>Sveiks, viesi!</p>
  <a href="/login">Login</a>
  <br>
  <a href="/register">Register</a>
@endguest
  </x-layout>