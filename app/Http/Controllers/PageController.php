<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function login()
    {
        return view('login');
    }

    public function prosesLogin(Request $request)
    {
        $request->validate([
            'username' => 'required'
        ]);

        return redirect()->route('dashboard', [
            'username' => $request->username
        ]);
    }

    public function dashboard(Request $request)
    {
        $username = $request->query('username', 'Mahasiswa');

        return view('dashboard', compact('username'));
    }

    public function pengelolaan(Request $request)
    {
        $username = $request->query('username', 'Mahasiswa');
        
        $jadwal = [
            [
                'hari' => 'Senin',
                'waktu' => '15.00 - 17.00',
                'lokasi' => 'Depan Gedung TU',
                'kegiatan' => 'Latihan Teknik Dasar',
                'pelatih' => 'Pak Bima',
                'status' => 'Tersedia'
            ],
            [
                'hari' => 'Rabu',
                'waktu' => '15.00 - 17.00',
                'lokasi' => 'Depan Gedung TU',
                'kegiatan' => 'Latihan Servis',
                'pelatih' => 'Pak Soleh',
                'status' => 'Tersedia'
            ],
            [
                'hari' => 'Jumat',
                'waktu' => '15.00 - 17.00',
                'lokasi' => 'Depan Gedung TU',
                'kegiatan' => 'Latihan Pertandingan',
                'pelatih' => 'Pak Sofyan',
                'status' => 'Penuh'
            ]
        ];

        return view('pengelolaan', compact('jadwal', 'username'));
    }

    public function profile(Request $request)
    {
        $username = $request->query('username', 'Mahasiswa');

        return view('profile', compact('username'));
    }
}
