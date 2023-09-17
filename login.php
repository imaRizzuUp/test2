<?php
// Ini adalah contoh database sederhana untuk keperluan demonstrasi
$users = [
    'henoch' => 'saerang',
    'langowan' => 'karukami',
    // Tambahkan username dan password lainnya sesuai kebutuhan
];

// Ambil data yang dikirimkan dari form
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Periksa apakah username ada dalam database dan password cocok
    if (isset($users[$username]) && $users[$username] === $password) {
        // Jika cocok, arahkan ke halaman selamat datang atau dashboard
        header('Location: indexx.html');
        exit;
    } else {
        // Jika tidak cocok, tampilkan pesan error
        $error = 'Username atau password salah.';
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="login.css">
    <title>Login Page</title>
</head>
<body>
    <header>
        <h1> Henoch,A.s Arcvive </h1>
    </header>
    <div class="container">
        <form action="login.php" method="POST">
            <h2>Login</h2>
            <?php if (isset($error)) : ?>
                <p style="color: red;"><?php echo $error; ?></p>
            <?php endif; ?>
            <div class="input-container">
                <label for="username">Username</label>
                <input type="text" id="username" name="username" required>
            </div>
            <div class="input-container">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" required>
            </div>
            <button type="submit">Login</button>
        </form>
    </div>
</body>
</html>
