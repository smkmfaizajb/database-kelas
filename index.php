<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Hardcoded username & password
    if ($username == "admin" && $password == "admin1234") {
        echo "Uwawww Login berhasil! kemungkinan ini Flagnya: CTFT{345y_l091n_umum}";
    } else {
        echo "Yahhh Login gagal!";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body>
    <h2>Ayo Ayo Ayo Login!!!</h2>
    <form method="post">
        Username: <input type="text" name="username"><br>
        Password: <input type="password" name="password"><br>
        <input type="submit" value="Login">
    </form>
</body>
</html>