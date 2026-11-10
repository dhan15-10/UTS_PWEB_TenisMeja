@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')

<div class="card">
    <h1>Selamat Datang, {{ $username }}! 👋</h1>

    <p>
        Selamat datang di Sistem Pengelolaan Jadwal Latihan
        Tenis Meja Fasilkom.
    </p>

    <p style="margin-top: 15px;">
        Melalui aplikasi ini, kamu dapat melihat informasi
        dan jadwal kegiatan latihan tenis meja.
    </p>
</div>

<div class="card">
    <h2>Informasi Kegiatan</h2>

    <p style="margin-top: 10px;">
        Berikut beberapa informasi mengenai kegiatan latihan:
    </p>

    <ul style="margin: 15px 0 0 20px; line-height: 2;">
        <li>Latihan teknik dasar tenis meja.</li>
        <li>Latihan servis dan pukulan.</li>
        <li>Latihan strategi pertandingan.</li>
        <li>Evaluasi kemampuan pemain.</li>
    </ul>

    <a href="{{ route('pengelolaan', ['username' => $username]) }}" class="btn">
    Lihat Jadwal Latihan
    </a>
    
</div>

@endsection
