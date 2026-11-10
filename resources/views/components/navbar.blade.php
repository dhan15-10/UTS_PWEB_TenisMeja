<nav class="navbar">
    <h2>🏓 Tenis Meja UNEJ</h2>

    <div>
        <a href="{{ route('dashboard', ['username' => request('username', 'Mahasiswa')]) }}">
            Dashboard
        </a>

        <a href="{{ route('pengelolaan', ['username' => request('username', 'Mahasiswa')]) }}">
            Pengelolaan
        </a>

        <a href="{{ route('profile', ['username' => request('username', 'Mahasiswa')]) }}">
            Profile
        </a>

        <a href="{{ route('login') }}">Logout</a>
    </div>
</nav>