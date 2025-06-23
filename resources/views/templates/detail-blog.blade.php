<div class="bg-gray-50 py-4">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <nav class="flex" aria-label="Breadcrumb">
            <ol class="inline-flex items-center space-x-1 md:space-x-3">
                <li class="inline-flex items-center">
                    <a href="{{ route('HomePage') }}"
                        class="inline-flex items-center text-sm font-medium text-gray-700 hover:text-sky-700">
                        <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20">
                            <path
                                d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z">
                            </path>
                        </svg>
                        Home
                    </a>
                </li>
                <li>
                    <div class="flex items-center">
                        <svg class="w-6 h-6 text-gray-400" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd"
                                d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                clip-rule="evenodd"></path>
                        </svg>
                        <a href="{{ route('BlogPage') }}"
                            class="ml-1 text-sm font-medium text-gray-700 hover:text-sky-700 md:ml-2">Blog</a>
                    </div>
                </li>
                <li aria-current="page">
                    <div class="flex items-center">
                        <svg class="w-6 h-6 text-gray-400" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd"
                                d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                clip-rule="evenodd"></path>
                        </svg>
                        <span
                            class="ml-1 text-sm font-medium text-lavender md:ml-2">{{ Str::limit($blog->title, 50) }}</span>
                    </div>
                </li>
            </ol>
        </nav>
    </div>
</div>

<article class="container mx-auto py-8 md:py-12 px-4 sm:px-6 lg:px-8">
    <div class="max-w-6xl mx-auto grid grid-cols-1 lg:grid-cols-3 gap-10">
        <!-- Content Blog -->
        <div class="lg:col-span-2">
            <!-- Header -->
            <header class="mb-8">
                <div class="mb-4">
                    <span class="inline-block px-4 py-2 bg-sky-100 text-sky-700 rounded-full text-sm font-semibold">
                        {{ $blog->kategoriBlog->nama_kategori ?? 'Uncategorized' }}
                    </span>
                </div>
                <h1 class="text-2xl md:text-4xl font-bold text-gray-700 mb-6 leading-tight">
                    {{ $blog->title }}
                </h1>
                <div class="flex flex-col md:flex-row md:items-center md:justify-between text-gray-600 mb-6">
                    <div class="flex items-center mb-4 md:mb-0">
                        <div
                            class="w-10 h-10 bg-sky-700 rounded-full flex items-center justify-center text-white font-semibold mr-3">
                            {{ substr($blog->user->name ?? 'A', 0, 1) }}
                        </div>
                        <div>
                            <p class="font-medium text-gray-700">{{ $blog->user->name ?? 'Admin' }}</p>
                            <p class="text-sm text-gray-600">{{ $blog->posisi_kerja ?? 'Content Writer' }}</p>
                        </div>
                    </div>
                    <div class="flex items-center text-sm text-gray-500">
                        <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd"
                                d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z"
                                clip-rule="evenodd"></path>
                        </svg>
                        {{ $blog->created_at->format('F d, Y') }}
                        <span class="mx-2">•</span>
                        <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd"
                                d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z"
                                clip-rule="evenodd"></path>
                        </svg>
                        {{ ceil(str_word_count(strip_tags($blog->content)) / 200) }} min read
                    </div>
                </div>
            </header>

            <!-- Featured Image -->
            @if ($blog->gambar_url)
                <div class="mb-8 rounded-2xl overflow-hidden shadow-lg">
                    <img src="{{ $blog->gambar_url }}" alt="{{ $blog->title }}"
                        class="w-full h-64 md:h-96 object-cover">
                </div>
            @endif

            <!-- Content (support enter/baris baru) -->
            <div class="prose prose-lg max-w-none">
                <div class="text-gray-700 leading-relaxed">
                    {!! nl2br(e($blog->content)) !!}
                </div>
            </div>

            <!-- Share Buttons -->
            <div class="border-t border-gray-200 pt-8 mb-8">
                <h3 class="text-lg font-semibold text-gray-700 mb-2">Bagikan Artikel Ini</h3>
                <div class="flex space-x-4">
                    <a href="https://wa.me/?text={{ urlencode($blog->title . ' - Baca selengkapnya di: ' . request()->fullUrl()) }}"
                        target="_blank"
                        class="inline-flex items-center px-4 py-2 bg-green-500 text-white rounded-lg hover:bg-green-600 transition-colors duration-200">
                        <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 24 24">
                            <path
                                d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0020.885 3.488" />
                        </svg>
                        WhatsApp
                    </a>
                </div>
            </div>


            <!-- Back to Blog -->
            <div class="text-center">
                <a href="{{ route('BlogPage') }}"
                    class="inline-flex items-center px-6 py-3 bg-lavender text-white rounded-lg hover:bg-sky-700 transition-colors duration-200 font-medium">
                    <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M10 19l-7-7m0 0l7-7m-7 7h18" />
                    </svg>
                    Kembali ke Blog
                </a>
            </div>
        </div>
        <!-- Sidebar Blog Terkait -->
        <aside class="lg:col-span-1">
            <div class="sticky md:top-24">
                <h2 class="text-xl md:text-2xl font-bold text-lavender mb-2 md:mb-4 text-center lg:text-left">
                    Artikel Terkait
                </h2>
                <div class="flex flex-col gap-6">
                    @if ($relatedBlogs && $relatedBlogs->count() > 0)
                        @foreach ($relatedBlogs as $item)
                            <article
                                class="group bg-white rounded-3xl overflow-hidden shadow-lg hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-2 border border-gray-100">
                                <div class="relative overflow-hidden">
                                    <img class="h-40 w-full object-cover transition-transform duration-500 group-hover:scale-110"
                                        src="{{ $item->gambar_url ?? '/img/no-image.jpg' }}" loading="lazy"
                                        alt="{{ $item->title }}">
                                    <div
                                        class="absolute inset-0 bg-gradient-to-t from-black/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                                    </div>
                                    <div class="absolute top-3 left-3">
                                        <span
                                            class="px-3 py-1 bg-white/90 backdrop-blur-sm text-sky-700 rounded-full text-xs font-semibold shadow-md">
                                            {{ $item->kategoriBlog->nama_kategori ?? 'Uncategorized' }}
                                        </span>
                                    </div>
                                </div>
                                <div class="p-4">
                                    <a href="{{ route('BlogDetail', $item->slug) }}" class="block">
                                        <h3
                                            class="text-base font-bold text-gray-700 mb-2 group-hover:text-sky-700 transition-colors duration-300 line-clamp-2">
                                            {{ $item->title }}
                                        </h3>
                                    </a>
                                    <p class="text-gray-600 text-xs mb-3 line-clamp-2">
                                        {{ Str::limit(strip_tags($item->content), 60) }}
                                    </p>
                                    <div class="flex items-center justify-between pt-2 border-t border-gray-100">
                                        <div class="flex items-center gap-2">
                                            <div
                                                class="w-7 h-7 bg-gradient-to-r from-sky-500 to-blue-500 rounded-full flex items-center justify-center text-white font-semibold text-xs">
                                                {{ substr($item->user->name ?? 'A', 0, 1) }}
                                            </div>
                                            <div>
                                                <p class="text-xs font-medium text-gray-700">
                                                    {{ $item->user->name ?? 'Admin' }}</p>
                                            </div>
                                        </div>
                                        <a href="{{ route('BlogDetail', $item->slug) }}"
                                            class="inline-flex items-center gap-2 px-3 py-1.5 bg-gradient-to-r from-sky-600 to-blue-600 text-white rounded-full hover:from-sky-700 hover:to-blue-700 transition-all duration-300 text-xs font-medium shadow-md hover:shadow-lg transform hover:scale-105">
                                            <span>Baca</span>
                                            <svg class="w-3 h-3" fill="none" stroke="currentColor"
                                                viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M17 8l4 4m0 0l-4 4m4-4H3" />
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                            </article>
                        @endforeach
                    @else
                        <div
                            class="bg-sky-50 border border-sky-200 rounded-2xl p-6 text-center text-sky-700 font-semibold shadow">
                            Tidak ada artikel dengan kategori yang sama.
                        </div>
                    @endif
                </div>
            </div>
        </aside>
    </div>
</article>

<style>
    .line-clamp-2 {
        display: -webkit-box;
        -webkit-line-clamp: 2;
        -webkit-box-orient: vertical;
        overflow: hidden;
    }
</style>
