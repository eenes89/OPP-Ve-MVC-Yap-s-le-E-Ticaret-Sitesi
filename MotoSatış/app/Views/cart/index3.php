<?php
// app/Views/cart/index3.php
?>
<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <title>Sepetim | MotoSatış</title>
    <link rel="stylesheet" href="/MotoSatış/public/assets/css/style.css">
    <style>
        body { background: #fafbfc; }
        .cart-container { max-width: 900px; margin: 48px auto 0 auto; background: #fff; border-radius: 16px; box-shadow: 0 2px 12px #b61e1e08; padding: 38px 32px; }
        .cart-title { color: #b61e1e; font-size: 2rem; font-weight: 700; margin-bottom: 28px; }
        .cart-table { width: 100%; border-collapse: collapse; margin-bottom: 32px; }
        .cart-table th, .cart-table td { padding: 16px 12px; text-align: left; font-size: 1.07rem; }
        .cart-table th { background: #f7eaea; color: #b61e1e; font-weight: 600; }
        .cart-table tr { border-bottom: 1px solid #ececec; }
        .cart-table td img { width: 60px; border-radius: 8px; }
        .cart-table .remove-btn { background: #fff; color: #b61e1e; border: 1px solid #b61e1e44; border-radius: 7px; padding: 6px 14px; font-weight: 500; cursor: pointer; transition: background .15s; }
        .cart-table .remove-btn:hover { background: #f7eaea; }
        .cart-summary { text-align: right; font-size: 1.15rem; color: #222; margin-bottom: 18px; }
        .cart-checkout-btn { background: linear-gradient(90deg, #b61e1e, #f00); color: #fff; padding: 12px 38px; border-radius: 9px; border: none; font-weight: 600; font-size: 1.09rem; cursor: pointer; transition: background .18s; box-shadow: 0 2px 8px #b61e1e22; }
        .cart-checkout-btn:hover { background: #b61e1e; }
    </style>
</head>
<body>
    <header>
        <nav class="navbar">
            <a href="/MotoSatış/index.php?url=home/index" class="navbar-logo">MotoSatış</a>
            <div class="navbar-links">
                <a href="/MotoSatış/app/Views/home/index1.php">Anasayfa</a>
                <a href="/MotoSatış/app/Views/product/index.php">Ürünler</a>
                <a href="/MotoSatış/app/Views/cart/index3.php">Sepetim</a>
                <a href="/MotoSatış/app/Views/myAccount/index2.php">Hesabım</a>
            </div>
        </nav>
    </header>
    <main>
        <div class="cart-container">
            <div class="cart-title">Sepetim</div>
            <table class="cart-table">
                <thead>
                    <tr>
                        <th>Ürün</th>
                        <th>Adet</th>
                        <th>Birim Fiyat</th>
                        <th>Toplam</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <?php $total = 0; ?>
                    <?php foreach($data['items'] as $item): ?>
                        <?php $lineTotal = $item['price'] * $item['quantity']; $total += $lineTotal; ?>
                        <tr>
                            <td><img src="/MotoSatış/public/assets/img/<?= htmlspecialchars($item['image']) ?>" alt="<?= htmlspecialchars($item['name']) ?>"> <?= htmlspecialchars($item['name']) ?></td>
                            <td><?= $item['quantity'] ?></td>
                            <td><?= $item['price'] ?> TL</td>
                            <td><?= $lineTotal ?> TL</td>
                            <td><button class="remove-btn">Kaldır</button></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
            <div class="cart-summary">Toplam: <strong><?= $total ?> TL</strong></div>
            <form method="get" action="/MotoSatış/app/Views/cart/payment.php" style="margin:0;">
                <button type="submit" class="cart-checkout-btn">Siparişi Tamamla</button>
            </form>
        </div>
    </main>
</body>
</html>
