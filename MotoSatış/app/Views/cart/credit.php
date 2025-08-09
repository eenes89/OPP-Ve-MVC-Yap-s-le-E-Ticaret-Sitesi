<?php
// app/Views/cart/credit.php
?>
<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <title>Kredi Kartı ile Ödeme | MotoSatış</title>
    <link rel="stylesheet" href="/MotoSatış/public/assets/css/style.css">
    <style>
        body { background: #fafbfc; }
        .credit-container { max-width: 420px; margin: 60px auto; background: #fff; border-radius: 16px; box-shadow: 0 2px 12px #b61e1e08; padding: 38px 32px; }
        .credit-title { color: #b61e1e; font-size: 1.5rem; font-weight: 700; margin-bottom: 28px; text-align:center; }
        .credit-form { display: flex; flex-direction: column; gap: 18px; }
        .credit-form label { font-size: 1.07rem; color: #222; font-weight: 500; margin-bottom: 4px; }
        .credit-form input { width: 100%; padding: 9px 10px; border-radius: 8px; border: 1px solid #e2e2e2; font-size: 1.04rem; }
        .credit-btn { background: linear-gradient(90deg, #b61e1e, #f00); color: #fff; padding: 12px 38px; border-radius: 9px; border: none; font-weight: 600; font-size: 1.09rem; cursor: pointer; transition: background .18s; box-shadow: 0 2px 8px #b61e1e22; margin-top:18px; width:100%; }
        .credit-btn:hover { background: #b61e1e; }
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
        <div class="credit-container">
            <div class="credit-title">Kredi Kartı ile Ödeme</div>
            <form class="credit-form" method="post" action="/MotoSatış/app/Views/cart/checkout.php">
                <div>
                    <label for="cardname">Kart Üzerindeki İsim</label>
                    <input type="text" id="cardname" name="cardname" required>
                </div>
                <div>
                    <label for="cardnumber">Kart Numarası</label>
                    <input type="text" id="cardnumber" name="cardnumber" maxlength="19" pattern="[0-9 ]{16,19}" required placeholder="0000 0000 0000 0000">
                </div>
                <div style="display:flex;gap:12px;">
                    <div style="flex:1;">
                        <label for="expdate">Son Kullanma Tarihi</label>
                        <input type="text" id="expdate" name="expdate" maxlength="5" pattern="[0-9]{2}/[0-9]{2}" required placeholder="AA/YY">
                    </div>
                    <div style="flex:1;">
                        <label for="cvv">CVV</label>
                        <input type="text" id="cvv" name="cvv" maxlength="4" pattern="[0-9]{3,4}" required placeholder="123">
                    </div>
                </div>
                <button type="submit" class="credit-btn">Ödemeyi Tamamla</button>
            </form>
        </div>
    </main>
</body>
</html>
