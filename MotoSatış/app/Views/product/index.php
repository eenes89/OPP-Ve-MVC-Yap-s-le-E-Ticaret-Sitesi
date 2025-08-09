<?php
// Tüm ürünler sayfası
// Varsayım: $products dizisi controller tarafından gönderiliyor
?>
<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tüm Ürünler | MotoSatış</title>
    <link rel="stylesheet" href="/MotoSatış/public/assets/css/style.css">
    <link rel="stylesheet" href="/MotoSatış/public/assets/css/all-products.css">
    <script src="/MotoSatış/public/assets/js/main.js" defer></script>
</head>
<body style="background:#fafbfc;">
    <header>
        <nav class="navbar">
            <a href="/MotoSatış/app/Views/home/index1.php" class="navbar-logo">MotoSatış</a>
            <form class="search-bar" action="/index.php?url=product/list" method="get" onsubmit="return searhRedirect(event)">
                <input type="hidden" name="url" value="product/list">
                <input type="text" name="q" placeholder="Ürün, kategori veya marka ara..." autocomplete="off">
                <button type="submit">Ara</button>
            </form>
            
            <div class="navbar-links">                
                <div class="dropdown">
                    <a href="/index.php?url=category/list" class="dropdown-toggle" tabindex="0">Kategoriler</a>
                    <ul class="dropdown-menu">
                        <li><a href="/index.php?url=category/list&id=1">Kasklar</a></li>
                        <li><a href="/index.php?url=category/list&id=2">Montlar</a></li>
                        <li><a href="/index.php?url=category/list&id=3">Aksesuarlar</a></li>
                        <li><a href="/index.php?url=category/list&id=4">Yedek Parça</a></li>
                    </ul>
                </div>
                <!-- Markalar dropdown (tek ve doğru yerde) -->
                <div class="dropdown">
                    <a href="/index.php?url=brand/list" class="dropdown-toggle" tabindex="0">Markalar</a>
                    <ul class="dropdown-menu">
                        <li><a href="/index.php?url=brand/list&id=1">Yamaha</a></li>
                        <li><a href="/index.php?url=brand/list&id=2">Honda</a></li>
                        <li><a href="/index.php?url=brand/list&id=3">Kawasaki</a></li>
                        <li><a href="/index.php?url=brand/list&id=4">Suzuki</a></li>
                        <li><a href="/index.php?url=brand/list&id=5">BMW</a></li>
                        <li><a href="/index.php?url=brand/list&id=6">CF Moto</a></li>
                        <li><a href="/index.php?url=brand/list&id=7">KTM</a></li>
                        <li><a href="/index.php?url=brand/list&id=8">Tüm Markalar</a></li>
                    </ul>
                </div>                
                <a href="/MotoSatış/app/Views/cart/index3.php">Sepetim</a>
                <a href="/MotoSatış/app/Views/myAccount/index2.php">Hesabım</a>
            </div>
        </nav>
    </header>
    <hr>
    <!-- Filtre panelini çizginin hemen altına, sol üst köşeye sabitliyoruz (sabit ve responsive) -->
    <aside class="filter-sidebar" id="filterSidebar" style="position: fixed; top: 72px; left: 72px; z-index: 40; box-shadow: 0 2px 16px #b61e1e11;">
        <button class="filter-toggle-btn" id="filterToggleBtn" aria-label="Filtreleri Aç/Kapat">
            <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M3 6H19M6 11H16M9 16H13" stroke="#b61e1e" stroke-width="2" stroke-linecap="round"/></svg> Filtreler
        </button>
        <div class="filter-content" id="filterContent">
            <form method="get" action="">
                <div class="filter-group">
                    <label for="filter-category">Kategori</label>
                    <select id="filter-category" name="category">
                        <option value="">Tümü</option>
                        <option value="kask">Kasklar</option>
                        <option value="mont">Montlar</option>
                        <option value="aksesuar">Aksesuarlar</option>
                        <option value="yedek">Yedek Parça</option>
                    </select>
                </div>
                <div class="filter-group">
                    <label for="filter-price">Fiyat Aralığı</label>
                    <input type="number" name="min_price" placeholder="Min" style="width:60px;"> -
                    <input type="number" name="max_price" placeholder="Maks" style="width:60px;">
                </div>
                <button type="submit" class="btn" style="width:100%;margin-top:10px;">Filtrele</button>
            </form>
        </div>
    </aside>
    <div style="height: 0;"></div>
    <main class="all-products-container" style="margin-left:0; margin-top: 80px;">
        <div class="all-products-list">
            <?php if (!empty($products)) : foreach ($products as $product) : ?>
                <div class="all-product-card">
                    <img src="<?= htmlspecialchars($product['image'] ?? '/MotoSatış/public/assets/img/noimg.png') ?>" alt="<?= htmlspecialchars($product['name']) ?>">
                    <h3><?= htmlspecialchars($product['name']) ?></h3>
                    <div class="price">
                        <?= htmlspecialchars($product['price']) ?> TL
                        <?php if (!empty($product['badge'])): ?>
                            <span class="badge" style="background:#ffe066;color:#222;font-size:0.92em;padding:2px 7px;border-radius:8px;margin-left:6px;">
                                <?= htmlspecialchars($product['badge']) ?>
                            </span>
                        <?php endif; ?>
                    </div>
                    <a href="/index.php?url=product/detail/<?= htmlspecialchars($product['id']) ?>" class="btn" style="background:linear-gradient(90deg, #b61e1e, #f00);color:#fff;border:none;padding:6px 0;font-size:0.97rem;border-radius:8px;font-weight:500;box-shadow:none;">İncele</a>
                </div>
            <?php endforeach; else: ?>
                <p style="text-align:center;width:100%;color:#b61e1e;font-weight:500;">Ürün bulunamadı.</p>
            <?php endif; ?>
        </div>
    </main>
</body>
<script>
// Filtre panelini aç/kapat
document.addEventListener('DOMContentLoaded', function() {
    var sidebar = document.getElementById('filterSidebar');
    var btn = document.getElementById('filterToggleBtn');
    var content = document.getElementById('filterContent');
    btn.onclick = function(e) {
        e.preventDefault();
        sidebar.classList.toggle('open');
        content.classList.toggle('open');
    };
    // Küçük ekranda otomatik kapalı başlasın
    if(window.innerWidth < 900) {
        sidebar.classList.remove('open');
        content.classList.remove('open');
    }
});
</script>
</html>
