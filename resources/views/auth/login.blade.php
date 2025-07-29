<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Login - SMK Pesat</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            margin: 0;
            font-family: 'Poppins', sans-serif;
            background-color: #f5f5f5;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .container {
            background: white;
            border-radius: 15px;
            display: flex;
            overflow: hidden;
            box-shadow: 0 8px 30px rgba(0, 0, 0, 0.1);
            max-width: 900px;
            width: 90%;
        }

        .login-section {
            flex: 1;
            padding: 40px;
            background-color: white;
        }

        .login-section h2 {
            font-size: 32px;
            color: #0058b1;
            margin-bottom: 25px;
            font-weight: 700;
            text-align: center;
        }

        .login-section input {
            padding: 15px;
            border: 2px solid #e0e0e0;
            margin-bottom: 20px;
            border-radius: 12px;
            font-size: 15px;
            width: calc(100% - 34px);
            transition: border-color 0.3s ease;
        }

        .login-section input:focus {
            border-color: #0058b1;
            outline: none;
        }

        .login-section button {
            background-color: #0058b1;
            color: white;
            border: none;
            padding: 15px;
            font-weight: 600;
            border-radius: 12px;
            cursor: pointer;
            transition: 0.3s ease;
            width: 100%;
            font-size: 16px;
        }

        .login-section button:hover {
            background-color: #004494;
            transform: translateY(-2px);
        }

        .register-section {
            background-color: #0058b1;
            color: white;
            display: flex;
            flex-direction: column;
            justify-content: flex-start;
            align-items: center;
            padding: 40px;
            position: relative;
            overflow: hidden;
            text-align: center;
        }

        .register-section::before {
            content: '';
            position: absolute;
            top: -50%;
            right: -50%;
            width: 200px;
            height: 200px;
            background-color: #f1c40f;
            border-radius: 50%;
            opacity: 0.1;
        }

        .register-section img {
            max-width: 250px;
            margin-bottom: 30px;
            margin-top: 10px;
        }

        .register-section h2 {
            font-size: 28px;
            font-weight: 700;
            margin-bottom: 10px;
            z-index: 1;
        }

        .register-section p {
            font-size: 16px;
            margin: 0;
            line-height: 1.6;
            z-index: 1;
        }

        .logo {
            max-width: 120px;
            margin-bottom: 30px;
            display: block;
            margin-left: auto;
            margin-right: auto;
        }

        @media (max-width: 768px) {
            .container {
                flex-direction: column;
                width: 95%;
            }

            .register-section {
                padding: 30px;
            }

            .register-section img {
                max-width: 200px;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="login-section">
            <img src="{{ asset('images/pesat.jpg') }}" alt="Logo SMK Pesat" class="logo">
            <h2>Selamat Datang!</h2>
           <form method="POST" action="{{ route('login') }}">
    @csrf
    <input type="text" name="username" placeholder="Username" required>
    <input type="password" name="password" placeholder="Password" required>
    <button type="submit">Login</button>
</form>

        </div>
        <div class="register-section">
            <img src="{{ asset('images/3siswa.png') }}" alt="Gambar Siswa">
            <h2>Hello, Admin!</h2>
            <p>Silakan login untuk mengakses dashboard Evaluasi Guru SMK Pesat.</p>
        </div>
    </div>
</body>
</html>
