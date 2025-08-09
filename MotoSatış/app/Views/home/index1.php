<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MotoSatış | Anasayfa</title>
    <link rel="stylesheet" href="/MotoSatış/public/assets/css/style.css">
    <script src="/MotoSatış/public/assets/js/main.js" defer></script>
</head>
<body>
    <header>
        <nav class="navbar">
            <a href="/MotoSatış/index.php?url=home/index" class="navbar-logo">MotoSatış</a>
            <form class="search-bar" action="/index.php?url=product/list" method="get" onsubmit="return searhRedirect(event)">
                <input type="hidden" name="url" value="product/list">
                <input type="text" name="q" placeholder="Ürün, kategori veya marka ara..." autocomplete="off">
                <button type="submit">Ara</button>
            </form>
            <div class="navbar-links">                
                <a href="/MotoSatış/app/Views/product/index.php">Ürünler</a>
                <!-- Kategoriler dropdown -->
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
                        <li><a href="MotoSatış/app/Views/brand/yamaha.php">Yamaha</a></li>
                        <li><a href="/index.php?url=brand/list&id=2">Honda</a></li>
                        <li><a href="/index.php?url=brand/list&id=3">Kawasaki</a></li>
                        <li><a href="/index.php?url=brand/list&id=4">Suzuki</a></li>
                        <li><a href="/index.php?url=brand/list&id=5">BMW</a></li>
                        <li><a href="/index.php?url=brand/list&id=6">CF Moto</a></li>
                        <li><a href="/index.php?url=brand/list&id=7">KTM</a></li>
                        <li><a href="MotoSatış/app/Views/brand/index4.php">Tüm Markalar</a></li>
                    </ul>                    
                </div>
                <a href="/MotoSatış/app/Views/myAccount/index2.php">Hesabım</a>
                <div class="dropdown">
                    <a href="/MotoSatış/index3.php?url=cart/index3" class="dropdown-toggle" tabindex="0">Sepetim</a>
                    <ul class="dropdown-menu">
                        <li><a href="MotoSatış/app/Views/cart/index3.php">Sepetim</a></li>
                        <li><a href="MotoSatış/orders.php?url=cart/orders">Siparişlerim</a></li>
                        <li><a href="MotoSatış/cargo.php?url=cart/cargoTracking">Kargo Takip</a></li>
                        <li><a href="MotoSatış/app/Views/cart/login.php">Giriş Yap</a></li>                      
                    </ul>
                </div>
            </div>
            <!-- ...diğer kodlar... -->
        </nav>        
    </header>
    <main class="container">
        <section class="featured-products" style="margin-bottom:32px;">
            <h1 class="welcome-animate" style="font-size:2rem;font-weight:700;color:#6d0909;text-align:center;margin:24px 0 8px 0;letter-spacing:0.01em;">MotoSatış'a Hoşgeldiniz!</h1>
            <p class="welcome-animate" style="font-size:1.08rem;color:#222;text-align:center;margin-bottom:18px;">En yeni motosiklet modelleri, aksesuarlar ve yedek parçalar burada!</p>
            <div class="product-list" style="display:flex;gap:24px;justify-content:center;flex-wrap:wrap;margin-top:24px;">
            <?php if (!empty($data['products'])): ?>
                <?php foreach($data['products'] as $product): ?>
                    <div class="product-card" style="border:1px solid #eee;padding:16px;width:260px;border-radius:12px;box-shadow:0 2px 8px #0001;background:#fff;">
                        <img src="/MotoSatış/public/assets/img/<?= htmlspecialchars($product['image']) ?>" alt="<?= htmlspecialchars($product['name']) ?>" style="width:100%;height:160px;object-fit:cover;border-radius:8px;">
                        <h3 style="margin:12px 0 6px 0;font-size:1.1rem;"><?= htmlspecialchars($product['name']) ?></h3>
                        <div style="color:#6d0909;font-weight:600;font-size:1.08rem;"><?= $product['price'] ?> TL</div>
                        <?php if (!empty($product['badge'])): ?><span style="background:#f5eaea;color:#a00;padding:2px 8px;border-radius:8px;font-size:0.95em;display:inline-block;margin:6px 0;"> <?= htmlspecialchars($product['badge']) ?> </span><?php endif; ?>
                        <p style="font-size:0.98em;color:#444;min-height:40px;"> <?= htmlspecialchars($product['description']) ?> </p>
                        <a href="/index.php?url=product/detail/<?= $product['id'] ?>" style="display:block;margin-top:10px;padding:8px 0;background:#6d0909;color:#fff;text-align:center;border-radius:8px;text-decoration:none;font-weight:500;">İncele</a>
                    </div>
                <?php endforeach; ?>
            <?php else: ?>
                <div style="text-align:center;color:#a00;font-size:1.1em;">Hiç ürün bulunamadı.</div>
            <?php endif; ?>
            </div>
        </section>
        <style>
        .welcome-animate {
            opacity: 0;
            transform: translateY(30px) scale(0.98);
            animation: welcomeFadeIn 1.1s cubic-bezier(.6,.2,.3,1.1) forwards;
        }
        .welcome-animate:nth-child(1) { animation-delay: 0.1s; }
        .welcome-animate:nth-child(2) { animation-delay: 0.35s; }
        .welcome-animate:nth-child(3) { animation-delay: 0.6s; }
        @keyframes welcomeFadeIn {
            to {
                opacity: 1;
                transform: translateY(0) scale(1);
            }
        }
        </style>
        <section class="banner">
            <!-- Carousel Banner Başlangıç -->
            <div class="banner-carousel" style="position:relative;width:100%;max-width:700px;margin:0 auto;overflow:hidden;border-radius:18px;box-shadow:0 4px 24px #b61e1e22;background:#fff;">
                <div class="carousel-slides">
                    <img src="/MotoSatış/public/assets/img/cf-motoo.jpg" alt="Kampanya 1" class="carousel-img active" style="width:100%;aspect-ratio:3/1;object-fit:contain;object-position:center;">
                    <img src="/MotoSatış/public/assets/img/demo1.jpg" alt="Kampanya 2" class="carousel-img" style="width:100%;aspect-ratio:3/1;object-fit:contain;object-position:center;">
                    <img src="/MotoSatış/public/assets/img/demo2.jpg" alt="Kampanya 3" class="carousel-img" style="width:100%;aspect-ratio:3/1;object-fit:contain;object-position:center;">
                </div>
                <button class="carousel-btn prev" style="position:absolute;top:50%;left:12px;transform:translateY(-50%);background:#fff;border:none;border-radius:50%;width:38px;height:38px;box-shadow:0 2px 8px #b61e1e22;cursor:pointer;font-size:1.5rem;color:#b61e1e;z-index:2;">&#8592;</button>
                <button class="carousel-btn next" style="position:absolute;top:50%;right:12px;transform:translateY(-50%);background:#fff;border:none;border-radius:50%;width:38px;height:38px;box-shadow:0 2px 8px #b61e1e22;cursor:pointer;font-size:1.5rem;color:#b61e1e;z-index:2;">&#8594;</button>
                <div class="carousel-dots" style="position:absolute;bottom:14px;left:0;right:0;display:flex;justify-content:center;gap:8px;z-index:2;">
                    <span class="carousel-dot active" style="width:12px;height:12px;background:#b61e1e;border-radius:50%;display:inline-block;cursor:pointer;"></span>
                    <span class="carousel-dot" style="width:12px;height:12px;background:#b61e1e55;border-radius:50%;display:inline-block;cursor:pointer;"></span>
                    <span class="carousel-dot" style="width:12px;height:12px;background:#b61e1e55;border-radius:50%;display:inline-block;cursor:pointer;"></span>
                </div>
            </div>
            <script>
            // Banner carousel autoplay fonksiyonu
            document.addEventListener('DOMContentLoaded', function() {
                var slides = document.querySelectorAll('.banner-carousel .carousel-img');
                var dots = document.querySelectorAll('.banner-carousel .carousel-dot');
                var btnPrev = document.querySelector('.banner-carousel .carousel-btn.prev');
                var btnNext = document.querySelector('.banner-carousel .carousel-btn.next');
                var current = 0;
                var autoplayInterval = null;
                function showSlide(idx) {
                    slides.forEach(function(slide,i){
                        slide.classList.toggle('active', i===idx);
                        slide.style.display = i===idx ? 'block' : 'none';
                    });
                    dots.forEach(function(dot,i){
                        dot.classList.toggle('active', i===idx);
                        dot.style.background = i===idx ? '#b61e1e' : '#b61e1e55';
                    });
                    current = idx;
                }
                function startAutoplay() {
                    if (autoplayInterval) clearInterval(autoplayInterval);
                    autoplayInterval = setInterval(function() {
                        showSlide((current+1)%slides.length);
                    }, 3500);
                }
                function stopAutoplay() {
                    if (autoplayInterval) clearInterval(autoplayInterval);
                }
                btnPrev.onclick = function(){ showSlide((current+slides.length-1)%slides.length); startAutoplay(); };
                btnNext.onclick = function(){ showSlide((current+1)%slides.length); startAutoplay(); };
                dots.forEach(function(dot,i){
                    dot.onclick = function(){ showSlide(i); startAutoplay(); };
                });
                document.querySelector('.banner-carousel').addEventListener('mouseenter', stopAutoplay);
                document.querySelector('.banner-carousel').addEventListener('mouseleave', startAutoplay);
                showSlide(0);
                startAutoplay();
            });
            </script>
            <!-- Carousel Banner Son -->
            <a class="btn welcome-animate" href="/index.php?url=product/list" style="display:block;margin:28px auto 0 auto;max-width:220px;background:linear-gradient(90deg, #b61e1e, #f00);color:#fff;font-weight:600;font-size:1.08rem;border-radius:10px;padding:10px 0;text-align:center;">Alışverişe Başla</a>
        </section>
        <section class="featured-products" style="margin-top:40px;">
            <h2>Öne Çıkan Ürünler</h2>
            <div class="product-list product-carousel" style="position:relative;max-width:100vw;width:100%;margin:0 auto;overflow-x:auto;display:flex;flex-wrap:nowrap;gap:24px;padding:24px 0 16px 0;background:transparent;">
                <div class="product-card" style="flex:0 0 210px;box-sizing:border-box;background:#fff;border-radius:14px;box-shadow:0 2px 16px #b61e1e11,0 1.5px 4px #b61e1e08;display:flex;flex-direction:column;align-items:center;padding:18px 12px 16px 12px;gap:10px;transition:box-shadow .2s,transform .2s;min-height:340px;">
                    <div class="carousel-img-wrapper" style="position:relative;width:100%;max-width:180px;max-height:120px;margin:0 auto 8px auto;display:flex;align-items:center;justify-content:center;gap:0;">
                        <button class="carousel-btn prev" style="position:static;background:#fff;border:1.2px solid #b61e1e22;border-radius:50%;width:24px;height:24px;box-shadow:0 1px 4px #b61e1e11;cursor:pointer;display:flex;align-items:center;justify-content:center;transition:box-shadow .2s,background .2s;outline:none;padding:0;">
                            <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M8.5 10L4 6L8.5 2" stroke="#b61e1e" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"/></svg>
                        </button>
                        <div style="flex:1;display:flex;align-items:center;justify-content:center;">
                            <img class="carousel-img active" src="/MotoSatış/public/assets/img/l2kask.jpg" alt="Kask" style="width:100%;height:140px;aspect-ratio:3/2;object-fit:contain;object-position:center;background:#fff;border-radius:10px 10px 0 0;display:block;">
                            <img class="carousel-img" src="/MotoSatış/public/assets/img/l2kask2.jpg" alt="Kask 2" style="width:100%;height:140px;aspect-ratio:3/2;object-fit:contain;object-position:center;background:#fff;border-radius:10px 10px 0 0;display:none;">
                        </div>
                        <button class="carousel-btn next" style="position:static;background:#fff;border:1.2px solid #b61e1e22;border-radius:50%;width:24px;height:24px;box-shadow:0 1px 4px #b61e1e11;cursor:pointer;display:flex;align-items:center;justify-content:center;transition:box-shadow .2s,background .2s;outline:none;padding:0;">
                            <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M4 2L8.5 6L4 10" stroke="#b61e1e" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"/></svg>
                        </button>
                    </div>
                    <h2 style="font-size:1.08rem;font-weight:600;color:#b61e1e;margin:10px 0 2px 0;letter-spacing:0.01em;">Kask</h2>
                    <div class="price" style="font-size:1.01rem;font-weight:500;color:#222;margin-bottom:2px;">6.500 TL <span class="badge" style="background:#ffe066;color:#222;font-size:0.92em;padding:2px 7px;border-radius:8px;margin-left:6px;">%15 İndirim</span></div>
                    <div style="display:flex;gap:8px;flex-wrap:wrap;justify-content:center;margin-bottom:2px;">
                        <button class="btn" style="background:#fff;color:#b61e1e;border:1.2px solid #b61e1e;padding:6px 14px;font-size:0.97rem;border-radius:8px;font-weight:500;transition:background .2s,color .2s;box-shadow:none;">Sepete Ekle</button>
                        <a href="/index.php?url=product/detail/1" class="btn" style="background:linear-gradient(90deg, #b61e1e, #f00);color:#fff;border:none;padding:6px 14px;font-size:0.97rem;border-radius:8px;font-weight:500;box-shadow:none;">İncele</a>
                    </div>
                    <!-- carousel-controls kaldırıldı, oklar resmin yanında -->
                </div>
                <div class="product-card" style="flex:0 0 210px;box-sizing:border-box;background:#fff;border-radius:14px;box-shadow:0 2px 16px #b61e1e11,0 1.5px 4px #b61e1e08;display:flex;flex-direction:column;align-items:center;padding:18px 12px 16px 12px;gap:10px;transition:box-shadow .2s,transform .2s;min-height:340px;">
                    <div class="carousel-img-wrapper" style="position:relative;width:100%;max-width:180px;max-height:120px;margin:0 auto 8px auto;display:flex;align-items:center;justify-content:center;gap:0;">
                        <button class="carousel-btn prev" style="position:static;background:#fff;border:1.2px solid #b61e1e22;border-radius:50%;width:24px;height:24px;box-shadow:0 1px 4px #b61e1e11;cursor:pointer;display:flex;align-items:center;justify-content:center;transition:box-shadow .2s,background .2s;outline:none;padding:0;">
                            <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M8.5 10L4 6L8.5 2" stroke="#b61e1e" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"/></svg>
                        </button>
                        <div style="flex:1;display:flex;align-items:center;justify-content:center;">
                            <img class="carousel-img active" src="/MotoSatış/public/assets/img/racingCeket.jpeg" alt="Kışlık Ceket" style="width:100%;height:140px;aspect-ratio:3/2;object-fit:contain;object-position:center;background:#fff;border-radius:10px 10px 0 0;display:block;">
                            <img class="carousel-img" src="/MotoSatış/public/assets/img/racingCeket2.jpg" alt="Kışlık Ceket 2" style="width:100%;height:140px;aspect-ratio:3/2;object-fit:contain;object-position:center;background:#fff;border-radius:10px 10px 0 0;display:none;">
                        </div>
                        <button class="carousel-btn next" style="position:static;background:#fff;border:1.2px solid #b61e1e22;border-radius:50%;width:24px;height:24px;box-shadow:0 1px 4px #b61e1e11;cursor:pointer;display:flex;align-items:center;justify-content:center;transition:box-shadow .2s,background .2s;outline:none;padding:0;">
                            <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M4 2L8.5 6L4 10" stroke="#b61e1e" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"/></svg>
                        </button>
                    </div>
                    <h2 style="font-size:1.08rem;font-weight:600;color:#b61e1e;margin:10px 0 2px 0;letter-spacing:0.01em;">Kışlık Ceket</h2>
                    <div class="price" style="font-size:1.01rem;font-weight:500;color:#222;margin-bottom:2px;">12.299 TL <span class="badge" style="background:#ffe066;color:#222;font-size:0.92em;padding:2px 7px;border-radius:8px;margin-left:6px;">Yeni</span></div>
                    <div style="display:flex;gap:8px;flex-wrap:wrap;justify-content:center;margin-bottom:2px;">
                        <button class="btn" style="background:#fff;color:#b61e1e;border:1.2px solid #b61e1e;padding:6px 14px;font-size:0.97rem;border-radius:8px;font-weight:500;transition:background .2s,color .2s;box-shadow:none;">Sepete Ekle</button>
                        <a href="/index.php?url=product/detail/2" class="btn" style="background:linear-gradient(90deg, #b61e1e, #f00);color:#fff;border:none;padding:6px 14px;font-size:0.97rem;border-radius:8px;font-weight:500;box-shadow:none;">İncele</a>
                    </div>
                    <div class="carousel-controls" style="display:flex;justify-content:center;gap:8px;margin-top:6px;">
                        <button class="carousel-btn prev" style="position:static;background:#fff;border:1.2px solid #b61e1e22;border-radius:50%;width:24px;height:24px;box-shadow:0 1px 4px #b61e1e11;cursor:pointer;display:flex;align-items:center;justify-content:center;transition:box-shadow .2s,background .2s;outline:none;padding:0;">
                            <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M8.5 10L4 6L8.5 2" stroke="#b61e1e" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"/></svg>
                        </button>
                        <button class="carousel-btn next" style="position:static;background:#fff;border:1.2px solid #b61e1e22;border-radius:50%;width:24px;height:24px;box-shadow:0 1px 4px #b61e1e11;cursor:pointer;display:flex;align-items:center;justify-content:center;transition:box-shadow .2s,background .2s;outline:none;padding:0;">
                            <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M4 2L8.5 6L4 10" stroke="#b61e1e" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"/></svg>
                        </button>
                    </div>
                </div>
                <div class="product-card" style="flex:0 0 210px;box-sizing:border-box;background:#fff;border-radius:14px;box-shadow:0 2px 16px #b61e1e11,0 1.5px 4px #b61e1e08;display:flex;flex-direction:column;align-items:center;padding:18px 12px 16px 12px;gap:10px;transition:box-shadow .2s,transform .2s;min-height:340px;">
                    <div class="carousel-img-wrapper" style="position:relative;width:100%;max-width:180px;max-height:120px;margin:0 auto 8px auto;display:flex;align-items:center;justify-content:center;gap:0;">
                        <button class="carousel-btn prev" style="position:static;background:#fff;border:1.2px solid #b61e1e22;border-radius:50%;width:24px;height:24px;box-shadow:0 1px 4px #b61e1e11;cursor:pointer;display:flex;align-items:center;justify-content:center;transition:box-shadow .2s,background .2s;outline:none;padding:0;">
                            <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M8.5 10L4 6L8.5 2" stroke="#b61e1e" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"/></svg>
                        </button>
                        <div style="flex:1;display:flex;align-items:center;justify-content:center;">
                            <img class="carousel-img active" src="/MotoSatış/public/assets/img/gopro.jpg" alt="Go Pro" style="width:100%;height:140px;aspect-ratio:3/2;object-fit:contain;object-position:center;background:#fff;border-radius:10px 10px 0 0;display:block;">
                            <img class="carousel-img" src="/MotoSatış/public/assets/img/gopro2.jpg" alt="Go Pro 2" style="width:100%;height:140px;aspect-ratio:3/2;object-fit:contain;object-position:center;background:#fff;border-radius:10px 10px 0 0;display:none;">
                        </div>
                        <button class="carousel-btn next" style="position:static;background:#fff;border:1.2px solid #b61e1e22;border-radius:50%;width:24px;height:24px;box-shadow:0 1px 4px #b61e1e11;cursor:pointer;display:flex;align-items:center;justify-content:center;transition:box-shadow .2s,background .2s;outline:none;padding:0;">
                            <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M4 2L8.5 6L4 10" stroke="#b61e1e" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"/></svg>
                        </button>
                    </div>
                    <h2 style="font-size:1.08rem;font-weight:600;color:#b61e1e;margin:10px 0 2px 0;letter-spacing:0.01em;">Go Pro</h2>
                    <div class="price" style="font-size:1.01rem;font-weight:500;color:#222;margin-bottom:2px;">22.500 TL <span class="badge" style="background:#ffe066;color:#222;font-size:0.92em;padding:2px 7px;border-radius:8px;margin-left:6px;">Kargo Bedava</span></div>
                    <div style="display:flex;gap:8px;flex-wrap:wrap;justify-content:center;margin-bottom:2px;">
                        <button class="btn" style="background:#fff;color:#b61e1e;border:1.2px solid #b61e1e;padding:6px 14px;font-size:0.97rem;border-radius:8px;font-weight:500;transition:background .2s,color .2s;box-shadow:none;">Sepete Ekle</button>
                        <a href="/index.php?url=product/detail/3" class="btn" style="background:linear-gradient(90deg, #b61e1e, #f00);color:#fff;border:none;padding:6px 14px;font-size:0.97rem;border-radius:8px;font-weight:500;box-shadow:none;">İncele</a>
                    </div>
                    <!-- Oklar artık resmin yanında, alt kontrol kaldırıldı -->
                </div>
            </div>
            <script>
            // Her ürün kartı için kendi carousel'i
            document.addEventListener('DOMContentLoaded', function() {
                document.querySelectorAll('.product-card').forEach(function(card){
                    var imgs = card.querySelectorAll('.carousel-img');
                    var btnPrev = card.querySelector('.carousel-btn.prev');
                    var btnNext = card.querySelector('.carousel-btn.next');
                    if(!imgs.length || !btnPrev || !btnNext) return;
                    var current = 0;
                    var autoplayInterval = null;
                    function show(idx) {
                        imgs.forEach(function(img,i){
                            img.classList.toggle('active',i===idx);
                            img.style.display = i===idx ? 'block' : 'none';
                        });
                        current = idx;
                    }
                    function startAutoplay() {
                        if (autoplayInterval) clearInterval(autoplayInterval);
                        autoplayInterval = setInterval(function() {
                            show((current+1)%imgs.length);
                        }, 3000);
                    }
                    function stopAutoplay() {
                        if (autoplayInterval) clearInterval(autoplayInterval);
                    }
                    btnPrev.onclick = function(){ show((current+imgs.length-1)%imgs.length); startAutoplay(); };
                    btnNext.onclick = function(){ show((current+1)%imgs.length); startAutoplay(); };
                    card.querySelector('.carousel-img-wrapper').addEventListener('mouseenter', stopAutoplay);
                    card.querySelector('.carousel-img-wrapper').addEventListener('mouseleave', startAutoplay);
                    show(0);
                    startAutoplay();
                });
            });
            </script>
        </section>
    </main>
    <footer>
        &copy; 2025 MotoSatış. Tüm hakları saklıdır.
    </footer>
            </div>            
                    </div>                
            </div>
        </section>
    </main>
    
</body>
</html>