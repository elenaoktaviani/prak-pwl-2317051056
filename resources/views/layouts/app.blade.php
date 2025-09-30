<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>{{ $title ?? 'Laravel App' }}</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Custom CSS -->
    <style>
        body {
            background: linear-gradient(135deg, #93c5fd, #ffffff);
            min-height: 100vh;
            margin: 0;
            display: flex;
            flex-direction: column;
        }
        header, footer {
            text-align: center;
            padding: 1rem;
            color: #1e3a8a; /* biru tua */
        }
        header {
            font-size: 1.8rem;
            font-weight: bold;
        }
        footer {
            font-size: 0.9rem;
        }
        .container {
            flex: 1;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .card-custom {
            background: rgba(255, 255, 255, 0.95);
            border-radius: 20px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.15);
            padding: 2rem;
            width: 100%;
            max-width: 600px;
        }
        .title-gradient {
            background: linear-gradient(90deg, #3b82f6, #ffffff);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            font-weight: bold;
        }
        .btn-gradient {
            background: linear-gradient(90deg, #60a5fa, #ffffff);
            color: #1e3a8a;
            font-weight: 600;
            border: none;
            border-radius: 12px;
            transition: 0.3s;
        }
        .btn-gradient:hover {
            background: linear-gradient(90deg, #3b82f6, #dbeafe);
            color: #1e40af;
        }
    </style>
</head>
<body>
    @include('component.header')

    <div class="container">
        @yield('content')
    </div>

    @include('component.footer')

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
