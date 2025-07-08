function self() {
    window.location.href = 'https://jokitugaslo.com';
}

function order() {
    window.location.href = 'https://jokitugaslo.com';
}

document.addEventListener('DOMContentLoaded', function () {
    const items = document.querySelectorAll('.service-item');
    const showMoreButton = document.getElementById('show-more');
    const showLessButton = document.getElementById('show-less');

    // Set default untuk tampilkan hanya 3 item pada mobile
    const itemsToShow = 3;
    let visibleItems = itemsToShow;

    // Fungsi untuk menunjukkan item berdasarkan jumlah visibleItems
    function updateVisibleItems() {
        // Dapatkan semua service items kecuali yang memiliki class md:flex (yang selalu tampil di desktop)
        const mobileItems = Array.from(items).filter(item => !item.classList.contains('md:flex'));
        
        // Untuk mobile: tampilkan berdasarkan visibleItems
        if (window.innerWidth < 768) {
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
                showLessButton.classList.remove('hidden');
            } else {
                showMoreButton.classList.remove('hidden');
            }

            if (visibleItems <= itemsToShow) {
                showLessButton.classList.add('hidden');
            } else {
                showLessButton.classList.remove('hidden');
            }
        } else {
            // Untuk desktop: tampilkan semua item dan sembunyikan tombol
            items.forEach(item => {
                item.classList.remove('hidden');
            });
            showMoreButton.classList.add('hidden');
            showLessButton.classList.add('hidden');
        }
    }

    // Fungsi untuk menunjukkan lebih banyak item
    showMoreButton.addEventListener('click', function () {
        visibleItems += 4;
        if (visibleItems > items.length) {
            visibleItems = items.length;
        }
        updateVisibleItems();
    });

    // Fungsi untuk menunjukkan lebih sedikit item
    showLessButton.addEventListener('click', function () {
        visibleItems = itemsToShow;
        updateVisibleItems();
    });

    // Handle resize window
    window.addEventListener('resize', updateVisibleItems);

    // Inisialisasi tampilan item
    updateVisibleItems();
});

// Visibility Selengkapnya & Sembunyikan desc service
document.addEventListener("DOMContentLoaded", function () {
    const toggleVisibility = (buttonId, contentId) => {
        const button = document.getElementById(buttonId);
        const content = document.getElementById(contentId);

        if (button && content) {
            button.addEventListener("click", () => {
                content.classList.toggle("hidden");
                button.textContent = content.classList.contains("hidden") ? "Baca Selengkapnya" : "Sembunyikan";
            });
        }
    };

    // Subscribe (Apps)
    toggleVisibility("button-subscribe", "hidden-subscribe");

    // Express
    toggleVisibility("button-express", "hidden-express");

    // Creative (sesuaikan dengan ID yang benar)
    toggleVisibility("button-creative", "hidden-creative");

    // Laprak
    toggleVisibility("button-laprak", "hidden-laprak");

    // Tubes
    toggleVisibility("button-tubes", "hidden-tubes");

    // Karya Ilmiah
    toggleVisibility("button-karya-ilmiah", "hidden-karya-ilmiah");

    // Lainnya
    toggleVisibility("button-lainnya", "hidden-lainnya");
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