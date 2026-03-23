<!-- resources/views/layouts/dashboard.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Admin Dashboard')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body, html { height: 100%; margin: 0; }
        .main-container { display: flex; height: 100vh; overflow: hidden; }
        .content-area { flex: 1; display: flex; flex-direction: column; overflow: hidden; }
        main { flex: 1; overflow-y: auto; padding: 1rem; background-color: #f8f9fa; }
    </style>
</head>
<body>
    <div class="main-container">
        <!-- Sidebar -->
        <x-sidebar />

        <!-- Main content -->
        <div class="content-area">
            <!-- Navbar -->
            <x-navbar />

            <!-- Scrollable content -->
            <main>
                @yield('content')
            </main>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>