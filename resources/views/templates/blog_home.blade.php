<section class="bg-gradient-to-br from-gray-50 to-blue-50">
    <div class="container mx-auto py-8 md:py-12 px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-10">
            <h3 class="text-gray-700 text-3xl md:text-5xl font-bold mb-4">
                Blog, Informasi, dan Promo by
                <span class="text-transparent bg-clip-text bg-gradient-to-r from-sky-600 to-blue-600 font-serif">
                    JOKIIN<span class="text-xl md:text-3xl">IT</span>
                </span>
            </h3>
            <div
                class="h-2 rounded-full w-44 md:w-1/2 lg:w-1/3 mx-auto bg-gradient-to-r from-sky-500 via-blue-500 to-indigo-500 my-6 shadow-lg">
            </div>
            <p class="text-base md:text-lg text-gray-700 max-w-3xl mx-auto leading-relaxed">
                Temukan tips, insight, dan penawaran eksklusif dari
                <span class="text-sky-700 font-semibold">
                    JOKIIN<span class="text-sm md:text-base">IT</span>
                </span>
                untuk membantu menyelesaikan tugas dengan lebih cepat dan efisien!
            </p>
        </div>

        @if (isset($blog) && $blog->count() > 0)
            <!-- Blog Grid -->
            <div class="grid gap-6 grid-cols-1 md:grid-cols-2 lg:grid-cols-3 mb-8" id="blog-list">
                @foreach ($blog as $item)
                    <article
                        class="group bg-white rounded-3xl overflow-hidden shadow-lg hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-2 border border-gray-100">
                        <div class="relative overflow-hidden">
                            <img class="h-52 w-full object-cover transition-transform duration-500 group-hover:scale-110"
                                src="{{ $item->gambar_url }}" loading="lazy" alt="{{ $item->title }}">
                            <div
                                class="absolute inset-0 bg-gradient-to-t from-black/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                            </div>
                        </div>

                        <div class="p-6">
                            <div class="flex items-center justify-between text-sm text-gray-500 mb-3">
                                <div class="flex items-center gap-2">
                                    <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                    {{ $item->created_at->format('M d, Y') }}
                                </div>
                                <span
                                    class="px-4 py-1 bg-gradient-to-r from-sky-600 to-blue-600 text-white rounded-full text-md font-semibold shadow-md">
                                    {{ $item->kategoriBlog->nama_kategori ?? 'Uncategorized' }}
                                </span>
                            </div>

                            <a href="{{ route('BlogDetail', $item->slug) }}" class="block">
                                <h3
                                    class="text-xl font-bold text-gray-700 mb-3 group-hover:text-sky-700 transition-colors duration-300 line-clamp-2">
                                    {{ $item->title }}
                                </h3>
                            </a>

                            <p class="text-gray-600 mb-4 line-clamp-3 leading-relaxed">
                                {{ Str::limit(strip_tags($item->content), 120) }}
                            </p>

                            <div class="flex items-center justify-between pt-4 border-t border-gray-100">
                                <div class="flex items-center gap-3">
                                    <div
                                        class="w-8 h-8 bg-gradient-to-r from-sky-500 to-blue-500 rounded-full flex items-center justify-center text-white font-semibold text-sm">
                                        {{ substr($item->user->name ?? 'A', 0, 1) }}
                                    </div>
                                    <div>
                                        <p class="text-sm font-medium text-gray-700">{{ $item->user->name ?? 'Admin' }}
                                        </p>
                                        <p class="text-xs text-gray-500">{{ $item->posisi_kerja ?? 'Writer' }}</p>
                                    </div>
                                </div>

                                <a href="{{ route('BlogDetail', $item->slug) }}"
                                    class="inline-flex items-center gap-2 px-4 py-2 bg-gradient-to-r from-sky-600 to-blue-600 text-white rounded-full hover:from-sky-700 hover:to-blue-700 transition-all duration-300 text-sm font-medium shadow-md hover:shadow-lg transform hover:scale-105">
                                    <span>Baca</span>
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M17 8l4 4m0 0l-4 4m4-4H3" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </article>
                @endforeach
            </div>

            <div class="text-center">
                <button onclick="window.location.href='{{ route('BlogPage') }}'"
                    class="bg-lavender hover:bg-sky-600 text-white font-semibold py-2 w-40 md:w-52 text-sm md:text-base rounded-3xl transition-all duration-300">
                    Lihat Semua Blog
                </button>
            @else
                <div class="text-center py-16">
                    <div
                        class="mx-auto w-24 h-24 bg-gradient-to-r from-sky-100 to-blue-100 rounded-full flex items-center justify-center mb-6">
                        <svg class="w-12 h-12 text-sky-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-700 mb-4">Belum Ada Artikel</h3>
                    <p class="text-gray-600 text-lg">Artikel blog sedang dalam proses pengembangan. Kembali lagi nanti
                        ya!
                    </p>
                </div>
        @endif
    </div>
</section>

<style>
    .line-clamp-2 {
        display: -webkit-box;
        -webkit-line-clamp: 2;
        -webkit-box-orient: vertical;
        overflow: hidden;
    }

    .line-clamp-3 {
        display: -webkit-box;
        -webkit-line-clamp: 3;
        -webkit-box-orient: vertical;
        overflow: hidden;
    }
</style>
