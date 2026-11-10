@extends('layouts.app')

@section('title', 'Pengelolaan Jadwal')

@section('content')

<div class="card">
    <h1>Pengelolaan Jadwal Latihan</h1>

    <p>
        Berikut adalah daftar jadwal kegiatan latihan
        tenis meja Universitas Jember.
    </p>

    <div class="table-wrapper">
        <table>
            <thead>
                <tr>
                    <th>No</th>
                    <th>Hari</th>
                    <th>Waktu</th>
                    <th>Lokasi</th>
                    <th>Kegiatan</th>
                    <th>Pelatih</th>
                    <th>Status</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($jadwal as $item)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $item['hari'] }}</td>
                        <td>{{ $item['waktu'] }}</td>
                        <td>{{ $item['lokasi'] }}</td>
                        <td>{{ $item['kegiatan'] }}</td>
                        <td>{{ $item['pelatih'] }}</td>
                        <td>
                            <span class="status">
                                {{ $item['status'] }}
                            </span>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@endsection
