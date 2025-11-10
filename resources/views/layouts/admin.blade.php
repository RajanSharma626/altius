<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Admin Panel')</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
    <style>
        :root {
            --admin-bg: #0f172a;
            --admin-surface: #ffffff;
            --admin-muted: #64748b;
            --admin-accent: #2563eb;
        }

        body {
            min-height: 100vh;
            background: #f1f5f9;
            font-family: 'Inter', sans-serif;
        }

        .admin-navbar {
            background: var(--admin-bg);
            padding: 1rem 1.5rem;
            color: #fff;
        }

        .admin-navbar .brand {
            font-weight: 700;
            font-size: 1.1rem;
        }

        .admin-navbar .nav-link,
        .admin-navbar button {
            color: rgba(255, 255, 255, 0.85);
            font-weight: 500;
        }

        .admin-navbar .nav-link:hover {
            color: #fff;
        }

        .admin-container {
            padding: 2.5rem 2rem;
        }
    </style>
</head>
<body>
    <nav class="admin-navbar d-flex justify-content-between align-items-center shadow-sm">
        <div class="d-flex align-items-center gap-3">
            <span class="brand">Aura Admin</span>
            <span class="badge bg-primary-subtle text-light">Dashboard</span>
        </div>
        <div class="d-flex align-items-center gap-3">
            <span class="small">Signed in as {{ auth()->user()->name }}</span>
            <form method="POST" action="{{ route('admin.logout') }}">
                @csrf
                <button type="submit" class="btn btn-sm btn-outline-light">Logout</button>
            </form>
        </div>
    </nav>

    <main class="admin-container">
        @yield('content')
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

