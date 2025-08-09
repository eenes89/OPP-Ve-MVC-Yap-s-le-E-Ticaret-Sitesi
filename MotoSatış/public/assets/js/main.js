// Dropdown toggle for 'Kategoriler' menu
// Açıklama: Navbar'daki 'Kategoriler' menüsünün tıklama ile açılır-kapanır (toggle) olmasını sağlar.
document.addEventListener('DOMContentLoaded', function() {
    // Tüm dropdownlar için genel çözüm
    var dropdowns = document.querySelectorAll('.navbar .dropdown');
    dropdowns.forEach(function(dropdown) {
        var btn = dropdown.querySelector('.dropdown-toggle');
        var menu = dropdown.querySelector('.dropdown-menu');
        if (btn && menu) {
            // Tıklama ile toggle
            btn.addEventListener('click', function(e) {
                e.preventDefault();
                // Diğer açık dropdownları kapat
                document.querySelectorAll('.navbar .dropdown-menu.show').forEach(function(openMenu) {
                    if (openMenu !== menu) openMenu.classList.remove('show');
                });
                menu.classList.toggle('show');
            });
            // Hover ile aç/kapat
            dropdown.addEventListener('mouseenter', function() {
                // Diğer açık dropdownları kapat
                document.querySelectorAll('.navbar .dropdown-menu.show').forEach(function(openMenu) {
                    if (openMenu !== menu) openMenu.classList.remove('show');
                });
                menu.classList.add('show');
            });
            dropdown.addEventListener('mouseleave', function() {
                menu.classList.remove('show');
            });
        }
    });
    // Menü dışında bir yere tıklanınca tüm dropdownları kapat
    document.addEventListener('click', function(e) {
        var isDropdown = e.target.closest('.navbar .dropdown');
        if (!isDropdown) {
            document.querySelectorAll('.navbar .dropdown-menu.show').forEach(function(menu) {
                menu.classList.remove('show');
            });
        }
    });
});
