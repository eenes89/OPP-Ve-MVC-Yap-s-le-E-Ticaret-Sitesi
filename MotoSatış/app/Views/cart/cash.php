<?php
// app/Views/cart/cash.php
?>
<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <title>Kapıda Nakit Ödeme | MotoSatış</title>
    <link rel="stylesheet" href="/MotoSatış/public/assets/css/style.css">
    <style>
        body { background: #fafbfc; }
        .cash-container { max-width: 420px; margin: 60px auto; background: #fff; border-radius: 16px; box-shadow: 0 2px 12px #b61e1e08; padding: 38px 32px; }
        .cash-title { color: #b61e1e; font-size: 1.5rem; font-weight: 700; margin-bottom: 28px; text-align:center; }
        .cash-info { font-size: 1.07rem; color: #222; margin-bottom: 18px; }
        .cash-btn { background: linear-gradient(90deg, #b61e1e, #f00); color: #fff; padding: 12px 38px; border-radius: 9px; border: none; font-weight: 600; font-size: 1.09rem; cursor: pointer; transition: background .18s; box-shadow: 0 2px 8px #b61e1e22; margin-top:18px; width:100%; }
        .cash-btn:hover { background: #b61e1e; }
    </style>
</head>
<body>
    <header>
        <nav class="navbar">
            <a href="/MotoSatış/index.php?url=home/index" class="navbar-logo">MotoSatış</a>
            <div class="navbar-links">
                <a href="/MotoSatış/app/Views/home/index1.php">Anasayfa</a>
                <a href="/MotoSatış/index.php?url=product/list">Ürünler</a>
                <a href="/MotoSatış/index.php?url=cart/view">Sepetim</a>
                <a href="/MotoSatış/index.php?url=myAccount/index">Hesabım</a>
            </div>
        </nav>
    </header>
    <main>
        <div class="cash-container">
            <div class="cash-title">Kapıda Nakit Ödeme</div>
            <div class="cash-info">Siparişiniz adresinize ulaştığında nakit olarak ödeme yapabilirsiniz. Kuryemiz size ödeme için yardımcı olacaktır.</div>
            <form method="post" action="/MotoSatış/app/Views/cart/checkout.php">
                <button type="submit" class="cash-btn">Siparişi Tamamla</button>
            </form>
        </div>
    </main>
</body>
</html>
