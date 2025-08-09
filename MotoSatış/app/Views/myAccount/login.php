<?php
// app/Views/myAccount/login.php
?><!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <title>Giriş Yap | MotoSatış</title>
    <link rel="stylesheet" href="/MotoSatış/public/assets/css/style.css">
    <style>
        body { background: #fafbfc; }
        .login-container { max-width: 400px; margin: 80px auto; background: #fff; border-radius: 14px; box-shadow: 0 2px 12px #b61e1e08; padding: 32px 28px; }
        .login-container h1 { color: #b61e1e; font-size: 1.6rem; margin-bottom: 18px; }
        .login-container input { width: 100%; padding: 9px 10px; border-radius: 8px; border: 1px solid #e2e2e2; font-size: 1.04rem; margin-bottom: 14px; }
        .login-btn { background: linear-gradient(90deg, #b61e1e, #f00); color: #fff; padding: 10px 28px; border-radius: 9px; border: none; font-weight: 600; font-size: 1.05rem; cursor: pointer; transition: background .18s; box-shadow: 0 2px 8px #b61e1e22; }
        .login-btn:hover { background: #b61e1e; }
    </style>
</head>
<body>
    <div class="login-container">
        <h1>Giriş Yap</h1>
        <form method="post" action="/MotoSatış/index.php?url=user/login">
            <input type="email" name="email" placeholder="E-posta" required>
            <input type="password" name="password" placeholder="Şifre" required>
            <button type="submit" class="login-btn">Giriş Yap</button>
        </form>
    </div>
</body>
</html>
