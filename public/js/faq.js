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