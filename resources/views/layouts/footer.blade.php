<footer class="bg-white py-6 border-t border-gray-200">
    <div class="container mx-auto px-6 lg:px-14">
        <div class="flex flex-col lg:flex-row lg:justify-between gap-16">
            <!-- Logo and description -->
            <div class="lg:w-2/5">
                <div class="flex items-center space-x-4">
                    <img src="{{ asset('assets/LOGO-HIMA-SIKC FIX.png') }}" alt="Logo Himasikc" class="h-10 lg:h-14 w-auto" loading="lazy">
                    <h2 class="text-yellow-500 font-bold text-xl hover:text-yellow-400">HIMA-SIKC 2024</h2>
                </div>
                <p class="text-gray-500 mt-4">
                    Politeknik Negeri Indramayu <br>
                    <span>Jl. Lohbener Lama No.08, Lohbener, Legok, Indramayu, Kabupaten Indramayu, Jawa Barat.
                        <br>
                        Kode Pos 45252
                    </span>
                </p>
            </div>

            <!-- Links and Social Media Section -->
            <div class="lg:w-3/4 flex flex-col md:flex-row lg:justify-between lg:gap-32 gap-8 lg:pt-2">
                <div class="md:w-1/2">
                    <h2 class="font-bold text-gray-700 text-xl">Terhubung dengan kami</h2>
                    <!-- Social Media Icons -->
                    <div class="flex space-x-4 mt-4 lg:mt-8">
                        <a href="#" class="text-gray-500 hover:text-gray-800"><i
                                class="bx bxl-instagram text-4xl"></i></a>
                        <a href="#" class="text-gray-500 hover:text-gray-800"><i
                                class="bx bxl-github text-4xl"></i></a>
                        <a href="#" class="text-gray-500 hover:text-gray-800"><i
                                class="bx bxl-tiktok text-4xl"></i></a>
                        <a href="#" class="text-gray-500 hover:text-gray-800"><i
                                class="bx bxl-youtube text-4xl"></i></a>
                    </div>
                </div>

                <div class="md:w-1/2">
                    <h2 class="font-bold text-gray-700 pb-4 lg:pb-8 text-xl">Kritik dan Saran</h2>
                    <form action="">
                        <textarea class="px-2 border-2 border-gray-300 rounded-md w-full" name="kritikSaran" id="kritikSaran" rows="4"
                            placeholder="Isi kritik dan saran disini!"></textarea>
                        <input type="submit" name="submit" id="submit" value="Kirim"
                            class="flex bg-amber-500 hover:bg-amber-400 hover:text-white text-white font-semibold py-2 px-5 rounded mt-4">
                    </form>
                </div>
            </div>
        </div>

        <!-- Footer Bottom -->
        <div class="mb-8 mt-8 lg:mt-12 border-t border-gray-200 pt-4 lg:pt-8">
            <p class="text-center font-semibold text-gray-500">&copy; 2024 HIMA-SIKC. All rights reserved.</p>
        </div>
    </div>
</footer>