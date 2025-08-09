<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ürün Detayı</title>
    <link rel="stylesheet" href="/public/assets/css/style.css">
    <link rel="stylesheet" href="/public/assets/css/effects.css">
</head>
<body>
    <div class="product-detail-container">
        <h1><?= htmlspecialchars($data['product']['name']) ?></h1>
        <div class="product-detail-content">
            <img src="/MotoSatış/public/assets/img/<?= htmlspecialchars($data['product']['image']) ?>" alt="<?= htmlspecialchars($data['product']['name']) ?>" style="max-width:320px;border-radius:12px;box-shadow:0 4px 24px #b61e1e22;">
            <div class="product-detail-info">
                <p class="price">Fiyat: <?= $data['product']['price'] ?> TL</p>
                <?php if (!empty($data['product']['badge'])): ?><span style="background:#f5eaea;color:#a00;padding:2px 8px;border-radius:8px;font-size:0.95em;display:inline-block;margin:6px 0;"> <?= htmlspecialchars($data['product']['badge']) ?> </span><?php endif; ?>
                <p class="desc">Açıklama: <?= htmlspecialchars($data['product']['description']) ?></p>
                <p>Stok: <?= $data['product']['stock'] ?></p>
                <form method="post" action="#" style="display:flex;gap:12px;flex-wrap:wrap;">
                    <button type="submit" class="btn">Sepete Ekle</button>
                    <a href="#" class="btn" style="background:#facc15;color:#000;border:1.5px solid #b61e1e;">Ürünü İncele</a>
                </form>
                <a href="/index.php?url=product/list" class="btn" style="background:#fff;color:#b61e1e;border:1.5px solid #b61e1e;margin-top:16px;">Ürün Listesine Dön</a>
            </div>
        </div>
    </div>
    <!--
        Açıklama:
        - Ürün görseli, adı, fiyatı ve açıklaması modern bir kutuda gösterilir.
        - Sepete ekle ve listeye dön butonları bulunur.
        - Daha fazla bilgi (stok, marka, teknik detay) kolayca eklenebilir.
    -->
</body>
</html>