<!-- resources/views/welcome.blade.php -->
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking System</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <style>
        body {
            background-color: rgb(169, 169, 169); /* Ganti dengan warna latar belakang yang diinginkan */
        }
        .btn-custom {
            border: 2px solid;
            padding: 10px 20px;
            text-transform: uppercase;
        }
        .btn-login {
            border-color: #007bff;
            color: #007bff;
        }
        .btn-register {
            border-color: #28a745;
            color: #28a745;
        }
        .message-container {
            height: 100vh; /* Membuat tinggi halaman penuh */
            display: flex;
            flex-direction: column;
            justify-content: center; /* Menyusun konten di tengah vertikal */
            align-items: center; /* Menyusun konten di tengah horizontal */
            text-align: center; /* Menjaga teks tetap di tengah */
        }
        .buttons-container {
            position: absolute;
            top: 10px;
            right: 10px;
        }
    </style>
</head>
<body>
    <div class="container">
        <!-- Konten pesan di tengah halaman -->
        <div class="message-container">
            <h1>Selamat datang di aplikasi booking system for sport facilities</h1>
            <p>Silakan login atau register untuk melanjutkan</p>
        </div>
        
        <!-- Pojok kanan untuk Log In dan Register -->
        <div class="buttons-container">
            <a href="{{ route('login') }}" class="btn btn-custom btn-login mr-2">Log In</a>
            <a href="{{ route('register') }}" class="btn btn-custom btn-register">Register</a>
        </div>
    </div>
</body>
</html>
