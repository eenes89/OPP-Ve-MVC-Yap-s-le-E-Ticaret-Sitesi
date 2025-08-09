<?php
// app/Views/cart/complete.php
?>
<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <title>Sipariş Onaylandı | MotoSatış</title>
    <link rel="stylesheet" href="/MotoSatış/public/assets/css/style.css">
    <style>
        body { background: #fafbfc; }
        .complete-container { max-width: 420px; margin: 80px auto; background: #fff; border-radius: 16px; box-shadow: 0 2px 12px #b61e1e08; padding: 48px 36px; text-align:center; }
        .complete-title { color: #b61e1e; font-size: 1.7rem; font-weight: 700; margin-bottom: 28px; }
        .complete-info { font-size: 1.13rem; color: #222; margin-bottom: 22px; }
        .complete-btn { background: linear-gradient(90deg, #b61e1e, #f00); color: #fff; padding: 12px 38px; border-radius: 9px; border: none; font-weight: 600; font-size: 1.09rem; cursor: pointer; transition: background .18s; box-shadow: 0 2px 8px #b61e1e22; margin-top:18px; width:100%; }
        .complete-btn:hover { background: #b61e1e; }
    </style>
    <script>
    setTimeout(function(){ window.location.href = '/MotoSatış/app/Views/home/index1.php'; }, 3500);
    </script>
</head>
<body>
    <header>
        <nav class="navbar">
            <a href="/MotoSatış/app/Views/home/index1.php" class="navbar-logo">MotoSatış</a>
            <div class="navbar-links">
                <a href="/MotoSatış/app/Views/home/index1.php">Anasayfa</a>
                <a href="/MotoSatış/app/Views/product/index.php">Ürünler</a>
                <a href="/MotoSatış/app/Views/cart/index3.php">Sepetim</a>
                <a href="/MotoSatış/app/Views/myAccount/index2.php">Hesabım</a>
            </div>
        </nav>
    </header>
    <main>
        <div class="complete-container">
            <div class="complete-title">Siparişiniz Onaylanmıştır!</div>
            <div class="complete-info">Siparişiniz başarıyla alındı. <br>Kısa süre içinde ana sayfaya yönlendirileceksiniz.<br><br>Teşekkürler!</div>
            <a href="/MotoSatış/app/Views/home/index1.php" class="complete-btn">Ana Sayfaya Dön</a>
        </div>
        <script>
        setTimeout(function(){ window.location.href = '/MotoSatış/app/Views/home/index1.php'; }, 3000);
        </script>
    </main>
</body>
</html>
