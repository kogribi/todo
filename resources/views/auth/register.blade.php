<x-layout>
    <x-slot:title>
      Register
    </x-slot:title>
    <h1>Reģistrēties</h1>
    <form method="post" action="/register">
    @csrf
    @if ($errors->any())
    <ul>
    @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
    @endforeach
    </ul>
    @endif
    <label>name
    <input name="name" required value="{{old("name")}}">
    </label>
    <br>
    <label> email
    <input name="email" type="email" required value="{{old("email")}}">
    </label>
    <br>
    <label> password
    <input name="password" type="password" required value="{{old("password")}}">
    </label>
    <br>
    <label> confirm password
    <input name="password_confirmation" type="password" required value="{{old("password_confirmation")}}">
    </label>
    <br>
    <button>Saglabāt</button>
    </form>
</x-layout>