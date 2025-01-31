<section class="bg-gray-50">
    <div class="container mx-auto px-2 md:px-0 py-8 md:py-12">
        <div class="text-center px-2 md:px-0">
            <h3 class="text-gray-700 text-2xl md:text-4xl font-bold">
                Frequently Asked Questions
            </h3>
            <div class="h-2 rounded w-2/3 md:w-1/2 lg:w-1/4 mx-auto bg-gradient-to-r from-blue-700 to-blue-300 my-4"></div>
            <p class="text-base md:text-lg text-gray-700">
              Masih ragu menggunakan jasa di <span class="text-lavender font-semibold">
                JOKIIN<span class="text-sm md:text-base">IT</span>
            </span>? Jangan khawatir! 
              Berikut ini adalah jawaban atas beberapa pertanyaan yang sering diajukan oleh pengguna layanan kami. 
          </p>
        </div>
        <div id="faq-container" class="grid grid-cols-1 md:grid-cols-2 gap-4 md:gap-x-8 px-4 md:px-0 my-5">
            {{-- Anonymity --}}
            <div class="w-full" data-faq>
              <button
                class="flex justify-between items-center w-full p-4 text-left text-gray-700 bg-gray-100 font-semibold rounded-3xl shadow focus:outline-none text-base md:text-lg"
                onclick="toggleDropdown(this)"
              >
                <span>Apakah layanan di JokiInit aman dan rahasia?</span>
                <span class="text-2xl">
                  <i class="bx bx-chevron-down"></i>
                </span>
              </button>
              <div class="hidden p-4 bg-white text-gray-700 rounded-3xl rounded-t-2xl shadow text-base md:text-lg">
                Ya, kami menjamin kerahasiaan data dan keamanan informasi klien dalam setiap layanan yang kami berikan.
              </div>
            </div>
          
            {{-- Mhs dan pelajar --}}
            <div class="w-full" data-faq>
              <button
                class="flex justify-between items-center w-full p-4 text-left text-gray-700 bg-gray-100 font-semibold rounded-3xl shadow focus:outline-none text-base md:text-lg"
                onclick="toggleDropdown(this)"
              >
                <span>Berapa harga layanan di JokiInit?</span>
                <span class="text-2xl">
                  <i class="bx bx-chevron-down"></i>
                </span>
              </button>
              <div class="hidden p-4 bg-white text-gray-700 rounded-3xl rounded-t-2xl shadow text-base md:text-lg">
                Harga layanan kami mulai dari 30 ribu, tergantung pada tingkat kesulitan dan deadline pekerjaan. Silakan hubungi tim kami untuk detail harga sesuai kebutuhan Anda.
              </div>
            </div>
          
            {{-- Garansi --}}
            <div class="w-full" data-faq>
              <button
                class="flex justify-between items-center w-full p-4 text-left text-gray-700 bg-gray-100 font-semibold rounded-3xl shadow focus:outline-none text-base md:text-lg"
                onclick="toggleDropdown(this)"
              >
                <span>Apakah ada garansi untuk layanan yang diberikan?</span>
                <span class="text-2xl">
                  <i class="bx bx-chevron-down"></i>
                </span>
              </button>
              <div class="hidden p-4 bg-white text-gray-700 rounded-3xl rounded-t-2xl shadow text-base md:text-lg">
                Ya, kami memberikan garansi hasil kerja sesuai dengan deskripsi layanan yang disepakati di awal.
              </div>
            </div>
          
            {{-- Time --}}
            <div class="w-full" data-faq>
              <button
                class="flex justify-between items-center w-full p-4 text-left text-gray-700 bg-gray-100 font-semibold rounded-3xl shadow focus:outline-none text-base md:text-lg"
                onclick="toggleDropdown(this)"
              >
                <span>Berapa lama waktu penyelesaian tugas?</span>
                <span class="text-2xl">
                  <i class="bx bx-chevron-down"></i>
                </span>
              </button>
              <div class="hidden p-4 bg-white text-gray-700 rounded-3xl rounded-t-2xl shadow text-base md:text-lg">
                Waktu penyelesaian tergantung pada tingkat kesulitan dan kompleksitas tugas. Sebelum Anda melakukan order, kami akan memberikan keterangan deadline yang jelas untuk memastikan tugas selesai tepat waktu. Selain itu, kami juga akan memberikan estimasi waktu secara rinci sebelum memulai pekerjaan.
              </div>
            </div>

            {{-- Diskon --}}
            <div class="w-full" data-faq>
              <button
                class="flex justify-between items-center w-full p-4 text-left text-gray-700 bg-gray-100 font-semibold rounded-3xl shadow focus:outline-none text-base md:text-lg"
                onclick="toggleDropdown(this)"
              >
                <span>Apakah saya bisa mendapatkan diskon untuk layanan tertentu?</span>
                <span class="text-2xl">
                  <i class="bx bx-chevron-down"></i>
                </span>
              </button>
              <div class="hidden p-4 bg-white text-gray-700 rounded-3xl rounded-t-2xl shadow text-base md:text-lg">
                Tentu! Kami sering mengadakan promo atau diskon menarik untuk pelanggan setia. Informasi ini bisa Anda cek di website atau media sosial kami.
              </div>
            </div>

            {{-- Payment --}}
            <div class="w-full" data-faq>
              <button
                class="flex justify-between items-center w-full p-4 text-left text-gray-700 bg-gray-100 font-semibold rounded-3xl shadow focus:outline-none text-base md:text-lg"
                onclick="toggleDropdown(this)"
              >
                <span>Bagaimana cara pembayaran di JokiInit?</span>
                <span class="text-2xl">
                  <i class="bx bx-chevron-down"></i>
                </span>
              </button>
              <div class="hidden p-4 bg-white text-gray-700 rounded-3xl rounded-t-2xl shadow text-base md:text-lg">
                Kami menyediakan berbagai metode pembayaran yang fleksibel, termasuk:
                <strong class="italic">
                  ShopeePay, SeaBank, DANA, GoPay, LinkAja, dan QRIS
                </strong>
              </div>
            </div>

            {{-- Progres --}}
            <div class="w-full" data-faq>
              <button
                class="flex justify-between items-center w-full p-4 text-left text-gray-700 bg-gray-100 font-semibold rounded-3xl shadow focus:outline-none text-base md:text-lg"
                onclick="toggleDropdown(this)"
              >
                <span>Bagaimana saya mengetahui progres pengerjaan tugas saya?</span>
                <span class="text-2xl">
                  <i class="bx bx-chevron-down"></i>
                </span>
              </button>
              <div class="hidden p-4 bg-white text-gray-700 rounded-3xl rounded-t-2xl shadow text-base md:text-lg">
                Anda akan mendapatkan laporan progres secara berkala dari tim kami hingga tugas selesai.
              </div>
            </div>

            {{-- Semua Bidang --}}
            <div class="w-full" data-faq>
              <button
                class="flex justify-between items-center w-full p-4 text-left text-gray-700 bg-gray-100 font-semibold rounded-3xl shadow focus:outline-none text-base md:text-lg"
                onclick="toggleDropdown(this)"
              >
                <span>Apakah JokiInit melayani semua bidang tugas?</span>
                <span class="text-2xl">
                  <i class="bx bx-chevron-down"></i>
                </span>
              </button>
              <div class="hidden p-4 bg-white text-gray-700 rounded-3xl rounded-t-2xl shadow text-base md:text-lg">
                Kami berusaha melayani berbagai bidang tugas, namun jika tugas Anda berada di luar keahlian kami, tim akan memberi tahu Anda sejak awal.
              </div>
            </div>

            {{-- Cancel --}}
            <div class="w-full" data-faq>
              <button
                class="flex justify-between items-center w-full p-4 text-left text-gray-700 bg-gray-100 font-semibold rounded-3xl shadow focus:outline-none text-base md:text-lg"
                onclick="toggleDropdown(this)"
              >
                <span>Bagaimana jika saya ingin membatalkan pesanan setelah pembayaran?</span>
                <span class="text-2xl">
                  <i class="bx bx-chevron-down"></i>
                </span>
              </button>
              <div class="hidden p-4 bg-white text-gray-700 rounded-3xl rounded-t-2xl shadow text-base md:text-lg">
                Pembatalan dapat dilakukan sesuai dengan kebijakan pembatalan yang berlaku. Mohon hubungi tim kami untuk detail lebih lanjut.
              </div>
            </div>

            {{-- Payment --}}
            <div class="w-full" data-faq>
              <button
                class="flex justify-between items-center w-full p-4 text-left text-gray-700 bg-gray-100 font-semibold rounded-3xl shadow focus:outline-none text-base md:text-lg"
                onclick="toggleDropdown(this)"
              >
                <span>Bisakah saya meminta pekerjaan mendadak dengan waktu pengerjaan cepat?</span>
                <span class="text-2xl">
                  <i class="bx bx-chevron-down"></i>
                </span>
              </button>
              <div class="hidden p-4 bg-white text-gray-700 rounded-3xl rounded-t-2xl shadow text-base md:text-lg">
                Bisa, kami menyediakan layanan ekspres untuk pekerjaan mendesak dengan biaya tambahan.
              </div>
            </div>

            <!-- Tombol Lihat Lebih Banyak/Sembunyikan -->
            <div class="col-span-full flex justify-center">
              <button
                id="toggle-faq"
                class="bg-lavender hover:bg-sky-600 text-white font-semibold py-2 w-52  rounded-3xl transition-all duration-300"
                onclick="toggleFaqVisibility()"
              >
                Lihat Lebih Banyak
              </button>
            </div>
        </div>
    </div>
</section>
