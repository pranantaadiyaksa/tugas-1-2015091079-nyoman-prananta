@extends('layouts.main')

@section('container')
    <h1>Halaman Profil</h1>
    <p>{{ $name; }}</p>
    {{ $nim; }}<p>
    {{ $email; }}<p>
        <img class="round-image" src="img/{{ $image }}" alt="{{ $name }}">

@endsection
<style>
    .round-image {
  border-radius: 50%;
  width: 200px;
}

</style>