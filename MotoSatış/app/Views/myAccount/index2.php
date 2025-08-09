<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hesabım</title>
    <link rel="stylesheet" href="/MotoSatış/public/assets/css/style.css">
    <style>
        body { background: #f6f7fb; }
        .account-main { max-width: 1100px; margin: 36px auto 0 auto; padding: 0 16px; display: flex; gap: 32px; align-items: flex-start; }
        .account-sidebar { min-width: 220px; max-width: 260px; background: #fff; border-radius: 16px; box-shadow: 0 4px 18px #b61e1e14; padding: 32px 20px 24px 20px; }
        .account-sidebar nav { display: flex; flex-direction: column; gap: 22px; }
        .account-sidebar a { color: #b61e1e; font-weight: 600; font-size: 1.09rem; border-radius: 10px; padding: 11px 14px 11px 38px; text-decoration: none; position: relative; transition: background .15s, color .15s; }
        .account-sidebar a:hover, .account-sidebar a.active { background: #f7eaea; color: #fff; }
        .account-sidebar a::before { content: ''; position: absolute; left: 14px; top: 50%; transform: translateY(-50%); width: 18px; height: 18px; background-size: contain; background-repeat: no-repeat; opacity: 0.7; }
        .account-sidebar a[href="#user-info"]::before { background-image: url('https://cdn-icons-png.flaticon.com/512/1077/1077012.png'); }
        .account-sidebar a[href="#orders"]::before { background-image: url('https://cdn-icons-png.flaticon.com/512/3500/3500833.png'); }
        .account-sidebar a[href="#addresses"]::before { background-image: url('https://cdn-icons-png.flaticon.com/512/484/484167.png'); }
        .account-sidebar a[href="#favorites"]::before { background-image: url('https://cdn-icons-png.flaticon.com/512/833/833472.png'); }
        .account-sidebar a[href="#change-password"]::before { background-image: url('https://cdn-icons-png.flaticon.com/512/3064/3064155.png'); }
        .account-sidebar a[href="#logout"]::before { background-image: url('https://cdn-icons-png.flaticon.com/512/1828/1828479.png'); }
        .account-content { flex: 1; min-width: 0; }
        .account-content h1 { font-size: 2.1rem; font-weight: 700; color: #b61e1e; margin-bottom: 22px; letter-spacing: -1px; }
        .account-section { background: #fff; border-radius: 14px; box-shadow: 0 2px 12px #b61e1e08; padding: 28px 26px 22px 26px; margin-bottom: 32px; }
        .account-section h2 { font-size: 1.18rem; color: #b61e1e; margin-bottom: 16px; font-weight: 700; letter-spacing: -0.5px; }
        .account-form { display: grid; gap: 14px 22px; grid-template-columns: 1fr 1fr; max-width: 520px; }
        .account-form label { font-size: 1rem; color: #333; font-weight: 500; margin-bottom: 2px; display: block; }
        .account-form input { width: 100%; padding: 9px 10px; border-radius: 8px; border: 1px solid #e2e2e2; font-size: 1.04rem; background: #f6f7fb; }
        .account-form .form-actions { grid-column: 1/3; text-align: right; }
        .account-btn { background: linear-gradient(90deg, #b61e1e, #f00); color: #fff; padding: 10px 28px; border-radius: 9px; border: none; font-weight: 600; font-size: 1.05rem; cursor: pointer; transition: background .18s; box-shadow: 0 2px 8px #b61e1e22; }
        .account-btn:hover { background: #b61e1e; }
        .account-list { list-style: none; padding: 0; margin: 0; }
        .account-list li { background: #f6f7fb; padding: 15px 20px; border-radius: 9px; margin-bottom: 12px; font-size: 1.04rem; display: flex; align-items: center; justify-content: space-between; border: 1px solid #ececec; }
        .account-list .badge { font-size: 0.95em; padding: 2px 10px; border-radius: 8px; margin-left: 8px; background: #ffe066; color: #222; }
        .account-list .status { font-weight: 600; }
        .account-list .status.kargoda { color: #b61e1e; }
        .account-list .status.teslim { color: #888; }
        .account-list .edit-btn { margin-left: 14px; background: #fff; color: #b61e1e; border: 1.2px solid #b61e1e44; border-radius: 7px; padding: 6px 15px; font-weight: 500; cursor: pointer; transition: background .15s; }
        .account-list .edit-btn:hover { background: #f7eaea; }
        .account-form-col { display: flex; flex-direction: column; gap: 7px; }
        .favorites-list { display: flex; gap: 18px; flex-wrap: wrap; }
        .favorites-list li { background: #f6f7fb; padding: 12px 18px; border-radius: 9px; font-size: 1.03rem; border: 1px solid #ececec; }
        @media (max-width: 900px) {
            .account-main { flex-direction: column; gap: 0; }
            .account-sidebar { max-width: 100%; min-width: 0; margin-bottom: 18px; }
        }
</style>
<script>
document.addEventListener('DOMContentLoaded', function() {
  const links = document.querySelectorAll('.account-sidebar nav a');
  const sections = document.querySelectorAll('.account-content .account-section');
  function showSection(hash) {
    sections.forEach(sec => {
      sec.style.display = sec.id === hash ? 'block' : 'none';
    });
    links.forEach(link => {
      if(link.getAttribute('href') === '#' + hash) {
        link.classList.add('active');
      } else {
        link.classList.remove('active');
      }
    });
  }
  links.forEach(link => {
    link.addEventListener('click', function(e) {
      e.preventDefault();
      const hash = this.getAttribute('href').replace('#','');
      showSection(hash);
      history.replaceState(null, '', '#'+hash);
    });
  });
  // Varsayılan: hash varsa ona, yoksa user-info'ya
  let hash = window.location.hash.replace('#','');
  if(!hash || !document.getElementById(hash)) hash = 'user-info';
  showSection(hash);
});
</script>
</head>
<body>
    <header>
        <nav class="navbar">
            <a href="/MotoSatış/app/Views/home/index1.php" class="navbar-logo">MotoSatış</a>
            <div class="navbar-links">
                <a href="/MotoSatış/app/Views/home/index1.php">Anasayfa</a>
                <a href="/MotoSatış/app/Views/product/index.php">Ürünler</a>
                <a href="/MotoSatış/app/Views/cart/index3.php">Sepetim</a>
            </div>
        </nav>
    </header>
    <main class="account-main">
        <aside class="account-sidebar">
            <nav>
                <a href="#user-info" class="active">Kullanıcı Bilgilerim</a>
                <a href="#orders">Siparişlerim</a>
                <a href="#addresses">Adreslerim</a>
                <a href="#favorites">Favorilerim</a>
                <a href="#change-password">Şifre Değiştir</a>
                <a href="#logout">Çıkış Yap</a>
            </nav>
        </aside>
        <section class="account-content">
            <h1>Hesabım</h1>
            <div id="user-info" class="account-section">
                <h2>Kullanıcı Bilgilerim</h2>
                <form class="account-form">
                    <div class="account-form-col"><label>Ad Soyad</label><input type="text" value="<?= htmlspecialchars($data['user']['name']) ?>"></div>
                    <div class="account-form-col"><label>E-posta</label><input type="email" value="<?= htmlspecialchars($data['user']['email']) ?>"></div>
                    <div class="account-form-col"><label>Telefon</label><input type="tel" value="<?= htmlspecialchars($data['user']['phone']) ?>"></div>
                    <div class="form-actions"><button type="submit" class="account-btn">Kaydet</button></div>
                </form>
            </div>
            <div id="orders" class="account-section" style="display:none;">
                <h2>Siparişlerim</h2>
                <ul class="account-list">
                    <?php if (!empty($data['orders'])): ?>
                        <?php foreach($data['orders'] as $order): ?>
                            <li>
                                Sipariş #<?= $order['id'] ?> - <?= date('d.m.Y', strtotime($order['created_at'] ?? 'now')) ?>
                                <span class="status <?= strtolower($order['status']) ?>"> <?= htmlspecialchars($order['status']) ?> </span>
                                <span class="badge"> <?= $order['total'] ?> TL </span>
                            </li>
                        <?php endforeach; ?>
                    <?php else: ?>
                        <li>Henüz siparişiniz yok.</li>
                    <?php endif; ?>
                </ul>
            </div>
            <div id="addresses" class="account-section" style="display:none;">
                <h2>Adreslerim</h2>
                <ul class="account-list">
                    <?php if (!empty($data['addresses'])): ?>
                        <?php foreach($data['addresses'] as $addr): ?>
                            <li>
                                <?= htmlspecialchars($addr['title']) ?>: <?= htmlspecialchars($addr['address']) ?>, <?= htmlspecialchars($addr['city']) ?>, <?= htmlspecialchars($addr['district']) ?>, <?= htmlspecialchars($addr['postal_code']) ?>
                                <button class="edit-btn">Düzenle</button>
                            </li>
                        <?php endforeach; ?>
                    <?php else: ?>
                        <li>Henüz adresiniz yok.</li>
                    <?php endif; ?>
                </ul>
                <button class="account-btn" style="margin-top:10px;">Yeni Adres Ekle</button>
            </div>
            <div id="favorites" class="account-section" style="display:none;">
                <h2>Favorilerim</h2>
                <ul class="favorites-list">
                    <?php if (!empty($data['favorites'])): ?>
                        <?php foreach($data['favorites'] as $fav): ?>
                            <li>
                                <img src="/MotoSatış/public/assets/img/<?= htmlspecialchars($fav['image']) ?>" alt="<?= htmlspecialchars($fav['name']) ?>" style="width:32px;height:32px;object-fit:cover;border-radius:6px;margin-right:8px;vertical-align:middle;">
                                <?= htmlspecialchars($fav['name']) ?> <span style="color:#b61e1e;font-weight:600;">(<?= $fav['price'] ?> TL)</span>
                            </li>
                        <?php endforeach; ?>
                    <?php else: ?>
                        <li>Henüz favori ürününüz yok.</li>
                    <?php endif; ?>
                </ul>
            </div>
            <div id="change-password" class="account-section" style="max-width:400px;display:none;">
                <h2>Şifre Değiştir</h2>
                <form class="account-form" style="grid-template-columns:1fr;">
                    <div class="account-form-col"><input type="password" placeholder="Mevcut Şifre"></div>
                    <div class="account-form-col"><input type="password" placeholder="Yeni Şifre"></div>
                    <div class="account-form-col"><input type="password" placeholder="Yeni Şifre (Tekrar)"></div>
                    <div class="form-actions"><button type="submit" class="account-btn">Şifreyi Değiştir</button></div>
                </form>
            </div>
            <div id="logout" class="account-section" style="background:transparent;box-shadow:none;display:none;">
                <a href="/MotoSatış/index.php?url=user/logout" class="account-btn" style="background:#fff;color:#b61e1e;border:1.2px solid #b61e1e44;">Çıkış Yap</a>
            </div>
        </section>
    </main>