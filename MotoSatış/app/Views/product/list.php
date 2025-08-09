<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ürünler</title>
    <link rel="stylesheet" href="/MotoSatış/public/assets/css/style.css">
    <link rel="stylesheet" href="/MotoSatış/public/assets/css/effects.css">
</head>
<body>
    <h1>Ürünler</h1>
    <ul>
        <?php foreach($data['products'] as $product): ?>
            <li>
                <a href="/index.php?url=product/detail/<?= $product['id'] ?> ">
                    <?= htmlspecialchars($product['name']) ?> - <?= $product['price'] ?> TL
                </a>
            </li>
            <?php endforeach; ?>
    </ul>
    <a href="MotoSatış/app/Views/home/index1.php">Anasayfa</a>
    <a href="Motosatış/app/Views/cart/index3.php">Sepetim</a>
</body>
</html>