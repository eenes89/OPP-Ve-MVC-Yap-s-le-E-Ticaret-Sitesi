<?php
// app/Views/cart/payment.php
?>
<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <title>Ödeme Yöntemleri | MotoSatış</title>
    <link rel="stylesheet" href="/MotoSatış/public/assets/css/style.css">
    <style>
        body { background: #fafbfc; }
        .payment-container { max-width: 520px; margin: 60px auto; background: #fff; border-radius: 16px; box-shadow: 0 2px 12px #b61e1e08; padding: 38px 32px; }
        .payment-title { color: #b61e1e; font-size: 1.7rem; font-weight: 700; margin-bottom: 28px; text-align:center; }
        .payment-methods { display: flex; flex-direction: column; gap: 22px; }
        .payment-method { background: #fafbfc; border-radius: 10px; padding: 18px 22px; box-shadow: 0 1px 6px #b61e1e11; display: flex; align-items: center; gap: 18px; }
        .payment-method input[type="radio"] { accent-color: #b61e1e; width: 22px; height: 22px; }
        .payment-method label { font-size: 1.09rem; color: #222; font-weight: 500; cursor:pointer; }
        .payment-btn { background: linear-gradient(90deg, #b61e1e, #f00); color: #fff; padding: 12px 38px; border-radius: 9px; border: none; font-weight: 600; font-size: 1.09rem; cursor: pointer; transition: background .18s; box-shadow: 0 2px 8px #b61e1e22; margin-top:32px; width:100%; }
        .payment-btn:hover { background: #b61e1e; }
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
        <div class="payment-container">
            <div class="payment-title">Ödeme Yöntemleri</div>
            <form id="paymentForm" method="post" action="/MotoSatış/app/Views/cart/checkout.php">
                <div class="payment-methods">
                    <div class="payment-method">
                        <input type="radio" id="credit" name="payment" value="credit" checked>
                        <label for="credit">Kredi Kartı ile Ödeme</label>
                    </div>
                    <div class="payment-method">
                        <input type="radio" id="transfer" name="payment" value="transfer">
                        <label for="transfer">Banka Havalesi/EFT</label>
                    </div>
                    <div class="payment-method">
                        <input type="radio" id="cash" name="payment" value="cash">
                        <label for="cash">Kapıda Nakit Ödeme</label>
                    </div>
                </div>
                <button type="submit" class="payment-btn">Devam Et</button>
            </form>
            <script>
            document.getElementById('paymentForm').addEventListener('submit', function(e) {
                var selected = document.querySelector('input[name="payment"]:checked').value;
                if(selected === 'credit') {
                    e.preventDefault();
                    window.location.href = '/MotoSatış/app/Views/cart/credit.php';
                } else if(selected === 'transfer') {
                    e.preventDefault();
                    window.location.href = '/MotoSatış/app/Views/cart/transfer.php';
                } else if(selected === 'cash') {
                    e.preventDefault();
                    window.location.href = '/MotoSatış/app/Views/cart/cash.php';
                }
            });
            </script>
        </div>
    </main>
</body>
</html>
