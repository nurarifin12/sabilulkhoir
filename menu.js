//mendapatkan url saat ini atau ketika link di klik 
document.addEventListener('DOMContentLoaded', () => {
    // Mendapatkan URL saat ini berdasarkan hash (#id)
    const currentLocation = location.hash;
    const menuItems = document.querySelectorAll('.menu');

    // Menandai link yang sesuai dengan URL saat ini
    menuItems.forEach(item => {
        if (item.getAttribute('href') === currentLocation) {
            item.classList.add('active');
        }

        // Menangani klik pada link untuk memperbarui kelas 'active'
        item.addEventListener('click', function() {
            menuItems.forEach(nav => nav.classList.remove('active')); // Hapus semua 'active'
            this.classList.add('active'); // Tambahkan 'active' pada link yang diklik
        });
    });
});
