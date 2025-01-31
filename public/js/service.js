document.addEventListener('DOMContentLoaded', function () {
    const items = document.querySelectorAll('.service-item'); // Pilih semua item layanan
    const showMoreButton = document.getElementById('show-more');
    const showLessButton = document.getElementById('show-less');

    // Set default untuk tampilkan hanya 3 item pada mobile
    const itemsToShow = 3;
    let visibleItems = itemsToShow;

    // Fungsi untuk menunjukkan item berdasarkan jumlah visibleItems
    function updateVisibleItems() {
      items.forEach((item, index) => {
        if (index < visibleItems) {
          item.classList.remove('hidden');
        } else {
          item.classList.add('hidden');
        }
      });

      // Tampilkan tombol sesuai dengan jumlah item yang terlihat
      if (visibleItems >= items.length) {
        showMoreButton.classList.add('hidden');
        showLessButton.classList.add('hidden');
      } else {
        showMoreButton.classList.remove('hidden');
      }

      if (visibleItems <= itemsToShow) {
        showLessButton.classList.add('hidden');
      } else {
        showLessButton.classList.remove('hidden');
      }
    }

    // Fungsi untuk menunjukkan lebih banyak item
    showMoreButton.addEventListener('click', function () {
      visibleItems += 3; // Tampilkan 3 item lebih banyak
      updateVisibleItems();
    });

    // Fungsi untuk menunjukkan lebih sedikit item
    showLessButton.addEventListener('click', function () {
      visibleItems -= 3; // Sembunyikan 3 item
      updateVisibleItems();
    });

    // Inisialisasi tampilan item
    updateVisibleItems();
});


// Visibility Selengkapnya & Sembunyikan desc service
document.addEventListener("DOMContentLoaded", function () {
    const toggleVisibility = (buttonId, contentId) => {
        const button = document.getElementById(buttonId);
        const content = document.getElementById(contentId);

        button.addEventListener("click", () => {
            content.classList.toggle("hidden");
            button.textContent = content.classList.contains("hidden") ? "Baca Selengkapnya" : "Sembunyikan";
        });
    };

    // Subscribe
    toggleVisibility("button-laprak", "hidden-laprak");

    // Laprak
    toggleVisibility("button-subscribe", "hidden-subscribe");

    // Tubes
    toggleVisibility("button-tubes", "hidden-tubes");

    // Karya Ilmiah
    toggleVisibility("button-karya-ilmiah", "hidden-karya-ilmiah");

    // Express
    toggleVisibility("button-express", "hidden-express");

    // Skripsi
    toggleVisibility("button-skripsi", "hidden-skripsi");

});