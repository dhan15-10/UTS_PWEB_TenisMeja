<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') - Tenis Meja</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }

        body {
            background: #f1f5f9;
            color: #1e293b;
        }

        .container {
            width: 90%;
            max-width: 1100px;
            margin: 30px auto;
        }

        .navbar {
            background: #0f172a;
            color: white;
            padding: 18px 5%;
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-wrap: wrap;
            gap: 15px;
        }

        .navbar h2 {
            font-size: 20px;
        }

        .navbar a {
            color: white;
            text-decoration: none;
            margin-left: 18px;
            font-size: 14px;
        }

        .navbar a:hover {
            color: #38bdf8;
        }

        .card {
            background: white;
            padding: 25px;
            border-radius: 12px;
            box-shadow: 0 3px 12px rgba(0,0,0,0.06);
            margin-bottom: 20px;
        }

        h1 {
            margin-bottom: 12px;
            color: #0f172a;
        }

        p {
            line-height: 1.6;
        }

        .btn {
            display: inline-block;
            background: #0284c7;
            color: white;
            padding: 11px 18px;
            border: none;
            border-radius: 6px;
            text-decoration: none;
            cursor: pointer;
            margin-top: 12px;
        }

        .btn:hover {
            background: #0369a1;
        }

        input {
            width: 100%;
            padding: 12px;
            margin-top: 8px;
            margin-bottom: 15px;
            border: 1px solid #cbd5e1;
            border-radius: 6px;
        }

        label {
            font-weight: bold;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
            min-width: 650px;
        }

        th, td {
            padding: 13px;
            text-align: left;
            border-bottom: 1px solid #e2e8f0;
        }

        th {
            background: #0f172a;
            color: white;
        }

        .table-wrapper {
            overflow-x: auto;
        }

        .status {
            background: #dcfce7;
            color: #166534;
            padding: 5px 10px;
            border-radius: 20px;
            font-size: 12px;
        }

        .footer {
            text-align: center;
            padding: 20px;
            color: #64748b;
            margin-top: 40px;
        }

        @media (max-width: 600px) {
            .navbar {
                flex-direction: column;
                align-items: flex-start;
            }

            .navbar a {
                margin-left: 0;
                margin-right: 12px;
                display: inline-block;
                margin-top: 10px;
            }

            .container {
                width: 94%;
            }
        }
    </style>
</head>
<body>

    <x-navbar />

    <main class="container">
        @yield('content')
    </main>

    @include('components.footer')

</body>
</html>
