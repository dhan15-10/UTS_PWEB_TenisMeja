@extends('layouts.app')

@section('title', 'Profile')

@section('content')

<div class="card" style="max-width: 600px; margin-left: auto; margin-right: auto;">
    <h1>Profile Pengguna</h1>

    <p>Informasi pengguna aplikasi Sistem Pengelolaan Jadwal Latihan Tenis Meja.</p>
</div>

<div class="card" style="max-width: 600px; margin-left: auto; margin-right: auto;">

    <div style="text-align: center; margin-bottom: 25px;">
        <div style="
            width: 90px;
            height: 90px;
            background: #0284c7;
            color: white;
            border-radius: 50%;
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 35px;
            margin: auto;
        ">
            👤
        </div>

        <h2 style="margin-top: 15px;">{{ $username }}</h2>
        <p>Anggota Latihan Tenis Meja</p>
    </div>

    <hr style="border: 1px solid #e2e8f0; margin-bottom: 20px;">

    <p><strong>Username:</strong> {{ $username }}</p>

    <p style="margin-top: 12px;">
        <strong>Status:</strong> Anggota
    </p>

    <p style="margin-top: 12px;">
        <strong>Organisasi:</strong> Tenis Meja Fasilkom
    </p>

    <a href="{{ route('dashboard', ['username' => $username]) }}" class="btn">
        Kembali ke Dashboard
    </a>

</div>

@endsection
