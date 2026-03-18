<x-layout>
<x-slot:title>
      Login
</x-slot:title>
    <h1>Profil</h1>
    @auth
  <p>Sveiks, {{ Auth::user()->name}}</p>
  <form method="post" action="/logout">
  @csrf
  @method("delete")
  <button>logout</button>
  </form>
  <a href="/auth">Secret</a>
@endauth
</x-layout>