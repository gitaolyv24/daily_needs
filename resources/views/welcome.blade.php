<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Selamat Datang | MyNeeds</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <style>
        body, html { height: 100%; margin: 0; font-family: 'Segoe UI', sans-serif; }
        .bg-cover {
            background: linear-gradient(rgba(26, 42, 108, 0.8), rgba(178, 31, 31, 0.8)), 
                        url('https://images.unsplash.com/photo-1534913235434-273aa25c267f?auto=format&fit=crop&q=80');
            background-size: cover;
            background-position: center;
            height: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            text-align: center;
        }
        .hero-box {
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
            padding: 50px;
            border-radius: 30px;
            border: 1px solid rgba(255, 255, 255, 0.2);
            box-shadow: 0 20px 50px rgba(0,0,0,0.3);
            max-width: 600px;
        }
        .btn-start {
            background: #fdbb2d;
            color: #1a2a6c;
            font-weight: bold;
            padding: 15px 40px;
            border-radius: 50px;
            text-decoration: none;
            font-size: 1.2rem;
            transition: 0.3s;
            display: inline-block;
        }
        .btn-start:hover {
            background: white;
            transform: scale(1.05);
            color: #b21f1f;
        }
        .floating {
            animation: floating 3s ease-in-out infinite;
        }
        @keyframes floating {
            0% { transform: translateY(0px); }
            50% { transform: translateY(-20px); }
            100% { transform: translateY(0px); }
        }
    </style>
</head>
<body>

<div class="bg-cover">
    <div class="hero-box floating">
        <i class="bi bi-cart-check-fill" style="font-size: 5rem; color: #fdbb2d;"></i>
        <h1 class="display-4 fw-bold mt-3">MyNeeds App</h1>
        <p class="lead mb-4">Kelola daftar kebutuhan belanja dan prioritas harian Anda dengan lebih tertata dan mudah.</p>
        <hr class="my-4 border-light opacity-25">
        <a href="/needs" class="btn-start shadow">
            Mulai Sekarang <i class="bi bi-arrow-right ms-2"></i>
        </a>
    </div>
</div>

</body>
</html>