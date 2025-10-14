<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>{{ $title ?? 'Laravel App' }}</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Toastify CSS -->
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">

    <!-- Custom CSS -->
    <style>
        body {
            background: linear-gradient(135deg, #a5d8ff, #e0f2fe, #ffffff);
            min-height: 100vh;
            margin: 0;
            display: flex;
            flex-direction: column;
        }
        header, footer {
            text-align: center;
            padding: 1rem;
            color: #1e3a8a;
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
            background: linear-gradient(90deg, #60a5fa, #93c5fd);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            font-weight: bold;
        }
        .btn-gradient {
            background: linear-gradient(90deg, #93c5fd, #dbeafe);
            color: #1e40af;
            font-weight: 600;
            border: none;
            border-radius: 12px;
            transition: 0.3s;
        }
        .btn-gradient:hover {
            background: linear-gradient(90deg, #60a5fa, #bfdbfe);
            color: #1e3a8a;
        }

        /* Toast custom animation */
        .toast-close {
            color: #fff !important;
            font-size: 18px !important;
            margin-right: 8px !important;
            opacity: 0.8 !important;
        }
        .toast-close:hover {
            opacity: 1 !important;
            transform: scale(1.1);
        }
        .custom-toastify {
            animation: slideDownFade 0.6s ease forwards;
        }
        @keyframes slideDownFade {
            from {
                opacity: 0;
                transform: translateY(-40px) scale(0.95);
            }
            to {
                opacity: 1;
                transform: translateY(0) scale(1);
            }
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

    <!-- Toastify JS -->
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/toastify-js"></script>

    <script>
    document.addEventListener("DOMContentLoaded", function () {
        // === SUCCESS NOTIFICATION ===
        @if(session('success'))
            Toastify({
                text: "{{ session('success') }}",
                duration: 3500,
                gravity: "top",
                position: "center",
                stopOnFocus: true,
                close: false,
                backgroundColor: "linear-gradient(135deg, #a5d8ff, #a5d8ff, #a5d8ff)", // biru muda lembut
                className: "custom-toastify",
                style: {
                    fontSize: "16px",            // lebih kecil
                    padding: "10px 25px",        // lebih ramping
                    borderRadius: "15px",
                    boxShadow: "0 8px 20px rgba(0,0,0,0.12)",
                    maxWidth: "400px",           // lebih kecil
                    textAlign: "center",
                    fontWeight: "600",
                    color: "#1e3a8a",
                    marginTop: "40px",           // posisi agak atas
                    opacity: "0.98",
                    border: "2px solid #bfdbfe",
                    transition: "transform 0.4s ease, opacity 0.4s ease",
                }
            }).showToast();
        @endif

        // === ERROR NOTIFICATION ===
        @if(session('error'))
            Toastify({
                text: "{{ session('error') }}",
                duration: 3500,
                gravity: "top",
                position: "center",
                stopOnFocus: true,
                close: true,
                backgroundColor: "linear-gradient(135deg, #fca5a5, #f87171, #ef4444)", // merah lembut
                className: "custom-toastify",
                style: {
                    fontSize: "18px",
                    padding: "10px 28px",
                    borderRadius: "15px",
                    boxShadow: "0 8px 20px rgba(0,0,0,0.15)",
                    maxWidth: "400px",
                    textAlign: "center",
                    fontWeight: "600",
                    color: "#fff",
                    marginTop: "40px",
                    opacity: "0.97",
                    border: "2px solid #ef4444",
                    transition: "transform 0.4s ease, opacity 0.4s ease",
                }
            }).showToast();
        @endif
    });
    </script>
</body>
</html>
