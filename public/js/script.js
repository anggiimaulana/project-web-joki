function self() {
    window.location.href = 'https://jokitugaslo.com';
}

function order() {
    window.location.href = 'https://jokitugaslo.com';
}

document.addEventListener("DOMContentLoaded", () => {
    const words = ["Profesional", "Sat-set", "Canggih", "Dipercaya", "Lengkap", "Berkualitas"];
    const descElement = document.getElementById("desc");
    let currentIndex = 0;

    const updateWord = () => {
        descElement.classList.add("opacity-0", "scale-90");

        setTimeout(() => {
            currentIndex = (currentIndex + 1) % words.length;
            descElement.textContent = words[currentIndex];

            descElement.classList.remove("opacity-0", "scale-90");
        }, 500);
    };

    // Run updateWord every 3,5 seconds
    setInterval(updateWord, 3500);
});

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

    // About
    toggleVisibility("button-about", "hidden-about");

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

// Open image how-to-order-jokiinit
function openImage() {
    var imageUrl = document.getElementById('how-to-order-jokiinit').src;
    var modal = document.getElementById('image-modal');
    var modalImage = document.getElementById('large-image');
    
    modal.style.display = "flex";  
    modalImage.src = imageUrl;
}

// Close image how-to-order-jokiinit
function closeImage() {
    var modal = document.getElementById('image-modal');
    modal.style.display = "none";
}

// faq
function toggleDropdown(button) {
    // Tutup semua dropdown yang terbuka
    const allFaqs = document.querySelectorAll('[data-faq]');
    allFaqs.forEach((faq) => {
        const content = faq.querySelector('div');
        const icon = faq.querySelector('i');
        if (faq.contains(button)) {
            // Jika yang diklik, toggle visibility
            content.classList.toggle('hidden');
            icon.classList.toggle('bx-chevron-down');
            icon.classList.toggle('bx-chevron-up');
        } else {
            // Tutup dropdown lainnya
            content.classList.add('hidden');
            icon.classList.add('bx-chevron-down');
            icon.classList.remove('bx-chevron-up');
        }
    });
}

const faqContainer = document.getElementById('faq-container');
const toggleButton = document.getElementById('toggle-faq');

function toggleFaqVisibility() {
    const faqItems = Array.from(faqContainer.querySelectorAll('[data-faq]'));
    const hiddenFaqs = faqItems.slice(faqItemsToShow());
    hiddenFaqs.forEach((item) => item.classList.toggle('hidden'));

    toggleButton.textContent =
    toggleButton.textContent === 'Lihat Lebih Banyak' ? 'Lebih Sedikit' : 'Lihat Lebih Banyak';
}

function faqItemsToShow() {
    const screenWidth = window.innerWidth;

    if (screenWidth >= 768) {
      return 6; // Tampilkan 6 pada layar sedang (md)
    } else {
      return 4; // Tampilkan 4 pada layar kecil (mobile)
    }
}

function adjustFaqVisibility() {
    const faqItems = Array.from(faqContainer.querySelectorAll('[data-faq]'));
    const visibleCount = faqItemsToShow();

    faqItems.forEach((item, index) => {
        if (index < visibleCount) {
            item.classList.remove('hidden');
        } else {
            item.classList.add('hidden');
        }
    });

    toggleButton.textContent = 'Lihat Lebih Banyak';
}

  // Sesuaikan FAQ saat halaman dimuat dan saat ukuran layar berubah
window.addEventListener('DOMContentLoaded', adjustFaqVisibility);
window.addEventListener('resize', adjustFaqVisibility);