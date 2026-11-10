@extends('layouts.app')

@section('title', 'Login')

@section('content')

<div class="card" style="max-width: 450px; margin: 60px auto;">

    <div style="text-align: center; margin-bottom: 25px;">
        <h1>🏓 Login</h1>
        <p>Sistem Pengelolaan Jadwal Latihan Tenis Meja</p>
    </div>

    <form action="{{ route('prosesLogin') }}" method="POST">
        @csrf

        <label for="username">Username</label>
        <input
            type="text"
            id="username"
            name="username"
            placeholder="Masukkan username"
            required
        >

        <button type="submit" class="btn" style="width: 100%;">
            Masuk
        </button>
    </form>

</div>

@endsection
