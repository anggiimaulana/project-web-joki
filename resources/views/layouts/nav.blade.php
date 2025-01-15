<header id="header" class="bg-white fixed w-full z-50 transition-colors duration-300">
    <nav class="container px-6 md:px-0 mx-auto flex max-w-8xl items-center justify-between py-4 border-b border-sky-200"
        aria-label="Global">
        <div class="name-company flex lg:flex-1">
            <a class="italic text-2xl md:text:3xl lg:text-3xl text-sky-500 hover:text-sky-600 font-bold" href="/">
                JOKIIN<span class="text-xl lg:text-2xl">IT.com</span>
            </a>
        </div>

        <!-- Mobile hamburger button -->
        <div class="flex lg:hidden">
            <button id="menu-toggle" type="button"
                class="-m-2.5 inline-flex items-center justify-center rounded-md p-2.5 text-sky-600">
                <svg class="h-7 w-7 " fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                    aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                </svg>
            </button>
        </div>

        <!-- Desktop menu -->
        <div class="navbar hidden lg:flex md:hidden md:gap-x-4 lg:gap-x-10">
            <a href="/"
                class="relative font-semibold text-gray-700 flex items-center gap-x-1 hover:text-sky-400 after:content-[''] after:absolute after:left-0 after:right-0 after:-bottom-1 after:h-[2px] after:bg-sky-400 after:scale-x-0 hover:after:scale-x-100 after:origin-center after:transition-transform {{ isset($slug) && $slug === 'home' ? 'active after:scale-x-100' : '' }}">
                <i class='bx bxs-home text-xl'></i>
                <p>Beranda</p>
            </a>
            <a href="/information"
                class="relative font-semibold text-gray-700 flex items-center gap-x-1 hover:text-sky-400 after:content-[''] after:absolute after:left-0 after:right-0 after:-bottom-1 after:h-[2px] after:bg-sky-400 after:scale-x-0 hover:after:scale-x-100 after:origin-center after:transition-transform {{ isset($slug) && $slug === 'information' ? 'active after:scale-x-100' : '' }}">
                <i class='bx bxl-blogger text-xl'></i>
                <p>Informasi</p>
            </a>
            <a href="/track-order"
                class="relative font-semibold text-gray-700 flex items-center gap-x-1 hover:text-sky-400 after:content-[''] after:absolute after:left-0 after:right-0 after:-bottom-1 after:h-[2px] after:bg-sky-400 after:scale-x-0 hover:after:scale-x-100 after:origin-center after:transition-transform {{ isset($slug) && $slug === 'track-order' ? 'active after:scale-x-100' : '' }}">
                <i class='bx bx-chart text-xl'></i>
                <p>Track Order</p>
            </a>
            <a href="/review"
                class="relative font-semibold text-gray-700 flex items-center hover:text-sky-400 after:content-[''] after:absolute after:left-0 after:right-0 after:-bottom-1 after:h-[2px] after:bg-sky-400 after:scale-x-0 hover:after:scale-x-100 after:origin-center after:transition-transform {{ isset($slug) && $slug === 'review' ? 'active after:scale-x-100' : '' }}">
                <i class='bx bxs-star-half text-xl'></i>
                <p>Review</p>
            </a>
            <div class="hidden lg:flex md:flex lg:flex-1 lg:justify-end gap-x-1">
                <a href="/how-to-order"
                    class="relative font-semibold text-base text-sky-500 px-6 py-2 after:content-[''] after:absolute after:left-0 after:right-0 after:-bottom-1 after:h-[2px] after:bg-sky-400 after:scale-x-0 hover:after:scale-x-100 after:origin-center after:transition-transform {{ isset($slug) && $slug === 'how-to-order' ? 'active after:scale-x-100' : '' }}">Bagaimana
                    Cara Ordernya?</a>
                <a href="/order"
                    class="font-semibold text-base text-white bg-sky-500 px-6 py-2 rounded-3xl border hover:bg-sky-600 {{ isset($slug) && $slug === 'order' ? 'active after:scale-x-100' : '' }}">Order
                    Sekarang</a>
            </div>
        </div>
    </nav>

    <!-- Mobile menu -->
    <div id="mobile-menu" class="lg:hidden hidden" role="dialog" aria-modal="true">
        <div class="fixed inset-0 z-10 bg-gray-900 opacity-50"></div>
        <div
            class="fixed inset-y-0 right-0 z-20 w-full overflow-y-auto bg-white px-6 py-4 sm:max-w-sm sm:ring-1 sm:ring-gray-900/10">
            <div class="flex items-center justify-between">
                <div class="flex items-center gap-x-2">
                    <a class="italic text-2xl text-sky-500 font-bold" href="/">
                        JOKIIN<span class="text-xl">IT.com</span>
                    </a>
                </div>
                <button id="menu-close" type="button" class="-m-2.5 rounded-md p-2.5 text-sky-600">
                    <svg class="h-7 w-7" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                        aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
            <div class="mt-6 flow-root">
                <div class="-my-6 divide-y divide-gray-500/10">
                    <div class="space-y-2 py-6">
                        <a href="/"
                            class="-mx-3 flex items-center gap-x-2 rounded-lg px-3 py-2 font-semibold text-gray-700 hover:bg-gray-50 hover:text-sky-500 {{ isset($slug) && $slug === 'home' ? 'active' : '' }}">
                            <i class='bx bxs-home text-xl'></i>
                            <p>Beranda</p>
                        </a>
                        <a href="/app/profil"
                            class="-mx-3 flex items-center gap-x-2 rounded-lg px-3 py-2 font-semibold text-gray-700 hover:bg-gray-50 hover:text-sky-500 {{ isset($slug) && $slug === 'profil' ? 'active' : '' }}">
                            <i class='bx bxl-blogger text-xl'></i>
                            <p>Blog</p>
                        </a>
                        <a href="/app/program"
                            class="-mx-3 flex items-center gap-x-2 rounded-lg px-3 py-2 font-semibold text-gray-700 hover:bg-gray-50 hover:text-sky-500 {{ isset($slug) && $slug === 'program' ? 'active' : '' }}">
                            <i class='bx bx-chart text-xl'></i>
                            <p>Track Order</p>
                        </a>
                        <a href="/app/store"
                            class="-mx-3 flex items-center gap-x-2 rounded-lg px-3 py-2 font-semibold text-gray-700 hover:bg-gray-50 hover:text-sky-500 {{ isset($slug) && $slug === 'store' ? 'active' : '' }}">
                            <i class='bx bxs-star-half text-xl'></i>
                            <p>Review</p>
                        </a>
                        <hr class="text-sky-200">
                        <div>
                            <a href="/"
                                class="-mx-3 flex items-center gap-x-2 rounded-lg px-3 py-2 font-semibold text-sky-500 hover:bg-gray-50 hover:text-sky-600">Bagaimana
                                Cara Ordernya?</a>
                            <a href="/"
                                class="-mx-3 flex items-center gap-x-2 rounded-lg px-3 py-2 font-semibold text-sky-500 hover:bg-gray-50 hover:text-sky-600">Order
                                Sekarang</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</header>
<script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
<script>
    // JavaScript for toggling the mobile menu
    const menuToggle = document.getElementById('menu-toggle');
    const menuClose = document.getElementById('menu-close');
    const mobileMenu = document.getElementById('mobile-menu');

    menuToggle.addEventListener('click', () => {
        mobileMenu.classList.toggle('hidden');
    });

    menuClose.addEventListener('click', () => {
        mobileMenu.classList.add('hidden');
    });

    // window.addEventListener('scroll', () => {
    //     const header = document.getElementById('header');
    //     if (window.scrollY > 0) {
    //         // warna navbar
    //         header.classList.remove('bg-zinc-100');
    //         header.classList.add('bg-white', 'shadow-md');
    //     } else {
    //         header.classList.remove('bg-white', 'shadow-md');
    //         header.classList.add('bg-zinc-100');
    //     }
    // });
</script>
