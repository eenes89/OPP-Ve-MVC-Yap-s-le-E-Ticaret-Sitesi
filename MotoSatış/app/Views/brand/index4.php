
<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <title>Markalar | MotoSatış</title>
    <link rel="stylesheet" href="/MotoSatış/public/assets/css/style.css">
</head>
<body>
    <header>
        <nav class="navbar">
            <a href="/MotoSatış/index.php?url=home/index" class="navbar-logo">MotoSatış</a>
            <div class="navbar-links">
                <a href="/MotoSatış/index.php?url=home/index">Anasayfa</a>
                <a href="/MotoSatış/index.php?url=product/list">Ürünler</a>
                <a href="/MotoSatış/index.php?url=cart/view">Sepetim</a>
                <a href="/MotoSatış/index.php?url=myAccount/index">Hesabım</a>
            </div>
        </nav>
    </header>
    <main style="max-width:900px;margin:40px auto 0 auto;">
        <h1 style="color:#b61e1e;font-size:2rem;margin-bottom:24px;">Markalar</h1>
        <ul style="list-style:none;padding:0;display:flex;gap:24px;flex-wrap:wrap;">
            <?php foreach($data['brands'] as $brand): ?>
                <li style="background:#fff;padding:22px 38px;border-radius:12px;box-shadow:0 2px 12px #b61e1e08;font-size:1.2rem;font-weight:600;color:#b61e1e;display:flex;align-items:center;gap:12px;">
                    <img src="/MotoSatış/public/assets/img/<?= htmlspecialchars($brand['logo']) ?>" alt="<?= htmlspecialchars($brand['name']) ?>" style="width:38px;height:38px;object-fit:contain;border-radius:8px;">
                    <?= htmlspecialchars($brand['name']) ?>
                </li>
            <?php endforeach; ?>
        </ul>
    </main>
</body>
</html>
