            <script>
            var timerEl = document.getElementById('timer');
            var inputEl = document.getElementById('verifyCodeInput');
            var submitBtn = document.getElementById('submitBtn');
            var time = 60;
            var interval = setInterval(function(){
                time--;
                var m = Math.floor(time/60).toString().padStart(2,'0');
                var s = (time%60).toString().padStart(2,'0');
                timerEl.textContent = m+":"+s;
                if(time <= 0){
                    clearInterval(interval);
                    timerEl.textContent = "Süre doldu";
                    inputEl.disabled = true;
                    submitBtn.disabled = true;
                    submitBtn.style.opacity = "0.6";
                    setTimeout(function(){
                        var answer = confirm("Süre doldu! Tekrar kod almak ister misiniz?\nTamam: Yeni kod al\nİptal: Ana sayfaya dön");
                        if(answer){
                            // Sayfayı yenile, yeni kod gönderildi gibi davran
                            window.location.reload();
                        }else{
                            window.location.href = '/MotoSatış/app/Views/home/index1.php';
                        }
                    }, 400);
                }
            },1000);
            </script>
<?php
// app/Views/cart/checkout.php
?>
<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <title>Sipariş Onayı | MotoSatış</title>
    <link rel="stylesheet" href="/MotoSatış/public/assets/css/style.css">
    <style>
        body { background: #fafbfc; }
        .checkout-container { max-width: 520px; margin: 60px auto; background: #fff; border-radius: 16px; box-shadow: 0 2px 12px #b61e1e08; padding: 38px 32px; text-align:center; }
        .checkout-title { color: #b61e1e; font-size: 1.7rem; font-weight: 700; margin-bottom: 28px; }
        .checkout-info { font-size: 1.12rem; color: #222; margin-bottom: 22px; }
        .checkout-btn { background: linear-gradient(90deg, #b61e1e, #f00); color: #fff; padding: 12px 38px; border-radius: 9px; border: none; font-weight: 600; font-size: 1.09rem; cursor: pointer; transition: background .18s; box-shadow: 0 2px 8px #b61e1e22; margin-top:32px; width:100%; }
        .checkout-btn:hover { background: #b61e1e; }
    </style>
</head>
<body>
    <header>
        <nav class="navbar">
            <a href="MotoSatış/app/Views/home/index1.php" class="navbar-logo">MotoSatış</a>
            <div class="navbar-links">
                <a href="MotoSatış/app/Views/home/index1.php">Anasayfa</a>
                <a href="MotoSatış/app/Views/product/index.php">Ürünler</a>
                <a href="/MotoSatış/app/Viewscart/index3.php">Sepetim</a>
                <a href="/MotoSatış/app/Views/myAccount/index2.php">Hesabım</a>
            </div>
        </nav>
    </header>
    <main>
        <div class="checkout-container">
            <div class="checkout-title">Siparişinizi Onaylayın</div>
            <div class="checkout-info">Telefonunuza gönderilen doğrulama kodunu girerek siparişi tamamlayabilirsiniz.</div>
            <form id="verifyForm" method="post" action="/MotoSatış/app/Views/cart/complete.php" style="display:flex;flex-direction:column;gap:18px;align-items:center;">
                <div style="display:flex;flex-direction:column;align-items:center;gap:8px;width:100%;">
                    <input type="text" id="verifyCodeInput" name="verify_code" placeholder="Doğrulama Kodu" required style="width:220px;padding:10px 12px;border-radius:8px;border:1px solid #e2e2e2;font-size:1.08rem;text-align:center;">
                    <span id="timer" style="color:#b61e1e;font-weight:600;font-size:1.08rem;">01:00</span>
                </div>
                <button type="submit" class="checkout-btn" id="submitBtn">Siparişi Tamamla</button>
            </form>
            <script>
            var timerEl = document.getElementById('timer');
            var inputEl = document.getElementById('verifyCodeInput');
            var submitBtn = document.getElementById('submitBtn');
            var time = 60;
            var interval = setInterval(function(){
                time--;
                var m = Math.floor(time/60).toString().padStart(2,'0');
                var s = (time%60).toString().padStart(2,'0');
                timerEl.textContent = m+":"+s;
                if(time <= 0){
                    clearInterval(interval);
                    timerEl.textContent = "Süre doldu";
                    inputEl.disabled = true;
                    submitBtn.disabled = true;
                    submitBtn.style.opacity = "0.6";
                }
            },1000);
            </script>
        </div>
    </main>
</body>
</html>
